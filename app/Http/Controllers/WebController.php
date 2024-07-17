<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Mail\EnquiryMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Blog;
use App\Models\Careeropportunity;
use App\Models\Department;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Client;
use App\Models\Enquiry;
use App\Models\Faq;
use App\Models\Team;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function welcome(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $allservices = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();
        $testimonials = Testimonial::where('status', 1)->orderBy('sequence', 'ASC')->get();
        $allblogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->with('service')->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();
        $faqs = Faq::where('status', 1)->get();
        $teams = Team::where('status', 1)->where('deleteId', 0)->get();

        return view('web.welcome', compact('departments', 'services', 'blogs', 'allservices', 'testimonials', 'allblogs', 'clients', 'faqs', 'teams'));
    }

    public function getServiceByDept(Request $request)
    {
        error_log($request->deptSlug);
        if ($request->deptSlug == '') {
            $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();
        } else {
            $dept = Department::where('slug', $request->deptSlug)->first();
            $services = Service::where('departmentId', $dept->id)->where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();
        }

        return response()->json([
            'status' => 1,
            'services' => $services
        ]);
    }

    public function getServiceBySlug(Request $request)
    {
        $service = Service::where('slug', $request->serviceSlug)->first();

        return response()->json([
            'status' => 1,
            'service' => $service
        ]);
    }

    public function privacyPolicy(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();
        $faqs = Faq::where('status', 1)->get();
        $teams = Team::where('status', 1)->where('deleteId', 0)->get();
        $allservices = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();

        return view('web.privacyPolicy', compact('departments', 'services', 'blogs', 'clients', 'faqs', 'teams', 'allservices'));
    }

    public function faq(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $faqs = Faq::where('status', 1)->orderBy('sequence', 'ASC')->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();
        $teams = Team::where('status', 1)->where('deleteId', 0)->get();
        $allservices = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();

        return view('web.faq', compact('departments', 'services', 'blogs', 'faqs', 'clients', 'teams', 'allservices'));
    }

    public function ourClient(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();
        $faqs = Faq::where('status', 1)->get();
        $teams = Team::where('status', 1)->where('deleteId', 0)->get();
        $allservices = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();

        return view('web.ourClient', compact('departments', 'services', 'blogs', 'clients', 'faqs', 'teams', 'allservices'));
    }

    public function ourTeam(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $teams = Team::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();
        $faqs = Faq::where('status', 1)->get();
        $allservices = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();


        return view('web.ourTeam', compact('departments', 'services', 'blogs', 'teams', 'clients', 'faqs', 'teams', 'allservices'));
    }

    public function ourStory(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();
        $faqs = Faq::where('status', 1)->get();
        $teams = Team::where('status', 1)->where('deleteId', 0)->get();
        $allservices = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();

        return view('web.ourStory', compact('departments', 'services', 'blogs', 'clients', 'faqs', 'teams', 'allservices'));
    }

    public function contactUs(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();
        $faqs = Faq::where('status', 1)->get();
        $teams = Team::where('status', 1)->where('deleteId', 0)->get();
        $allservices = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();

        return view('web.contactUs', compact('departments', 'services', 'blogs', 'clients', 'faqs', 'teams', 'allservices'));
    }

    public function ourBlog(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $allblogs = Blog::where('status', 1)->where('deleteId', 0)->with('service')->orderBy('id', 'DESC')->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();
        $faqs = Faq::where('status', 1)->get();
        $teams = Team::where('status', 1)->where('deleteId', 0)->get();
        $allservices = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();

        return view('web.ourBlog', compact('departments', 'services', 'blogs', 'allblogs', 'clients', 'faqs', 'teams', 'allservices'));
    }

    public function ourService(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();
        $faqs = Faq::where('status', 1)->get();
        $teams = Team::where('status', 1)->where('deleteId', 0)->get();
        $allservices = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();

        return view('web.ourService', compact('departments', 'services', 'blogs', 'clients', 'faqs', 'teams', 'allservices'));
    }

    public function singleDepartment(Request $request, $slug)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();
        $faqs = Faq::where('status', 1)->get();
        $teams = Team::where('status', 1)->where('deleteId', 0)->get();
        $department = Department::where('deleteId', 0)->where('status', 1)->where('slug', $slug)->with('seo')->first();
        $depservices = Service::where('departmentId', $department->id)->where('deleteId', 0)->where('status', 1)->get();
        $allservices = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();

        return view('web.singleDepartment', compact('departments', 'services', 'blogs', 'clients', 'faqs', 'teams', 'department', 'depservices', 'allservices'));
    }

    public function career(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();
        $faqs = Faq::where('status', 1)->get();
        $teams = Team::where('status', 1)->where('deleteId', 0)->get();
        $careers = Careeropportunity::where('status', 1)->orderBy('id', 'DESC')->get();
        $allservices = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();

        return view('web.career', compact('departments', 'services', 'blogs', 'clients', 'faqs', 'teams', 'careers', 'allservices'));
    }

    public function singleBlog(Request $request, $slug)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();
        $faqs = Faq::where('status', 1)->get();
        $teams = Team::where('status', 1)->where('deleteId', 0)->get();
        $blog = Blog::where('deleteId', 0)->where('status', 1)->where('slug', $slug)->with('seo')->first();
        $allservices = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();

        return view('web.singleBlog', compact('departments', 'services', 'blogs', 'clients', 'faqs', 'teams', 'blog', 'allservices'));
    }

    public function singleCareer(Request $request, $slug)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();
        $faqs = Faq::where('status', 1)->get();
        $teams = Team::where('status', 1)->where('deleteId', 0)->get();
        $career = Careeropportunity::where('status', 1)->where('slug', $slug)->with('seo')->first();
        $allservices = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();

        return view('web.singleCareer', compact('departments', 'services', 'blogs', 'clients', 'faqs', 'teams', 'career', 'allservices'));
    }

    public function singleService(Request $request, $slug, $serviceslug)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();
        $faqs = Faq::where('status', 1)->get();
        $teams = Team::where('status', 1)->where('deleteId', 0)->get();
        $service = Service::where('deleteId', 0)->where('status', 1)->where('slug', $serviceslug)->with('department')->with('seo')->first();
        $serviceblogs = Blog::where('status', 1)->where('deleteId', 0)->where('serviceId', $service->id)->orderBy('id', 'DESC')->get();
        $allservices = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();

        return view('web.singleService', compact('departments', 'services', 'blogs', 'clients', 'faqs', 'teams', 'service', 'serviceblogs', 'allservices'));
    }

    public function enquiryForm(Request $request)
    {

        $existingEnquiry = Enquiry::where('fname', $request->fname)->where('email', $request->email)->where('serviceId', $request->serviceId)->where('type', 'ENQUIRE')->first();

        if ($existingEnquiry) {
            return response()->json([
                'status' => 0,
                'message' => 'An enquiry already exists'
            ]);
        } else {
            $enquiryForm = new Enquiry();
            $enquiryForm->fname = $request->fname;
            $enquiryForm->email = $request->email;
            $enquiryForm->serviceId = $request->serviceId;
            $enquiryForm->status = 'pending';
            $enquiryForm->type = 'ENQUIRE';
            $enquiryForm->save();

            $emailData = [
                'fname' => $enquiryForm->fname,
                'phone' => $enquiryForm->phone,
                'email' => $enquiryForm->email,
                'subject' => 'Enquire'
            ];

            Mail::to($enquiryForm->email)->send(new ContactUsMail($emailData, 'Enquire'));


            $emailDataAdmin = [
                'fname' => $enquiryForm->fname,
                'phone' => $enquiryForm->phone,
                'email' => $enquiryForm->email,
                'subject' => 'Enquire Admin'
            ];
    
            Mail::to(env('Sendinblue_mail'))->send(new ContactUsMail($emailDataAdmin, 'Enquire Admin'));
    

            // $this->sendEmail('Enquire', $enquiryForm->email, $enquiryForm->fname, $enquiryForm->fname, $enquiryForm->phone, $enquiryForm->email);
            // $this->sendEmail('Enquire Admin', 'shrutikap@hyplap.com', 'Choice Accountants', $enquiryForm->fname, $enquiryForm->phone, $enquiryForm->email);


            return response()->json([
                'status' => 1,
                'message' => 'Send successfully'
            ]);
        }
    }

    public function contactusForm(Request $request)
    {

        $existingEnquiry = Enquiry::where('fname', $request->fname)->where('lname', $request->lname)->where('phone', $request->phone)->where('email', $request->email)->where('serviceId', $request->serviceId)->where('type', 'CONTACT US')->first();

        if ($existingEnquiry) {
            return response()->json([
                'status' => 0,
                'message' => 'An enquiry already exists'
            ]);

        } else {
            $contactusForm = new Enquiry();
            $contactusForm->fname = $request->fname;
            $contactusForm->lname = $request->lname;
            $contactusForm->email = $request->email;
            $contactusForm->phone = $request->phone;
            $contactusForm->companyName = $request->companyName;
            $contactusForm->message = $request->message;
            $contactusForm->serviceId = $request->serviceId;
            $contactusForm->status = 'pending';
            $contactusForm->type = 'CONTACT US';
            $contactusForm->save();

            $emailData = [
                'fname' => $contactusForm->fname,
                'phone' => $contactusForm->phone,
                'email' => $contactusForm->email,
                'subject' => 'Contact Us'
            ];

            Mail::to($contactusForm->email)->send(new ContactUsMail($emailData, 'Contact Us'));


            $emailDataAdmin = [
                'fname' => $contactusForm->fname,
                'phone' => $contactusForm->phone,
                'email' => $contactusForm->email,
                'subject' => 'Contact Us Admin'
            ];
    
            Mail::to(env('Sendinblue_mail'))->send(new ContactUSMail($emailDataAdmin, 'Contact Us Admin'));

            return response()->json([
                'status' => 1,
                'message' => 'Send successfully'
            ]);
        }
    }
}
