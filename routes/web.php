<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/login', [AdminController::class, 'login']);
Route::post('auth', [AdminController::class, 'checkUser'])->name('auth');

Route::get('register', [AdminController::class, 'showRegister']);
Route::post('register', [AdminController::class, 'Register']);

Route::post('/signup', [AdminController::class, 'storeEnquiry']);

Route::get('forgetPassword', [AdminController::class, 'showforget']);
Route::post('forgetPassword', [AdminController::class, 'forgetpassword']);
Route::post('changePassword', [AdminController::class, 'changepassword']);

Route::group(['middleware' => 'checkUserr'], function () {

    Route::get('dashboard', [AdminController::class, 'indexDashboard']);

    //Profile
    Route::group(
        [
            'prefix' => 'profile'
        ],
        function () {
            Route::get('/', [AdminController::class, 'showProfile']);
            Route::post('/editProfileDetails', [AdminController::class, 'updateProfile']);
            Route::get('/deactiveAccount', [AdminController::class, 'deactiveAccount']);
            Route::post('/checkEmail', [AdminController::class, 'checkProfileEmail']);
            Route::post('/checkPass', [AdminController::class, 'checkProfilePass']);
            Route::post('/saveNewPhonenumber', [AdminController::class, 'saveNewPhonenumber']);
            Route::post('/checkOldPass', [AdminController::class, 'checkOldPass']);
            Route::post('/updatePassword', [AdminController::class, 'updatePassword']);
        }
    );

    // Role
    Route::group(
        [
            'prefix' => 'role'
        ],
        function () {
            Route::get('/', [AdminController::class, 'indexRole']);
            Route::post('/add', [AdminController::class, 'addRole']);
            Route::post('/update', [AdminController::class, 'updateRole']);
            Route::post('/delete', [AdminController::class, 'deleteRole']);
        }
    );

    //User
    Route::group([
        'prefix' => 'user'
    ], function () {
        Route::get('/', [AdminController::class, 'indexUser']);
        Route::post('/checkEmail', [AdminController::class, 'checkUserEmail']);
        Route::post('/checkPhone', [AdminController::class, 'checkUserPhone']);
        Route::post('/add', [AdminController::class, 'addUser']);
        Route::post('/update', [AdminController::class, 'updateUser']);
        Route::post('/delete', [AdminController::class, 'deleteUser']);
    });

    // Blog
    Route::group(
        [
            'prefix' => 'blog'
        ],
        function () {
            Route::get('/', [AdminController::class, 'indexBlog']);
            Route::post('/checkBlog', [AdminController::class, 'checkBlog']);
            Route::post('/add', [AdminController::class, 'addBlog']);
            Route::get('/showAdd', [AdminController::class, 'showAddBlog']);
            Route::get('/view/{id}', [AdminController::class, 'viewBlog']);
            Route::post('/update', [AdminController::class, 'updateBlog']);
            Route::post('/delete', [AdminController::class, 'deleteBlog']);
        }
    );

    // Seo
    Route::group(
        [
            'prefix' => 'seo'
        ],
        function () {
            Route::get('/', [AdminController::class, 'indexSeoBlog']);
            Route::get('/showAddseo', [AdminController::class, 'showAddSeoBlog']);
            Route::post('/addseo', [AdminController::class, 'addSeoBlog']);
            Route::get('/viewseo/{id}', [AdminController::class, 'viewSeoBlog']);
            Route::post('/updateseo', [AdminController::class, 'updateSeoBlog']);
            Route::post('/deleteseo', [AdminController::class, 'deleteSeoBlog']);
            Route::get('/department', [AdminController::class, 'indexSeoDepartment']);
            Route::get('/showAdddepseo', [AdminController::class, 'showAddSeoDepartment']);
            Route::post('/adddepseo', [AdminController::class, 'addSeoDepartment']);
            Route::get('/viewdepseo/{id}', [AdminController::class, 'viewSeoDepartment']);
            Route::post('/updatedepseo', [AdminController::class, 'updateSeoDepartment']);
            Route::post('/deletedepseo', [AdminController::class, 'deleteSeoDepartment']);
            Route::get('/service', [AdminController::class, 'indexSeoService']);
            Route::get('/showAddserseo', [AdminController::class, 'showAddSeoService']);
            Route::post('/addserseo', [AdminController::class, 'addSeoService']);
            Route::get('/viewserseo/{id}', [AdminController::class, 'viewSeoService']);
            Route::post('/updateserseo', [AdminController::class, 'updateSeoService']);
            Route::post('/deleteserseo', [AdminController::class, 'deleteSeoService']);
            Route::get('/careeropportunity', [AdminController::class, 'indexSeoCareeropportunity']);
            Route::get('/showAddcarseo', [AdminController::class, 'showAddSeoCareeropportunity']);
            Route::post('/addcarseo', [AdminController::class, 'addSeoCareeropportunity']);
            Route::get('/viewcarseo/{id}', [AdminController::class, 'viewSeoCareeropportunity']);
            Route::post('/updatecarseo', [AdminController::class, 'updateSeoCareeropportunity']);
            Route::post('/deletecarseo', [AdminController::class, 'deleteSeoCareeropportunity']);
        }
    );

    // Testimonial
    Route::group(
        [
            'prefix' => 'testimonial'
        ],
        function () {
            Route::get('/', [AdminController::class, 'indexTestimonial']);
            Route::post('/add', [AdminController::class, 'addTestimonial']);
            Route::post('/update', [AdminController::class, 'updateTestimonial']);
            Route::post('/delete', [AdminController::class, 'deleteTestimonial']);
        }
    );

    // Newsletter
    Route::group(
        [
            'prefix' => 'newsletter'
        ],
        function () {
            Route::get('/', [AdminController::class, 'indexNewsletter']);
        }
    );

    // Faq
    Route::group(
        [
            'prefix' => 'faq'
        ],
        function () {
            Route::get('/', [AdminController::class, 'indexFaq']);
            Route::post('/add', [AdminController::class, 'addFaq']);
            Route::post('/update', [AdminController::class, 'updateFaq']);
            Route::post('/delete', [AdminController::class, 'deleteFaq']);
        }
    );

    // Client
    Route::group(
        [
            'prefix' => 'client'
        ],
        function () {
            Route::get('/', [AdminController::class, 'indexClient']);
            Route::post('/add', [AdminController::class, 'addClient']);
            Route::post('/update', [AdminController::class, 'updateClient']);
            Route::post('/delete', [AdminController::class, 'deleteClient']);
        }
    );

    // Department
    Route::group(
        [
            'prefix' => 'department'
        ],
        function () {
            Route::get('/', [AdminController::class, 'indexDepartment']);
            Route::post('/add', [AdminController::class, 'addDepartment']);
            Route::get('/showAdd', [AdminController::class, 'showAddDepartment']);
            Route::get('/view/{id}', [AdminController::class, 'viewDepartment']);
            Route::post('/update', [AdminController::class, 'updateDepartment']);
            Route::post('/delete', [AdminController::class, 'deleteDepartment']);
        }
    );

    // Team
    Route::group(
        [
            'prefix' => 'team'
        ],
        function () {
            Route::get('/', [AdminController::class, 'indexTeam']);
            Route::post('/add', [AdminController::class, 'addTeam']);
            Route::post('/update', [AdminController::class, 'updateTeam']);
            Route::post('/delete', [AdminController::class, 'deleteTeam']);
        }
    );

    // Faq
    Route::group(
        [
            'prefix' => 'faq'
        ],
        function () {
            Route::get('/', [AdminController::class, 'indexFaq']);
            Route::post('/add', [AdminController::class, 'addFaq']);
            Route::post('/update', [AdminController::class, 'updateFaq']);
            Route::post('/delete', [AdminController::class, 'deleteFaq']);
        }
    );

    // Career
    Route::group(
        [
            'prefix' => 'careeropportunity'
        ],
        function () {
            Route::get('/', [AdminController::class, 'indexCareer']);
            Route::post('/add', [AdminController::class, 'addCareer']);
            Route::post('/update', [AdminController::class, 'updateCareer']);
            Route::post('/delete', [AdminController::class, 'deleteCareer']);
        }
    );

    // Service
    Route::group(
        [
            'prefix' => 'service'
        ],
        function () {
            Route::get('/', [AdminController::class, 'indexService']);
            Route::post('/add', [AdminController::class, 'addService']);
            Route::get('/showAdd', [AdminController::class, 'showAddService']);
            Route::get('/view/{id}', [AdminController::class, 'viewService']);
            Route::post('/update', [AdminController::class, 'updateService']);
            Route::post('/delete', [AdminController::class, 'deleteService']);
        }
    );
});
