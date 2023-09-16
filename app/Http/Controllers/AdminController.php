<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Careeropportunity;
use App\Models\Client;
use App\Models\Department;
use App\Models\Enquiry;
use App\Models\Faq;
use App\Models\Log;
use App\Models\Newslatter;
use App\Models\Role;
use App\Models\Seo;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    function storeLog($action, $function, $data)
    {
        $log = new Log();
        $log->userId = Auth::user()->id;
        $log->action = $action;
        $log->function = $function;
        $log->data = $data;
        $log->ip = request()->ip();
        $log->save();
    }

    public function indexDashboard()
    {
        $service = Service::where('deleteId', 0)->get();
        $user = User::where('deleteId', 0)->get();
        $department = Department::where('deleteId', 0)->orderBy('id', 'DESC')->limit(4)->get();
        $client = Client::where('deleteId', 0)->get();
        $blog = Blog::where('deleteId', 0)->get();

        return view('admin.dashboard', compact('service', 'user', 'department', 'blog', 'client'));
    }

    public function showRegister()
    {
        return view('admin.auth.register');
    }

    public function Register(Request $request)
    {
        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/login');
    }

    public function showforget(Request $request)
    {
        return view('forgetpassword');
    }

    public function forgetpassword(Request $request)
    {
        $user = User::where('phone', $request->phone)->count();

        if ($user == 0) {
            return response()->json([
                'status' => 201,
                'message' => 'No user found with this number',
            ]);
        }
        return response()->json([
            'status' => 200,

        ]);
    }

    public function changepassword(Request $request)
    {
        $user = User::where('phone', $request->phone)->first();
        $user->password = Hash::make($request->pass);
        $user->update();
        return response()->json([
            'status' => 200,
            'message' => 'Password changed successfully',
        ]);
    }

    public function login()
    {
        if (Auth::check()) {
            $this->storeLog('Login', 'login', 'Login');
            return redirect('dashboard');
        } else {
            return view('admin.auth.login');
            Session()->flash('alert-success', "Please login in first");
        }
        return view('admin.auth.login');
    }

    public function checkUser(Request $request)
    {
        $phone = $request->post('login');
        $email = $request->post('login');

        $result = User::where(['phone' => $phone])->orWhere(['email' => $email])->first();

        if ($result) {
            if ($result->status == 1 && $result->deleteId == 0) {
                if (Hash::check($request->post('password'), $result->password)) {
                    Auth::login($result);
                    return response()->json([
                        'status' => 200,
                        'message' => 'Logged in succesfully',
                    ]);
                } else {
                    Session()->flash('alert-danger', 'Incorrect password');
                    return response()->json([
                        'status' => 201,
                        'message' => 'Incorrect password',
                    ]);
                }
            } else if ($result->status != 1) {
                return response()->json([
                    'status' => 204,
                    'message' => 'User not active',
                ]);
            } else if ($result->deleteId == 1) {
                return response()->json([
                    'status' => 205,
                    'message' => 'User deleted',
                ]);
            }
        } else {

            return response()->json([
                'status' => 202,
                'message' => 'Invalid details',
            ]);
        }
    }

    public function logout()
    {
        $this->storeLog('Logout', 'logout', 'Logout');
        Auth::logout();
        return redirect('/login');
    }

    // Profile Controller

    public function showProfile()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('admin.user.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $profile = User::find(Auth::user()->id);
        $uploadpath = 'media/images/users';
        if ($request->hasFile('profileImage')) {
            $image = $request->file('profileImage');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/users/' . $final_name, 0777);
            $image_path = "media/images/users/" . $final_name;
            if (file_exists($profile->profileImage)) {
                unlink($profile->profileImage);
            }
        } else {
            $image_path = User::where('id', $request->Auth::user()->id)->first();
            $image_path = $image_path['profileImage'];
        }

        $profile->profileImage = $image_path;
        $profile->name = $request->name;
        $profile->phone = $request->phone;
        $profile->email = $request->email;
        $profile->update();

        $this->storeLog('Update', 'updateProfile', $profile);
        return redirect('/profile');
    }

    public function deactiveAccount()
    {
        $profile = User::find(Auth::user()->id);
        $profile->status = 0;
        $profile->update();
        $this->storeLog('Update', 'deactiveAccount', $profile);
        return redirect('/logout');
    }

    public function checkProfileEmail(Request $request)
    {
        $data = User::where('email', $request->email)->first();
        if ($data) {
            return response()->json([
                'status' => 201,
                'data' => $data,
                'message' => 'Email already exist',
            ]);
        }
    }

    public function checkProfilePass(Request $request)
    {
        $data = User::where('id', Auth::user()->id)->first();
        if (Hash::check($request->pass, $data->password)) {
            return response()->json([
                'status' => 200,
                'message' => 'Password matched',
            ]);
        }
    }

    public function saveNewPhonenumber(Request $request)
    {
        $profile = User::find(Auth::user()->id);
        $profile->phone = $request->phone;
        $profile->update();

        $this->storeLog('Update', 'saveNewPhonenumber', $profile);
        Auth::logout();
        return redirect('/login');
    }

    public function checkOldPass(Request $request)
    {
        $data = User::where('id', Auth::user()->id)->first();
        if (Hash::check($request->oldPass, $data->password)) {
            return response()->json([
                'status' => 200,
                'message' => 'Password matched',
            ]);
        }
    }

    public function updatePassword(Request $request)
    {
        $profile = User::find(Auth::user()->id);
        $profile->password = Hash::make($request->newpassword);
        $profile->save();
        $this->storeLog('Update', 'updatePassword', $profile);
        Auth::logout();
        return redirect('/login');
    }

    // Role Controller

    public function indexRole()
    {
        $roles = Role::whereNotIn('slug', ['developer'])->where('deleteId', '0')->orderBy('id', 'DESC')->get();
        return view('admin.user.role', compact('roles'));
    }

    public function addRole(Request $request)
    {
        $role = new Role;
        $role->name = $request->name;
        $slug = str::slug($request->name, '-');
        $role->slug = $slug;
        $role->status = $request->status;
        $role->save();

        $this->storeLog('Add', 'addRole', $role);
        Session()->flash('alert-success', "The role has been added successfully");
        return redirect('/role');
    }

    public function updateRole(Request $request)
    {
        $role = Role::find($request->roleId);
        $role->name = $request->name;
        $slug = Str::slug($request->name, '-');
        $role->slug = $slug;
        $role->status = $request->status;
        $role->update();

        $this->storeLog('Update', 'updateRole', $role);
        Session()->flash('alert-success', "The role has been successfully updated");
        return redirect()->back();
    }

    public function deleteRole(Request $request)
    {
        $role = Role::find($request->roleId);
        $role->deleteId = 1;
        $role->save();

        $this->storeLog('Delete', 'deleteRole', $role);
        Session()->flash('alert-danger', "The role has been deleted successfully");
        return redirect()->back();
    }

    // User Controller

    public function checkUserEmail(Request $request)
    {
        $data = User::where('email', $request->email)->where('deleteId', 0)->first();
        if ($data) {
            return response()->json([
                'status' => 201,
                'data' => $data,
                'message' => 'Email already exist',
            ]);
        }
    }

    public function checkUserPhone(Request $request)
    {
        $data = User::where('phone', $request->phone)->where('deleteId', 0)->first();
        if ($data) {
            return response()->json([
                'status' => 201,
                'data' => $data,
                'message' => 'Phone already exist',
            ]);
        }
    }

    public function indexUser()
    {
        $users = User::whereNotIn('role', ['developer'])->where('deleteId', 0)->with('rolee')->orderBy('id', 'DESC')->get();
        $roles = Role::whereNotIn('slug', ['developer'])->where('deleteId', 0)->where('status', 1)->get();

        return view('admin.user.user', compact('users', 'roles'));
    }


    public function addUser(Request $request)
    {
        $user = new User;
        $uploadpath = 'media/images/users';
        if ($request->hasFile('profileImage')) {
            $image = $request->file('profileImage');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/users/' . $final_name, 0777);
            $image_path = "media/images/users/" . $final_name;
        } else {
            $image_path = null;
        }

        $user->profileImage = $image_path;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();

        $this->storeLog('Add', 'addUser', $user);
        Session()->flash('alert-success', "The user has been added successfully");
        return redirect('/user');
    }

    public function updateUser(Request $request)
    {
        $user = User::find($request->userId);
        $uploadpath = 'media/images/users';
        if ($request->hasFile('profileImage')) {
            $image = $request->file('profileImage');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/users/' . $final_name, 0777);
            $image_path = "media/images/users/" . $final_name;
            if (file_exists($user->profileImage)) {
                unlink($user->profileImage);
            }
        } else {
            $image_path = User::where('id', $request->userId)->first();
            $image_path = $image_path['profileImage'];
        }

        $user->profileImage = $image_path;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->update();

        $this->storeLog('Add', 'updateUser', $user);
        Session()->flash('alert-success', "The user has been successfully updated");
        return redirect('/user');
    }

    public function deleteUser(Request $request)
    {
        $user = User::find($request->userId);
        if (file_exists($user->profileImage)) {
            unlink($user->profileImage);
        }
        $user->deleteId = 1;
        $user->save();

        $this->storeLog('Delete', 'deleteUser', $user);
        Session()->flash('alert-danger', "The user has been deleted successfully");
        return redirect()->back();
    }

    // Blog Controller

    public function checkBlog(Request $request)
    {
        $data = Blog::where('title', $request->title)->where('deleteId', '0')->first();
        if ($data) {
            return response()->json([
                'status' => 201,
                'data' => $data,
                'message' => 'Title already exist',
            ]);
        }
    }

    public function indexBlog()
    {
        $blogs = Blog::where('deleteId', '0')->orderBy('id', 'DESC')->with('service')->get();
        return view('admin.other.blog', compact('blogs'));
    }

    public function showAddBlog()
    {
        $services = Service::where('status', 1)->where('deleteId', 0)->get();
        return view('admin.other.blogAdd', compact('services'));
    }

    public function viewBlog($id)
    {
        $blog = Blog::where('id', $id)->first();
        $services = Service::where('status', 1)->where('deleteId', 0)->get();

        return view('admin.other.blogUpdate', compact('blog', 'services'));
    }

    public function addBlog(Request $request)
    {
        $blog = new Blog;
        $uploadpath = 'media/images/blogs';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/blogs/' . $final_name, 0777);
            $image_path = "media/images/blogs/" . $final_name;
        } else {
            $image_path = null;
        }
        $blog->image = $image_path;
        $blog->title = $request->title;
        $blog->url = $request->url;
        $slug = str::slug($request->url, '-');
        $blog->slug = $slug;
        $blog->imgAlt = $request->imgAlt;
        $blog->subtitle = $request->subtitle;
        $blog->creator = Auth::User()->name;
        $blog->writer = $request->writer;
        $blog->description1 = $request->description1;
        $blog->description2 = $request->description2;
        $blog->status = $request->status;
        $blog->serviceId = $request->serviceId == '' ? 'Article' : $request->serviceId;
        $blog->type = $request->type;
        $blog->save();

        $this->storeLog('Add', 'addBlog', $blog);
        Session()->flash('alert-success', "The blog has been added successfully");
        return redirect('/blogs');
    }

    public function updateBlog(Request $request)
    {
        $blog = Blog::find($request->blogId);
        $uploadpath = 'media/images/teams';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/teams/' . $final_name, 0777);
            $image_path = "media/images/teams/" . $final_name;
            if (file_exists($blog->image)) {
                unlink($blog->image);
            }
        } else {
            $image_path = Blog::where('id', $request->blogId)->first();
            $image_path = $image_path['image'];
        }
        $blog->image = $image_path;
        $blog->title = $request->title;
        $blog->url = $request->url;
        $slug = str::slug($request->url, '-');
        $blog->slug = $slug;
        $blog->imgAlt = $request->imgAlt;
        $blog->subtitle = $request->subtitle;
        $blog->creator = Auth::User()->name;
        $blog->writer = $request->writer;
        $blog->description1 = $request->description1;
        $blog->description2 = $request->description2;
        $blog->status = $request->status;
        if ($request->type == 'general') {
            $blog->serviceId = 'Article';
        } else {
            $blog->serviceId = $request->serviceId == '' ? 'Article' : $request->serviceId;
        }
        $blog->type = $request->type;
        $blog->update();

        $this->storeLog('Add', 'updateBlog', $blog);
        Session()->flash('alert-success', "The blog has been successfully updated");
        return redirect('/blogs');
    }

    public function deleteBlog(Request $request)
    {
        $blog = Blog::find($request->blogId);
        if (file_exists($blog->image)) {
            unlink($blog->image);
        }
        $blog->deleteId = 1;
        $blog->save();

        $this->storeLog('Delete', 'deleteBlog', $blog);
        Session()->flash('alert-danger', "The blog has been deleted successfully");
        return redirect()->back();
    }

    // Testimonial Controller

    public function indexTestimonial()
    {
        $testimonials = Testimonial::orderBy('id', 'DESC')->get();
        return view('admin.other.testimonial', compact('testimonials'));
    }

    public function addTestimonial(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->sequence = $request->sequence;
        $testimonial->name = $request->name;
        $testimonial->companyName = $request->companyName;
        $testimonial->comment = $request->comment;
        $testimonial->status = $request->status;
        $testimonial->save();

        $this->storeLog('Add', 'addTestimonial', $testimonial);
        Session()->flash('alert-success', "The testimonial has been added successfully");
        return redirect('/testimonial');
    }

    public function updateTestimonial(Request $request)
    {
        $testimonial = Testimonial::find($request->testimonialId);
        $testimonial->sequence = $request->sequence;
        $testimonial->name = $request->name;
        $testimonial->companyName = $request->companyName;
        $testimonial->comment = $request->comment;
        $testimonial->status = $request->status;
        $testimonial->update();

        $this->storeLog('Update', 'updateTestimonial', $testimonial);
        Session()->flash('alert-success', "The testimonial has been successfully updated");
        return redirect()->back();
    }

    public function deleteTestimonial(Request $request)
    {
        $testimonial = Testimonial::find($request->testimonialId)->delete();

        $this->storeLog('Delete', 'deleteTestimonial', $testimonial);
        Session()->flash('alert-danger', "The testimonial has been deleted successfully");
        return redirect()->back();
    }

    // Newsletter Controller

    public function indexNewsletter()
    {
        $newsletters = Newslatter::orderBy('id', 'DESC')->get();
        return view('admin.other.newsletter', compact('newsletters'));
    }

    // Client Controller

    public function indexClient()
    {
        $clients = Client::where('deleteId', 0)->orderBy('id', 'DESC')->get();
        return view('admin.general.client', compact('clients'));
    }

    public function addClient(Request $request)
    {
        $client = new Client();
        $uploadpath = 'media/images/clients';
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/clients/' . $final_name, 0777);
            $image_path = "media/images/clients/" . $final_name;
        } else {
            $image_path = null;
        }

        $client->logo = $image_path;
        $client->name = $request->name;
        $client->imgAlt = $request->imgAlt;
        $client->sequence = $request->sequence;
        $client->status = $request->status;
        $client->save();

        $this->storeLog('Add', 'addClient', $client);
        Session()->flash('alert-success', "The client has been added successfully");
        return redirect('/client');
    }

    public function updateClient(Request $request)
    {
        $client = Client::find($request->clientId);
        $uploadpath = 'media/images/clients';
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/clients/' . $final_name, 0777);
            $image_path = "media/images/clients/" . $final_name;
            if (file_exists($client->logo)) {
                unlink($client->logo);
            }
        } else {
            $image_path = Client::where('id', $request->clientId)->first();
            $image_path = $image_path['logo'];
        }

        $client->logo = $image_path;
        $client->name = $request->name;
        $client->imgAlt = $request->imgAlt;
        $client->sequence = $request->sequence;
        $client->status = $request->status;
        $client->update();

        $this->storeLog('Update', 'updateClient', $client);
        Session()->flash('alert-success', "The client has been successfully updated");
        return redirect()->back();
    }

    public function deleteClient(Request $request)
    {
        $client = Client::find($request->clientId);
        if (file_exists($client->logo)) {
            unlink($client->logo);
        }
        $client->deleteId = 1;
        $client->save();

        $this->storeLog('Delete', 'deleteClient', $client);
        Session()->flash('alert-danger', "The client has been deleted successfully");
        return redirect()->back();
    }

    // Department Controller

    public function indexDepartment()
    {
        $departments = Department::where('deleteId', '0')->orderBy('id', 'DESC')->get();
        return view('admin.general.department', compact('departments'));
    }

    public function showAddDepartment()
    {
        return view('admin.general.departmentAdd');
    }

    public function viewDepartment($id)
    {
        $department = Department::where('id', $id)->first();

        return view('admin.general.departmentUpdate', compact('department'));
    }

    public function addDepartment(Request $request)
    {
        $department = new Department();
        $uploadpath = 'media/images/departments';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/departments/' . $final_name, 0777);
            $image_path = "media/images/departments/" . $final_name;
        } else {
            $image_path = null;
        }

        if ($request->hasFile('bannerImage')) {
            $image = $request->file('bannerImage');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/departments/' . $final_name, 0777);
            $bannerimage_path = "media/images/departments/" . $final_name;
        } else {
            $bannerimage_path = null;
        }

        $department->image = $image_path;
        $department->bannerImage = $bannerimage_path;
        $department->imgAlt = $request->imgAlt;
        $department->bannerImgAlt = $request->bannerImgAlt;
        $department->name = $request->name;
        $department->url = $request->url;
        $slug = str::slug($request->url, '-');
        $department->slug = $slug;
        $department->title = $request->title;
        $department->subtitle = $request->subtitle;
        $department->homePageDes = $request->homePageDes;
        $department->shortDescription = $request->shortDescription;
        $department->description = $request->description;
        $department->status = $request->status;
        $department->save();

        $this->storeLog('Add', 'addDepartment', $department);
        Session()->flash('alert-success', "The department has been added successfully");
        return redirect('/department');
    }

    public function updateDepartment(Request $request)
    {
        $department = Department::find($request->departmentId);
        $uploadpath = 'media/images/departments';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/departments/' . $final_name, 0777);
            $image_path = "media/images/departments/" . $final_name;
            if (file_exists($department->image)) {
                unlink($department->image);
            }
        } else {
            $image_path = Department::where('id', $request->departmentId)->first();
            $image_path = $image_path['image'];
        }

        if ($request->hasFile('bannerImage')) {
            $image = $request->file('bannerImage');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/departments/' . $final_name, 0777);
            $bannerimage_path = "media/images/departments/" . $final_name;
            if (file_exists($department->bannerImage)) {
                unlink($department->bannerImage);
            }
        } else {
            $bannerimage_path = Department::where('id', $request->departmentId)->first();
            $bannerimage_path = $bannerimage_path['bannerImage'];
        }

        $department->image = $image_path;
        $department->bannerImage = $bannerimage_path;
        $department->imgAlt = $request->imgAlt;
        $department->bannerImgAlt = $request->bannerImgAlt;
        $department->name = $request->name;
        $department->url = $request->url;
        $slug = str::slug($request->url, '-');
        $department->slug = $slug;
        $department->title = $request->title;
        $department->subtitle = $request->subtitle;
        $department->homePageDes = $request->homePageDes;
        $department->shortDescription = $request->shortDescription;
        $department->description = $request->description;
        $department->status = $request->status;
        $department->update();

        $this->storeLog('Add', 'updateDepartment', $department);
        Session()->flash('alert-success', "The department has been successfully updated");
        return redirect('/department');
    }

    public function deleteDepartment(Request $request)
    {
        $department = Department::find($request->departmentId);
        if (file_exists($department->image)) {
            unlink($department->image);
        }
        if (file_exists($department->bannerImage)) {
            unlink($department->bannerImage);
        }
        $department->deleteId = 1;
        $department->save();

        $this->storeLog('Delete', 'deleteDepartment', $department);
        Session()->flash('alert-danger', "The department has been deleted successfully");
        return redirect()->back();
    }

    // Team Controller

    public function indexTeam()
    {
        $teams = Team::where('deleteId', 0)->orderBy('id', 'DESC')->get();
        return view('admin.general.team', compact('teams'));
    }

    public function addTeam(Request $request)
    {
        $team = new Team();
        $uploadpath = 'media/images/teams';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/teams/' . $final_name, 0777);
            $image_path = "media/images/teams/" . $final_name;
        } else {
            $image_path = null;
        }

        $team->image = $image_path;
        $team->name = $request->name;
        $team->imgAlt = $request->imgAlt;
        $team->about = $request->about;
        $team->designation = $request->designation;
        $team->status = $request->status;
        $team->save();

        $this->storeLog('Add', 'addTeam', $team);
        Session()->flash('alert-success', "The team member has been added successfully");
        return redirect('/team');
    }

    public function updateTeam(Request $request)
    {
        $team = Team::find($request->teamId);
        $uploadpath = 'media/images/teams';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/teams/' . $final_name, 0777);
            $image_path = "media/images/teams/" . $final_name;
            if (file_exists($team->image)) {
                unlink($team->image);
            }
        } else {
            $image_path = Team::where('id', $request->teamId)->first();
            $image_path = $image_path['image'];
        }

        $team->image = $image_path;
        $team->name = $request->name;
        $team->imgAlt = $request->imgAlt;
        $team->about = $request->about;
        $team->status = $request->status;
        $team->designation = $request->designation;
        $team->update();

        $this->storeLog('Update', 'updateTeam', $team);
        Session()->flash('alert-success', "The team member has been successfully updated");
        return redirect()->back();
    }

    public function deleteTeam(Request $request)
    {
        $team = Team::find($request->teamId);
        if (file_exists($team->image)) {
            unlink($team->image);
        }
        $team->deleteId = 1;
        $team->save();

        $this->storeLog('Delete', 'deleteTeam', $team);
        Session()->flash('alert-danger', "The team member has been deleted successfully");
        return redirect()->back();
    }

    // FAQ Controller

    public function indexFaq()
    {
        $faqs = Faq::orderBy('id', 'DESC')->get();

        return view('admin.other.faq', compact('faqs'));
    }

    public function addFaq(Request $request)
    {
        $faq = new Faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->answer2 = $request->answer2;
        $faq->sequence = $request->sequence;
        $faq->status = $request->status;
        $faq->save();

        $this->storeLog('Add', 'addFaq', $faq);
        Session()->flash('alert-success', "The faq has been added successfully");
        return redirect('/faqs');
    }

    public function updateFaq(Request $request)
    {
        $faq = Faq::find($request->faqId);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->answer2 = $request->answer2;
        $faq->sequence = $request->sequence;
        $faq->status = $request->status;
        $faq->update();

        $this->storeLog('Update', 'updateFaq', $faq);
        Session()->flash('alert-success', "The faq has been successfully updated");
        return redirect()->back();
    }

    public function deleteFaq(Request $request)
    {
        $faq = Faq::find($request->faqId)->delete();

        $this->storeLog('Update', 'deleteFaq', $faq);
        Session()->flash('alert-danger', "The faq has been deleted successfully");
        return redirect()->back();
    }

    // Career Opportunities Controller

    public function indexCareer()
    {
        $careers = Careeropportunity::orderBy('id', 'DESC')->get();

        return view('admin.general.career', compact('careers'));
    }

    public function addCareer(Request $request)
    {
        $career = new Careeropportunity;
        $career->title = $request->title;
        $career->url = $request->url;
        $slug = str::slug($request->url, '-');
        $career->slug = $slug;
        $career->subtitle = $request->subtitle;
        $career->description = $request->description;
        $career->responsibilities = $request->responsibilities;
        $career->benefits = $request->benefits;
        $career->status = $request->status;
        $career->save();

        $this->storeLog('Add', 'addCareer', $career);
        Session()->flash('alert-success', "The career opportunity has been added successfully");
        return redirect('/careeropportunity');
    }

    public function updateCareer(Request $request)
    {
        $career = Careeropportunity::find($request->careerId);
        $career->title = $request->title;
        $career->url = $request->url;
        $slug = str::slug($request->url, '-');
        $career->slug = $slug;
        $career->subtitle = $request->subtitle;
        $career->description = $request->description;
        $career->responsibilities = $request->responsibilities;
        $career->benefits = $request->benefits;
        $career->status = $request->status;
        $career->update();

        $this->storeLog('Update', 'updateCareer', $career);
        Session()->flash('alert-success', "The career opportunity has been successfully updated");
        return redirect()->back();
    }

    public function deleteCareer(Request $request)
    {
        $career = Careeropportunity::find($request->careerId)->delete();

        $this->storeLog('Update', 'deleteCareer', $career);
        Session()->flash('alert-danger', "The career opportunity has been deleted successfully");
        return redirect()->back();
    }

    // Service Controller

    public function indexService()
    {
        $services = Service::where('deleteId', 0)->orderBy('id', 'DESC')->get();
        return view('admin.general.service', compact('services'));
    }

    public function showAddService()
    {
        $departments = Department::where('deleteId', 0)->where('status', 1)->get();
        return view('admin.general.serviceAdd', compact('departments'));
    }

    public function viewService($id)
    {
        $service = Service::where('id', $id)->first();
        $departments = Department::where('deleteId', 0)->where('status', 1)->get();

        return view('admin.general.serviceUpdate', compact('service', 'departments'));
    }

    public function addService(Request $request)
    {
        $service = new Service();
        $uploadpath = 'media/images/services';
        if ($request->hasFile('coverImage')) {
            $image = $request->file('coverImage');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/services/' . $final_name, 0777);
            $image_path = "media/images/services/" . $final_name;
        } else {
            $image_path = null;
        }

        if ($request->hasFile('necessaryImage')) {
            $image = $request->file('necessaryImage');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/services/' . $final_name, 0777);
            $necessaryImage_path = "media/images/services/" . $final_name;
        } else {
            $necessaryImage_path = null;
        }

        if ($request->hasFile('conclusionImage')) {
            $image = $request->file('conclusionImage');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/services/' . $final_name, 0777);
            $conclusionImage_path = "media/images/services/" . $final_name;
        } else {
            $conclusionImage_path = null;
        }

        $service->coverImage = $image_path;
        $service->necessaryImage = $necessaryImage_path;
        $service->conclusionImage = $conclusionImage_path;
        $service->coverImageAltTag = $request->coverImageAltTag;
        $service->necessaryImageAltTag = $request->necessaryImageAltTag;
        $service->conclusionImageAltTag = $request->conclusionImageAltTag;
        $service->departmentId = $request->departmentId;
        $service->name = $request->name;
        $service->url = $request->url;
        $slug = str::slug($request->url, '-');
        $service->slug = $slug;
        $service->subtitle = $request->subtitle;
        $service->flag = $request->flag;
        $service->homePageDesc = $request->homePageDesc;
        $service->intropara1 = $request->intropara1;
        $service->intropara2 = $request->intropara2;
        $service->nt1 = $request->nt1;
        $service->nt2 = $request->nt2;
        $service->nt3 = $request->nt3;
        $service->nt4 = $request->nt4;
        $service->nt5 = $request->nt5;
        $service->nta1 = $request->nta1;
        $service->nta2 = $request->nta2;
        $service->nta3 = $request->nta3;
        $service->nta4 = $request->nta4;
        $service->nta5 = $request->nta5;
        $service->st1 = $request->st1;
        $service->st2 = $request->st2;
        $service->st3 = $request->st3;
        $service->st4 = $request->st4;
        $service->st5 = $request->st5;
        $service->st6 = $request->st6;
        $service->sta1 = $request->sta1;
        $service->sta2 = $request->sta2;
        $service->sta3 = $request->sta3;
        $service->sta4 = $request->sta4;
        $service->sta5 = $request->sta5;
        $service->sta6 = $request->sta6;
        $service->conclusion = $request->conclusion;
        $service->status = $request->status;
        $service->save();

        $this->storeLog('Add', 'addService', $service);
        Session()->flash('alert-success', "The service has been added successfully");
        return redirect('/service');
    }

    public function updateService(Request $request)
    {
        $service = Service::find($request->serviceId);
        $uploadpath = 'media/images/services';

        if ($request->hasFile('coverImage')) {
            $image = $request->file('coverImage');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/services/' . $final_name, 0777);
            $image_path = "media/images/services/" . $final_name;
            if (file_exists($service->coverImage)) {
                unlink($service->coverImage);
            }
        } else {
            $image_path = Service::where('id', $request->serviceId)->first();
            $image_path = $image_path['coverImage'];
        }

        if ($request->hasFile('necessaryImage')) {
            $image = $request->file('necessaryImage');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/services/' . $final_name, 0777);
            $necessaryImage_path = "media/images/services/" . $final_name;
            if (file_exists($service->necessaryImage)) {
                unlink($service->necessaryImage);
            }
        } else {
            $necessaryImage_path = Service::where('id', $request->serviceId)->first();
            $necessaryImage_path = $necessaryImage_path['necessaryImage'];
        }

        if ($request->hasFile('conclusionImage')) {
            $image = $request->file('conclusionImage');
            $image_name = $image->getClientOriginalName();
            $final_name = time() . $image_name;
            $image->move($uploadpath, $final_name);
            chmod('media/images/services/' . $final_name, 0777);
            $conclusionImage_path = "media/images/services/" . $final_name;
            if (file_exists($service->conclusionImage)) {
                unlink($service->conclusionImage);
            }
        } else {
            $conclusionImage_path = Service::where('id', $request->serviceId)->first();
            $conclusionImage_path = $conclusionImage_path['conclusionImage'];
        }

        $service->coverImage = $image_path;
        $service->necessaryImage = $necessaryImage_path;
        $service->conclusionImage = $conclusionImage_path;
        $service->coverImageAltTag = $request->coverImageAltTag;
        $service->necessaryImageAltTag = $request->necessaryImageAltTag;
        $service->conclusionImageAltTag = $request->conclusionImageAltTag;
        $service->departmentId = $request->departmentId;
        $service->name = $request->name;
        $service->url = $request->url;
        $slug = str::slug($request->url, '-');
        $service->slug = $slug;
        $service->subtitle = $request->subtitle;
        $service->flag = $request->flag;
        $service->homePageDesc = $request->homePageDesc;
        $service->intropara1 = $request->intropara1;
        $service->intropara2 = $request->intropara2;
        $service->nt1 = $request->nt1;
        $service->nt2 = $request->nt2;
        $service->nt3 = $request->nt3;
        $service->nt4 = $request->nt4;
        $service->nt5 = $request->nt5;
        $service->nta1 = $request->nta1;
        $service->nta2 = $request->nta2;
        $service->nta3 = $request->nta3;
        $service->nta4 = $request->nta4;
        $service->nta5 = $request->nta5;
        $service->st1 = $request->st1;
        $service->st2 = $request->st2;
        $service->st3 = $request->st3;
        $service->st4 = $request->st4;
        $service->st5 = $request->st5;
        $service->st6 = $request->st6;
        $service->sta1 = $request->sta1;
        $service->sta2 = $request->sta2;
        $service->sta3 = $request->sta3;
        $service->sta4 = $request->sta4;
        $service->sta5 = $request->sta5;
        $service->sta6 = $request->sta6;
        $service->conclusion = $request->conclusion;
        $service->status = $request->status;
        $service->update();

        $this->storeLog('Add', 'updateService', $service);
        Session()->flash('alert-success', "The service has been successfully updated");
        return redirect('/service');
    }

    public function deleteService(Request $request)
    {
        $service = Service::find($request->serviceId);
        if (file_exists($service->coverImage)) {
            unlink($service->coverImage);
        }
        if (file_exists($service->necessaryImage)) {
            unlink($service->necessaryImage);
        }
        if (file_exists($service->conclusionImage)) {
            unlink($service->conclusionImage);
        }
        $service->deleteId = 1;
        $service->save();

        $this->storeLog('Delete', 'deleteService', $service);
        Session()->flash('alert-danger', "The service has been deleted successfully");
        return redirect()->back();
    }

    // Blog Seo Controller

    public function indexSeoBlog()
    {
        $seos = Seo::where('deleteId', 0)->orderBy('id', 'DESC')->with('blog')->where('type', 'BLOG')->get();
        if (Auth::user()->role == 'developer') {
            return view('admin.seo.blogSeo', compact('seos'));
        } else {
            return redirect('/dashboard');
        }
    }

    public function showAddSeoBlog()
    {
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->get();
        return view('admin.seo.blogSeoAdd', compact('blogs'));
    }

    public function viewSeoBlog($id)
    {
        $seoblog = Seo::where('id', $id)->first();
        $blog = Blog::where('id', $seoblog->fieldId)->first();
        return view('admin.seo.blogSeoUpdate', compact('seoblog', 'blog'));
    }

    public function addSeoBlog(Request $request)
    {
        $blogseo = new Seo();
        $uploadpath = 'media/images/blogseo';
        $url = env('APP_URL');

        if ($request->ogImage) {
            if ($request->hasFile('ogImage')) {
                $image = $request->file('ogImage');
                $image_name = $image->getClientOriginalName();
                $final_name = $image_name;
                $image->move($uploadpath, $final_name);
                chmod('media/images/blogseo/' . $final_name, 0777);
                $ogImage_path =  $url . "/" . $uploadpath . "/" . $final_name;
            } else {
                $ogImage_path = null;
            }
            $blogseo->ogImage = $ogImage_path;
        } else {
            $blogseo->ogImage = $request->ogImageurl;
        }

        if ($request->twitterImage) {
            if ($request->hasFile('twitterImage')) {
                $image = $request->file('twitterImage');
                $image_name = $image->getClientOriginalName();
                $final_name = $image_name;
                $image->move($uploadpath, $final_name);
                chmod('media/images/blogseo/' . $final_name, 0777);
                $twitterImage_path = $url . "/" . $uploadpath . "/" . $final_name;
            } else {
                $twitterImage_path = null;
            }
            $blogseo->twitterImage = $twitterImage_path;
        } else {
            $blogseo->twitterImage = $request->twitterImageurl;
        }

        $blogseo->fieldId = $request->fieldId;
        $blogseo->type = 'BLOG';
        $blogseo->title = $request->title;
        $blogseo->metaTitle = $request->metaTitle;
        $blogseo->metaKeyword = $request->metaKeyword;
        $blogseo->metaAuthor = $request->metaAuthor;
        $blogseo->ogTitle = $request->ogTitle;
        $blogseo->dcTitle = $request->dcTitle;
        $metarobots = implode(',', (array) $request->metaRobot);
        $blogseo->metaRobot = $metarobots;
        $blogseo->dcCreator = $request->dcCreator;
        $blogseo->twitterTitle = $request->twitterTitle;
        $blogseo->twitterType = $request->twitterType;
        $blogseo->fbogTitle = $request->fbogTitle;
        $blogseo->fbogType = $request->fbogType;
        $blogseo->fbogSiteName = $request->fbogSiteName;
        $blogseo->ipTitle = $request->ipTitle;
        $blogseo->metaDescription = $request->metaDescription;
        $blogseo->fbogDescription = $request->fbogDescription;
        $blogseo->ogDescription = $request->ogDescription;
        $blogseo->dcDescription = $request->dcDescription;
        $blogseo->twitterDescription = $request->twitterDescription;
        $blogseo->ipDescription = $request->ipDescription;
        $blogseo->schema1 = $request->schema1;
        $blogseo->schema2 = $request->schema2;
        $blogseo->save();

        $this->storeLog('Add', 'addSeoBlog', $blogseo);
        Session()->flash('alert-success', "Added successfully");
        return redirect('/seo');
    }

    public function updateSeoBlog(Request $request)
    {
        $blogseo = Seo::find($request->hiddenId);
        $uploadpath = 'media/images/blogseo';
        $url = env('APP_URL');

        if ($request->ogImage) {
            if ($request->hasFile('ogImage')) {
                $image = $request->file('ogImage');
                $image_name = $image->getClientOriginalName();
                $final_name = $image_name;
                $image->move($uploadpath, $final_name);
                chmod('media/images/blogseo/' . $final_name, 0777);
                if (file_exists($blogseo->ogImage)) {
                    unlink(public_path($blogseo->ogImage));
                }
                $ogImage_path =  $url . "/" . $uploadpath . "/" . $final_name;
            } else {
                $ogImage_path = Seo::where('id', $request->hiddenId)->value('ogImage');
            }
            $blogseo->ogImage = $ogImage_path;
        } else {
            $blogseo->ogImage = $request->ogImageurl;
        }

        if ($request->twitterImage) {
            if ($request->hasFile('twitterImage')) {
                $image = $request->file('twitterImage');
                $image_name = $image->getClientOriginalName();
                $final_name = $image_name;
                $image->move($uploadpath, $final_name);
                chmod('media/images/blogseo/' . $final_name, 0777);
                $twitterImage_path = "media/images/blogseo/" . $final_name;
                if (file_exists($blogseo->twitterImage)) {
                    unlink($blogseo->twitterImage);
                }
                $twitterImage_path = $url . "/" . $uploadpath . "/" . $final_name;
            } else {
                $twitterImage_path = Seo::where('id', $request->hiddenId)->first();
            }
            $blogseo->twitterImage = $twitterImage_path;
        } else {
            $blogseo->twitterImage = $request->twitterImageurl;
        }

        $blogseo->fieldId = $request->fieldId;
        $blogseo->type = 'BLOG';
        $blogseo->title = $request->title;
        $blogseo->metaTitle = $request->metaTitle;
        $blogseo->metaKeyword = $request->metaKeyword;
        $blogseo->metaAuthor = $request->metaAuthor;
        $blogseo->ogTitle = $request->ogTitle;
        $blogseo->dcTitle = $request->dcTitle;
        $metarobots = implode(',', (array) $request->metaRobot);
        $blogseo->metaRobot = $metarobots;
        $blogseo->dcCreator = $request->dcCreator;
        $blogseo->twitterTitle = $request->twitterTitle;
        $blogseo->twitterType = $request->twitterType;
        $blogseo->fbogTitle = $request->fbogTitle;
        $blogseo->fbogType = $request->fbogType;
        $blogseo->fbogSiteName = $request->fbogSiteName;
        $blogseo->ipTitle = $request->ipTitle;
        $blogseo->metaDescription = $request->metaDescription;
        $blogseo->fbogDescription = $request->fbogDescription;
        $blogseo->ogDescription = $request->ogDescription;
        $blogseo->dcDescription = $request->dcDescription;
        $blogseo->twitterDescription = $request->twitterDescription;
        $blogseo->ipDescription = $request->ipDescription;
        $blogseo->schema1 = $request->schema1;
        $blogseo->schema2 = $request->schema2;
        $blogseo->update();

        $this->storeLog('Update', 'updateSeoBlog', $blogseo);
        Session()->flash('alert-success', "Updated successfully");
        return redirect('/seo');
    }

    public function deleteSeoBlog(Request $request)
    {
        $blogseo = Seo::find($request->hiddenId);
        if (file_exists($blogseo->ogImage)) {
            unlink($blogseo->ogImage);
        }
        if (file_exists($blogseo->twitterImage)) {
            unlink($blogseo->twitterImage);
        }
        $blogseo->deleteId = 1;
        $blogseo->save();

        $this->storeLog('Delete', 'deleteSeoBlog', $blogseo);
        Session()->flash('alert-danger', "Deleted successfully");
        return redirect()->back();
    }

    // Department Seo Controller

    public function indexSeoDepartment()
    {
        $seos = Seo::where('deleteId', 0)->orderBy('id', 'DESC')->with('department')->where('type', 'DEPARTMENT')->get();
        if (Auth::user()->role == 'developer') {
            return view('admin.seo.departmentSeo', compact('seos'));
        } else {
            return redirect('/dashboard');
        }
    }

    public function showAddSeoDepartment()
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->get();
        return view('admin.seo.departmentSeoAdd', compact('departments'));
    }

    public function viewSeoDepartment($id)
    {
        $seo = Seo::where('id', $id)->first();
        $department = Department::where('id', $seo->fieldId)->first();
        return view('admin.seo.departmentSeoUpdate', compact('seo', 'department'));
    }

    public function addSeoDepartment(Request $request)
    {
        $departmentseo = new Seo();
        $uploadpath = 'media/images/departmentseo';
        $url = env('APP_URL');

        if ($request->ogImage) {
            if ($request->hasFile('ogImage')) {
                $image = $request->file('ogImage');
                $image_name = $image->getClientOriginalName();
                $final_name = $image_name;
                $image->move($uploadpath, $final_name);
                chmod('media/images/departmentseo/' . $final_name, 0777);
                $ogImage_path =  $url . "/" . $uploadpath . "/" . $final_name;
            } else {
                $ogImage_path = null;
            }
            $departmentseo->ogImage = $ogImage_path;
        } else {
            $departmentseo->ogImage = $request->ogImageurl;
        }

        if ($request->twitterImage) {
            if ($request->hasFile('twitterImage')) {
                $image = $request->file('twitterImage');
                $image_name = $image->getClientOriginalName();
                $final_name = $image_name;
                $image->move($uploadpath, $final_name);
                chmod('media/images/departmentseo/' . $final_name, 0777);
                $twitterImage_path = $url . "/" . $uploadpath . "/" . $final_name;
            } else {
                $twitterImage_path = null;
            }
            $departmentseo->twitterImage = $twitterImage_path;
        } else {
            $departmentseo->twitterImage = $request->twitterImageurl;
        }

        $departmentseo->fieldId = $request->fieldId;
        $departmentseo->type = 'DEPARTMENT';
        $departmentseo->title = $request->title;
        $departmentseo->metaTitle = $request->metaTitle;
        $departmentseo->metaKeyword = $request->metaKeyword;
        $departmentseo->metaAuthor = $request->metaAuthor;
        $departmentseo->ogTitle = $request->ogTitle;
        $departmentseo->dcTitle = $request->dcTitle;
        $metarobots = implode(',', (array) $request->metaRobot);
        $departmentseo->metaRobot = $metarobots;
        $departmentseo->dcCreator = $request->dcCreator;
        $departmentseo->twitterTitle = $request->twitterTitle;
        $departmentseo->twitterType = $request->twitterType;
        $departmentseo->fbogTitle = $request->fbogTitle;
        $departmentseo->fbogType = $request->fbogType;
        $departmentseo->fbogSiteName = $request->fbogSiteName;
        $departmentseo->ipTitle = $request->ipTitle;
        $departmentseo->metaDescription = $request->metaDescription;
        $departmentseo->fbogDescription = $request->fbogDescription;
        $departmentseo->ogDescription = $request->ogDescription;
        $departmentseo->dcDescription = $request->dcDescription;
        $departmentseo->twitterDescription = $request->twitterDescription;
        $departmentseo->ipDescription = $request->ipDescription;
        $departmentseo->schema1 = $request->schema1;
        $departmentseo->schema2 = $request->schema2;
        $departmentseo->save();

        $this->storeLog('Add', 'addSeoDepartment', $departmentseo);
        Session()->flash('alert-success', "Added successfully");
        return redirect('/seo/department');
    }

    public function updateSeoDepartment(Request $request)
    {
        $departmentseo = Seo::find($request->hiddenId);
        $uploadpath = 'media/images/departmentseo';
        $url = env('APP_URL');

        if ($request->ogImage) {
            if ($request->hasFile('ogImage')) {
                $image = $request->file('ogImage');
                $image_name = $image->getClientOriginalName();
                $final_name = $image_name;
                $image->move($uploadpath, $final_name);
                chmod('media/images/departmentseo/' . $final_name, 0777);
                if (file_exists($departmentseo->ogImage)) {
                    unlink(public_path($departmentseo->ogImage));
                }
                $ogImage_path =  $url . "/" . $uploadpath . "/" . $final_name;
            } else {
                $ogImage_path = Seo::where('id', $request->hiddenId)->value('ogImage');
            }
            $departmentseo->ogImage = $ogImage_path;
        } else {
            $departmentseo->ogImage = $request->ogImageurl;
        }

        if ($request->twitterImage) {
            if ($request->hasFile('twitterImage')) {
                $image = $request->file('twitterImage');
                $image_name = $image->getClientOriginalName();
                $final_name = $image_name;
                $image->move($uploadpath, $final_name);
                chmod('media/images/departmentseo/' . $final_name, 0777);
                $twitterImage_path = "media/images/departmentseo/" . $final_name;
                if (file_exists($departmentseo->twitterImage)) {
                    unlink($departmentseo->twitterImage);
                }
                $twitterImage_path = $url . "/" . $uploadpath . "/" . $final_name;
            } else {
                $twitterImage_path = Seo::where('id', $request->hiddenId)->first();
            }
            $departmentseo->twitterImage = $twitterImage_path;
        } else {
            $departmentseo->twitterImage = $request->twitterImageurl;
        }

        $departmentseo->fieldId = $request->fieldId;
        $departmentseo->type = 'DEPARTMENT';
        $departmentseo->title = $request->title;
        $departmentseo->metaTitle = $request->metaTitle;
        $departmentseo->metaKeyword = $request->metaKeyword;
        $departmentseo->metaAuthor = $request->metaAuthor;
        $departmentseo->ogTitle = $request->ogTitle;
        $departmentseo->dcTitle = $request->dcTitle;
        $metarobots = implode(',', (array) $request->metaRobot);
        $departmentseo->metaRobot = $metarobots;
        $departmentseo->dcCreator = $request->dcCreator;
        $departmentseo->twitterTitle = $request->twitterTitle;
        $departmentseo->twitterType = $request->twitterType;
        $departmentseo->fbogTitle = $request->fbogTitle;
        $departmentseo->fbogType = $request->fbogType;
        $departmentseo->fbogSiteName = $request->fbogSiteName;
        $departmentseo->ipTitle = $request->ipTitle;
        $departmentseo->metaDescription = $request->metaDescription;
        $departmentseo->fbogDescription = $request->fbogDescription;
        $departmentseo->ogDescription = $request->ogDescription;
        $departmentseo->dcDescription = $request->dcDescription;
        $departmentseo->twitterDescription = $request->twitterDescription;
        $departmentseo->ipDescription = $request->ipDescription;
        $departmentseo->schema1 = $request->schema1;
        $departmentseo->schema2 = $request->schema2;
        $departmentseo->update();

        $this->storeLog('Update', 'updateSeoDepartment', $departmentseo);
        Session()->flash('alert-success', "Updated successfully");
        return redirect('/seo/department');
    }

    public function deleteSeoDepartment(Request $request)
    {
        $departmentseo = Seo::find($request->hiddenId);
        if (file_exists($departmentseo->ogImage)) {
            unlink($departmentseo->ogImage);
        }
        if (file_exists($departmentseo->twitterImage)) {
            unlink($departmentseo->twitterImage);
        }
        $departmentseo->deleteId = 1;
        $departmentseo->save();

        $this->storeLog('Delete', 'deleteSeoDepartment', $departmentseo);
        Session()->flash('alert-danger', "Deleted successfully");
        return redirect()->back();
    }

    // Service Seo Controller

    public function indexSeoService()
    {
        $seos = Seo::where('deleteId', 0)->orderBy('id', 'DESC')->with('service')->where('type', 'SERVICE')->get();
        if (Auth::user()->role == 'developer') {
            return view('admin.seo.serviceSeo', compact('seos'));
        } else {
            return redirect('/dashboard');
        }
    }

    public function showAddSeoService()
    {
        $services = Service::where('status', 1)->where('deleteId', 0)->get();
        return view('admin.seo.serviceSeoAdd', compact('services'));
    }

    public function viewSeoService($id)
    {
        $seo = Seo::where('id', $id)->first();
        $service = Service::where('id', $seo->fieldId)->first();
        return view('admin.seo.serviceSeoUpdate', compact('seo', 'service'));
    }

    public function addSeoService(Request $request)
    {
        $serviceseo = new Seo();
        $uploadpath = 'media/images/serviceseo';
        $url = env('APP_URL');

        if ($request->ogImage) {
            if ($request->hasFile('ogImage')) {
                $image = $request->file('ogImage');
                $image_name = $image->getClientOriginalName();
                $final_name = $image_name;
                $image->move($uploadpath, $final_name);
                chmod('media/images/serviceseo/' . $final_name, 0777);
                $ogImage_path =  $url . "/" . $uploadpath . "/" . $final_name;
            } else {
                $ogImage_path = null;
            }
            $serviceseo->ogImage = $ogImage_path;
        } else {
            $serviceseo->ogImage = $request->ogImageurl;
        }

        if ($request->twitterImage) {
            if ($request->hasFile('twitterImage')) {
                $image = $request->file('twitterImage');
                $image_name = $image->getClientOriginalName();
                $final_name = $image_name;
                $image->move($uploadpath, $final_name);
                chmod('media/images/serviceseo/' . $final_name, 0777);
                $twitterImage_path = $url . "/" . $uploadpath . "/" . $final_name;
            } else {
                $twitterImage_path = null;
            }
            $serviceseo->twitterImage = $twitterImage_path;
        } else {
            $serviceseo->twitterImage = $request->twitterImageurl;
        }

        $serviceseo->fieldId = $request->fieldId;
        $serviceseo->type = 'SERVICE';
        $serviceseo->title = $request->title;
        $serviceseo->metaTitle = $request->metaTitle;
        $serviceseo->metaKeyword = $request->metaKeyword;
        $serviceseo->metaAuthor = $request->metaAuthor;
        $serviceseo->ogTitle = $request->ogTitle;
        $serviceseo->dcTitle = $request->dcTitle;
        $metarobots = implode(',', (array) $request->metaRobot);
        $serviceseo->metaRobot = $metarobots;
        $serviceseo->dcCreator = $request->dcCreator;
        $serviceseo->twitterTitle = $request->twitterTitle;
        $serviceseo->twitterType = $request->twitterType;
        $serviceseo->fbogTitle = $request->fbogTitle;
        $serviceseo->fbogType = $request->fbogType;
        $serviceseo->fbogSiteName = $request->fbogSiteName;
        $serviceseo->ipTitle = $request->ipTitle;
        $serviceseo->metaDescription = $request->metaDescription;
        $serviceseo->fbogDescription = $request->fbogDescription;
        $serviceseo->ogDescription = $request->ogDescription;
        $serviceseo->dcDescription = $request->dcDescription;
        $serviceseo->twitterDescription = $request->twitterDescription;
        $serviceseo->ipDescription = $request->ipDescription;
        $serviceseo->schema1 = $request->schema1;
        $serviceseo->schema2 = $request->schema2;
        $serviceseo->save();

        $this->storeLog('Add', 'addSeoService', $serviceseo);
        Session()->flash('alert-success', "Added successfully");
        return redirect('/seo/service');
    }

    public function updateSeoService(Request $request)
    {
        $serviceseo = Seo::find($request->hiddenId);
        $uploadpath = 'media/images/serviceseo';
        $url = env('APP_URL');

        if ($request->ogImage) {
            if ($request->hasFile('ogImage')) {
                $image = $request->file('ogImage');
                $image_name = $image->getClientOriginalName();
                $final_name = $image_name;
                $image->move($uploadpath, $final_name);
                chmod('media/images/serviceseo/' . $final_name, 0777);
                if (file_exists($serviceseo->ogImage)) {
                    unlink(public_path($serviceseo->ogImage));
                }
                $ogImage_path =  $url . "/" . $uploadpath . "/" . $final_name;
            } else {
                $ogImage_path = Seo::where('id', $request->hiddenId)->value('ogImage');
            }
            $serviceseo->ogImage = $ogImage_path;
        } else {
            $serviceseo->ogImage = $request->ogImageurl;
        }

        if ($request->twitterImage) {
            if ($request->hasFile('twitterImage')) {
                $image = $request->file('twitterImage');
                $image_name = $image->getClientOriginalName();
                $final_name = $image_name;
                $image->move($uploadpath, $final_name);
                chmod('media/images/serviceseo/' . $final_name, 0777);
                $twitterImage_path = "media/images/serviceseo/" . $final_name;
                if (file_exists($serviceseo->twitterImage)) {
                    unlink($serviceseo->twitterImage);
                }
                $twitterImage_path = $url . "/" . $uploadpath . "/" . $final_name;
            } else {
                $twitterImage_path = Seo::where('id', $request->hiddenId)->first();
            }
            $serviceseo->twitterImage = $twitterImage_path;
        } else {
            $serviceseo->twitterImage = $request->twitterImageurl;
        }

        $serviceseo->fieldId = $request->fieldId;
        $serviceseo->type = 'SERVICE';
        $serviceseo->title = $request->title;
        $serviceseo->metaTitle = $request->metaTitle;
        $serviceseo->metaKeyword = $request->metaKeyword;
        $serviceseo->metaAuthor = $request->metaAuthor;
        $serviceseo->ogTitle = $request->ogTitle;
        $serviceseo->dcTitle = $request->dcTitle;
        $metarobots = implode(',', (array) $request->metaRobot);
        $serviceseo->metaRobot = $metarobots;
        $serviceseo->dcCreator = $request->dcCreator;
        $serviceseo->twitterTitle = $request->twitterTitle;
        $serviceseo->twitterType = $request->twitterType;
        $serviceseo->fbogTitle = $request->fbogTitle;
        $serviceseo->fbogType = $request->fbogType;
        $serviceseo->fbogSiteName = $request->fbogSiteName;
        $serviceseo->ipTitle = $request->ipTitle;
        $serviceseo->metaDescription = $request->metaDescription;
        $serviceseo->fbogDescription = $request->fbogDescription;
        $serviceseo->ogDescription = $request->ogDescription;
        $serviceseo->dcDescription = $request->dcDescription;
        $serviceseo->twitterDescription = $request->twitterDescription;
        $serviceseo->ipDescription = $request->ipDescription;
        $serviceseo->schema1 = $request->schema1;
        $serviceseo->schema2 = $request->schema2;
        $serviceseo->update();

        $this->storeLog('Update', 'updateSeoService', $serviceseo);
        Session()->flash('alert-success', "Updated successfully");
        return redirect('/seo/service');
    }

    public function deleteSeoService(Request $request)
    {
        $serviceseo = Seo::find($request->hiddenId);
        if (file_exists($serviceseo->ogImage)) {
            unlink($serviceseo->ogImage);
        }
        if (file_exists($serviceseo->twitterImage)) {
            unlink($serviceseo->twitterImage);
        }
        $serviceseo->deleteId = 1;
        $serviceseo->save();

        $this->storeLog('Delete', 'deleteSeoService', $serviceseo);
        Session()->flash('alert-danger', "Deleted successfully");
        return redirect()->back();
    }

    // Careeropportunity Seo Controller

    public function indexSeoCareeropportunity()
    {
        $seos = Seo::where('deleteId', 0)->orderBy('id', 'DESC')->with('career')->where('type', 'CAREER OPPORTUNITY')->get();
        if (Auth::user()->role == 'developer') {
            return view('admin.seo.careerSeo', compact('seos'));
        } else {
            return redirect('/dashboard');
        }
    }

    public function showAddSeoCareeropportunity()
    {
        $careeropportunities = Careeropportunity::where('status', 1)->get();
        return view('admin.seo.careerSeoAdd', compact('careeropportunities'));
    }

    public function viewSeoCareeropportunity($id)
    {
        $seo = Seo::where('id', $id)->first();
        $careeropportunity = Careeropportunity::where('id', $seo->fieldId)->first();
        return view('admin.seo.careerSeoUpdate', compact('seo', 'careeropportunity'));
    }

    public function addSeoCareeropportunity(Request $request)
    {
        $careerseo = new Seo();
        $uploadpath = 'media/images/careerseo';
        $url = env('APP_URL');

        if ($request->ogImage) {
            if ($request->hasFile('ogImage')) {
                $image = $request->file('ogImage');
                $image_name = $image->getClientOriginalName();
                $final_name = $image_name;
                $image->move($uploadpath, $final_name);
                chmod('media/images/careerseo/' . $final_name, 0777);
                $ogImage_path =  $url . "/" . $uploadpath . "/" . $final_name;
            } else {
                $ogImage_path = null;
            }
            $careerseo->ogImage = $ogImage_path;
        } else {
            $careerseo->ogImage = $request->ogImageurl;
        }

        if ($request->twitterImage) {
            if ($request->hasFile('twitterImage')) {
                $image = $request->file('twitterImage');
                $image_name = $image->getClientOriginalName();
                $final_name = $image_name;
                $image->move($uploadpath, $final_name);
                chmod('media/images/careerseo/' . $final_name, 0777);
                $twitterImage_path = $url . "/" . $uploadpath . "/" . $final_name;
            } else {
                $twitterImage_path = null;
            }
            $careerseo->twitterImage = $twitterImage_path;
        } else {
            $careerseo->twitterImage = $request->twitterImageurl;
        }

        $careerseo->fieldId = $request->fieldId;
        $careerseo->type = 'CAREER OPPORTUNITY';
        $careerseo->title = $request->title;
        $careerseo->metaTitle = $request->metaTitle;
        $careerseo->metaKeyword = $request->metaKeyword;
        $careerseo->metaAuthor = $request->metaAuthor;
        $careerseo->ogTitle = $request->ogTitle;
        $careerseo->dcTitle = $request->dcTitle;
        $metarobots = implode(',', (array) $request->metaRobot);
        $careerseo->metaRobot = $metarobots;
        $careerseo->dcCreator = $request->dcCreator;
        $careerseo->twitterTitle = $request->twitterTitle;
        $careerseo->twitterType = $request->twitterType;
        $careerseo->fbogTitle = $request->fbogTitle;
        $careerseo->fbogType = $request->fbogType;
        $careerseo->fbogSiteName = $request->fbogSiteName;
        $careerseo->ipTitle = $request->ipTitle;
        $careerseo->metaDescription = $request->metaDescription;
        $careerseo->fbogDescription = $request->fbogDescription;
        $careerseo->ogDescription = $request->ogDescription;
        $careerseo->dcDescription = $request->dcDescription;
        $careerseo->twitterDescription = $request->twitterDescription;
        $careerseo->ipDescription = $request->ipDescription;
        $careerseo->schema1 = $request->schema1;
        $careerseo->schema2 = $request->schema2;
        $careerseo->save();

        $this->storeLog('Add', 'addSeoCareeropportunity', $careerseo);
        Session()->flash('alert-success', "Added successfully");
        return redirect('/seo/careeropportunity');
    }

    public function updateSeoCareeropportunity(Request $request)
    {
        $careerseo = Seo::find($request->hiddenId);
        $uploadpath = 'media/images/careerseo';
        $url = env('APP_URL');

        if ($request->ogImage) {
            if ($request->hasFile('ogImage')) {
                $image = $request->file('ogImage');
                $image_name = $image->getClientOriginalName();
                $final_name = $image_name;
                $image->move($uploadpath, $final_name);
                chmod('media/images/careerseo/' . $final_name, 0777);
                if (file_exists($careerseo->ogImage)) {
                    unlink(public_path($careerseo->ogImage));
                }
                $ogImage_path =  $url . "/" . $uploadpath . "/" . $final_name;
            } else {
                $ogImage_path = Seo::where('id', $request->hiddenId)->value('ogImage');
            }
            $careerseo->ogImage = $ogImage_path;
        } else {
            $careerseo->ogImage = $request->ogImageurl;
        }

        if ($request->twitterImage) {
            if ($request->hasFile('twitterImage')) {
                $image = $request->file('twitterImage');
                $image_name = $image->getClientOriginalName();
                $final_name = $image_name;
                $image->move($uploadpath, $final_name);
                chmod('media/images/careerseo/' . $final_name, 0777);
                $twitterImage_path = "media/images/careerseo/" . $final_name;
                if (file_exists($careerseo->twitterImage)) {
                    unlink($careerseo->twitterImage);
                }
                $twitterImage_path = $url . "/" . $uploadpath . "/" . $final_name;
            } else {
                $twitterImage_path = Seo::where('id', $request->hiddenId)->first();
            }
            $careerseo->twitterImage = $twitterImage_path;
        } else {
            $careerseo->twitterImage = $request->twitterImageurl;
        }

        $careerseo->fieldId = $request->fieldId;
        $careerseo->type = 'CAREER OPPORTUNITY';
        $careerseo->title = $request->title;
        $careerseo->metaTitle = $request->metaTitle;
        $careerseo->metaKeyword = $request->metaKeyword;
        $careerseo->metaAuthor = $request->metaAuthor;
        $careerseo->ogTitle = $request->ogTitle;
        $careerseo->dcTitle = $request->dcTitle;
        $metarobots = implode(',', (array) $request->metaRobot);
        $careerseo->metaRobot = $metarobots;
        $careerseo->dcCreator = $request->dcCreator;
        $careerseo->twitterTitle = $request->twitterTitle;
        $careerseo->twitterType = $request->twitterType;
        $careerseo->fbogTitle = $request->fbogTitle;
        $careerseo->fbogType = $request->fbogType;
        $careerseo->fbogSiteName = $request->fbogSiteName;
        $careerseo->ipTitle = $request->ipTitle;
        $careerseo->metaDescription = $request->metaDescription;
        $careerseo->fbogDescription = $request->fbogDescription;
        $careerseo->ogDescription = $request->ogDescription;
        $careerseo->dcDescription = $request->dcDescription;
        $careerseo->twitterDescription = $request->twitterDescription;
        $careerseo->ipDescription = $request->ipDescription;
        $careerseo->schema1 = $request->schema1;
        $careerseo->schema2 = $request->schema2;
        $careerseo->update();

        $this->storeLog('Update', 'updateSeoCareeropportunity', $careerseo);
        Session()->flash('alert-success', "Updated successfully");
        return redirect('/seo/careeropportunity');
    }

    public function deleteSeoCareeropportunity(Request $request)
    {
        $careerseo = Seo::find($request->hiddenId);
        if (file_exists($careerseo->ogImage)) {
            unlink($careerseo->ogImage);
        }
        if (file_exists($careerseo->twitterImage)) {
            unlink($careerseo->twitterImage);
        }
        $careerseo->deleteId = 1;
        $careerseo->save();

        $this->storeLog('Delete', 'deleteSeoCareeropportunity', $careerseo);
        Session()->flash('alert-danger', "Deleted successfully");
        return redirect()->back();
    }

    // Enquiry Controller

    public function indexEnquiry()
    {
        $enquiries = Enquiry::where('deleteId', 0)->orderBy('id', 'DESC')->with('service')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->get();

        return view('admin.other.enquiry', compact('enquiries', 'services'));
    }

    public function updateEnquiry(Request $request)
    {
        $enquiry = Enquiry::find($request->enquiryId);
        if ($request->type == 'CONTACT US') {
            $enquiry->fname = $request->fname;
            $enquiry->lname = $request->lname;
            $enquiry->serviceId = null;
            $enquiry->phone = $request->phone;
            $enquiry->email = $request->email;
            $enquiry->companyName = $request->companyName;
            $enquiry->message = $request->message;
            $enquiry->type = $request->type;
            $enquiry->status = $request->status;
        } else {
            $enquiry->fname = $request->fname;
            $enquiry->phone = $request->phone;
            $enquiry->serviceId = $request->serviceId;
            $enquiry->status = $request->status;
            $enquiry->type = $request->type;
            $enquiry->lname = null;
            $enquiry->email = null;
            $enquiry->companyName = null;
            $enquiry->message = null;
        }
        $enquiry->update();

        $this->storeLog('Update', 'updateEnquiry', $enquiry);
        Session()->flash('alert-success', "The enquiry has been updated successfully");
        return redirect()->back();
    }

    public function deleteEnquiry(Request $request)
    {
        $enquiry = Enquiry::find($request->enquiryId);
        $enquiry->deleteId = 1;
        $enquiry->save();

        $this->storeLog('Delete', 'deleteEnquiry', $enquiry);
        Session()->flash('alert-danger', "The enquiry has been deleted successfully");
        return redirect()->back();
    }
}
