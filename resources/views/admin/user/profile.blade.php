@extends('layouts.admin')

@section('title','Your Profile')

@section('header')
<link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('breadcrumb')
<h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Account Overview</h1>
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
    <li class="breadcrumb-item text-muted">
        <a href="{{url('/dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-dark">Account Overview</li>
</ul>
@endsection

@section('content')
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
@if(Session::has('alert-' . $msg))
<div class="col-sm-12">
    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} </p>
</div>
@endif
@endforeach
@if ($errors->any())
<div class="col-sm-12">
    @foreach ($errors->all() as $error)
    <p class="alert alert-danger">{{ $error }}</p>
    @endforeach
</div>
@endif
<div class="card mb-5 mb-xl-10">
    <div class="card-body pt-9 pb-0">
        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
            <div class="me-7 mb-4">
                <!-- <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                    @if( $user->status == '1')
                    <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                    @else
                    <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-danger rounded-circle border border-4 border-body h-20px w-20px"></div>
                    @endif
                </div> -->
            </div>
            <div class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <div class="d-flex flex-column">
                        <a class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{Auth::user()->name}}</a>

                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                            <a class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                <span class="svg-icon svg-icon-4 me-1">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
                                        <path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
                                        <rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
                                    </svg>
                                </span>
                                {{Auth::user()->rolee->name}}
                            </a>
                            <a href="mailto:{{Auth::User()->email}}" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                <span class="svg-icon svg-icon-4 me-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
                                        <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
                                    </svg>
                                </span>
                                {{Auth::User()->email}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 active" data-bs-toggle="tab" href="#tab_overview">Overview</a>
            </li>

            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#tab_signin">Sign-In Method</a>
            </li>

            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#tab_settings">Account Settings</a>
            </li>
        </ul>

    </div>
</div>

<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <div class="card-body p-9">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab_overview" role="tab-panel">
                <div class="card-header cursor-pointer">
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Profile Details</h3>
                    </div>
                </div>
                <div class="card-body p-9">
                    <div class="row mb-7">
                        <label class="col-lg-4 fw-semibold text-muted">Name</label>
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">{{Auth::user()->name}}</span>
                        </div>
                    </div>
                    <div class="row mb-7">
                        <label class="col-lg-4 fw-semibold text-muted">Email</label>
                        <div class="col-lg-8 fv-row">
                            <a href="mailto:{{Auth::user()->email}}" class="fw-bold fs-6 text-gray-800">{{Auth::user()->email}}</a>
                        </div>
                    </div>
                    <div class="row mb-7">
                        <label class="col-lg-4 fw-semibold text-muted">Phone Number
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active" maxlength="10"></i></label>
                        <div class="col-lg-8 d-flex align-items-center">
                            <a href="tel:{{Auth::user()->phone}}" class="fw-bold fs-6 text-gray-800 me-2">{{Auth::user()->phone}}</a>
                            <span class="badge badge-success">Verified</span>
                        </div>
                    </div>
                    <div class="row mb-7">
                        <label class="col-lg-4 fw-semibold text-muted">Role</label>
                        <div class="col-lg-8 fv-row">
                            <span class="fw-semibold text-gray-800 fs-6">{{Auth::user()->rolee->name}}</span>
                        </div>
                    </div>
                    <div class="row mb-7">
                        <label class="col-lg-4 fw-semibold text-muted">Status</label>
                        <div class="col-lg-8 fv-row">
                            @if(Auth::user()->status == 1)
                            <div class="badge badge-light-success">
                                Active
                            </div>
                            @else
                            <div class="badge badge-light-danger">
                                Inactive
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="tab_signin" role="tab-panel">
                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Sign-in Method</h3>
                        </div>
                    </div>
                    <div id="kt_account_settings_signin_method" class="collapse show">
                        <div class="card-body border-top p-9">
                            <div class="d-flex flex-wrap align-items-center">
                                <div id="kt_signin_email">
                                    <div class="fs-6 fw-bold mb-1">Phone Number</div>
                                    <div class="fw-semibold text-gray-600">{{Auth::user()->phone}}</div>
                                </div>
                                <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                                    <form action="{{url('/profile/saveNewPhonenumber')}}" method="Post" id="kt_signin_change_email" class="form" novalidate="novalidate">
                                        @csrf
                                        <div class="row mb-6">
                                            <div class="col-lg-6 mb-4 mb-lg-0">
                                                <div class="fv-row mb-0">
                                                    <label for="username" class="form-label fs-6 fw-bold mb-3">Enter New Phone Number</label>
                                                    <input type="text" onkeyup="checkPhone()" class="form-control form-control-lg form-control-solid" id="phone" placeholder="Phone Number" name="phone" maxlength="10">
                                                    <input type='hidden' value="{{Auth::user()->phone}}" id="oldphone">
                                                    <label class="m-2" id="phoneLabel" style="color: #f1416c;"></label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="fv-row mb-0">
                                                    <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Enter Your Password</label>
                                                    <input type="password" onkeyup="checkPass()" class="form-control form-control-lg form-control-solid" placeholder="Password" name="confirmemailpassword" id="confirmemailpassword" />
                                                    <label class="m-2" id="checkPasswordLabel" style="color: #f1416c;"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <button id="kt_signin_submit" disabled type="button" class="btn btn-primary me-2 px-6">Update Phone Number</button>
                                            <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="kt_signin_email_button" class="ms-auto">
                                    <button class="btn btn-light btn-active-light-primary">Change Phone Number</button>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-6"></div>

                            <div class="d-flex flex-wrap align-items-center mb-10">
                                <div id="kt_signin_password">
                                    <div class="fs-6 fw-bold mb-1">Password</div>
                                    <div class="fw-semibold text-gray-600">************</div>
                                </div>
                                <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                                    <form method="post" action="{{url('/profile/updatePassword')}}" id="kt_signin_change_password" class="form" novalidate="novalidate">
                                        @csrf
                                        <div class="row mb-1">
                                            <div class="col-lg-4">
                                                <div class="fv-row mb-0">
                                                    <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
                                                    <input type="password" onkeyup="checkOldPass()" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
                                                    <label class="m-2" id="checkOldPasswordLabel"></label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="fv-row mb-0">
                                                    <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
                                                    <input type="password" onkeyup="checkNewPass()" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
                                                    <label class="m-2" id="checkNewPasswordLabel"></label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="fv-row mb-0">
                                                    <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
                                                    <input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
                                                    <label class="m-2" id="checkConfirmPasswordLabel"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
                                        <div class="d-flex">
                                            <button id="kt_password_submit" disabled type="button" class="btn btn-primary me-2 px-6">Update Password</button>
                                            <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="kt_signin_password_button" class="ms-auto">
                                    <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_settings" role="tab-panel">
                <!-- edit details -->
                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Edit Profile Details</h3>
                        </div>
                    </div>
                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <form method="POST" action="{{url('/profile/editProfileDetails')}}" id="kt_account_profile_details_form" class="form" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body border-top p-9">
                                <div class="row g-9 mb-5">
                                    <div class="col-md-12 fv-row">
                                        <label class="fs-6 fw-semibold mb-2">Profile Image</label>
                                        <div class="d-flex flex-center flex-column py-5 mb-1">
                                            <div class="image-input image-input-outline" data-kt-image-input="true">
                                                <?php
                                                if (auth()->user()->profileImage != null) {
                                                    $placeholderImage = auth()->user()->profileImage;
                                                } else {
                                                    $placeholderImage = config('placeholderImage');
                                                }
                                                ?>
                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url('{{ $placeholderImage }}')"></div>
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Image">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <input type="file" name="profileImage" accept="image/*" value="{{Auth::user()->profileImage}}" />
                                                    <input type="hidden" name="avatar_remove" />
                                                </label>
                                            </div>
                                            <div class="form-text">Allowed all image file types</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Name</label>
                                        <input type="text" name="name" class="txtOnly form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Enter Your Name" value="{{Auth::user()->name}}" />
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Phone Number
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
                                        </label>
                                        <input type='hidden' value="{{Auth::user()->phone}}" id="oldphone">
                                        <input type="tel" name="phone" id="tel" class="form-control form-control-lg form-control-solid" placeholder="Enter Your Phone number" value="{{Auth::user()->phone}}" maxlength="10" onkeyup="checkupdatePhone()" />
                                        <span id="phoneTitle"></span>
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Email</label>
                                        <input type='hidden' value="{{Auth::user()->email}}" id="oldemail">
                                        <input type="text" name="email" id="email" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Enter Your Email" value="{{Auth::user()->email}}" onkeyup="checkupdateEmail()" />
                                        <span id="emailTitle"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- deactive module -->
                <div class="card">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Deactivate Account</h3>
                        </div>
                    </div>
                    <div id="kt_account_settings_deactivate" class="collapse show">
                        <form id="kt_account_deactivate_form" class="form">
                            <div class="card-body border-top p-9">
                                <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                    <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                            <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
                                            <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <div class="fw-semibold">
                                            <h4 class="text-gray-900 fw-bold">You Are Deactivating Your Account</h4>
                                            <div class="fs-6 text-gray-700">For extra security, this requires you to confirm your email or phone number when you reset your signin password.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-check-solid fv-row">
                                    <input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
                                    <label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-semibold">Deactivate Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $('.txtOnly').bind('keydown', function(event) {
        var key = event.which;
        if (key >= 48 && key <= 57) {
            event.preventDefault();
        }
    });
</script>

<script>
    var flagNumber = false;
    var flagPass = false;

    function checkCreds() {
        if (flagPass == true && flagNumber == true) {
            document.getElementById("kt_signin_submit").disabled = false;
        } else {
            document.getElementById("kt_signin_submit").disabled = true;
        }
    }

    function checkPhone() {
        var phone = document.getElementById("phone").value;
        var numberRegex = /^[0-9]{10}$/;
        var phoneLabel = document.getElementById('phoneLabel');
        if (numberRegex.test(phone)) {
            if (phone != '') {
                $.ajax({
                    type: "POST",
                    url: "{{url('/user/checkPhone')}}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'phone': phone,
                    },
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        if (document.getElementById('oldphone').value == response['data']['phone']) {
                            phoneLabel.innerHTML = "It's your phone number";
                            phoneLabel.style.color = '#50cd89';
                            phoneLabel.style.display = "block";
                            flagNumber = true;
                            checkCreds();
                        } else {
                            phoneLabel.innerHTML = "Phone number is already taken";
                            phoneLabel.style.color = '#f1416c';
                            phoneLabel.style.display = "block";
                            flagNumber = false;
                            checkCreds();
                        }
                    },
                    error: function(response) {
                        phoneLabel.innerHTML = "Phone number is available";
                        phoneLabel.style.color = '#50cd89';
                        phoneLabel.style.display = "block";
                        flagNumber = true;
                        checkCreds();
                    }
                });
            } else {
                phoneLabel.innerHTML = "Number is required";
                phoneLabel.style.color = '#f1416c';
                flagNumber = false;
                checkCreds();
            }
        } else {
            phoneLabel.innerHTML = "Please enter a valid phone number";
            phoneLabel.style.color = "#f1416c";
            flagNumber = false;
            checkCreds();
        }
    }

    function checkPass() {
        var pass = document.getElementById("confirmemailpassword").value;
        var passLabel = document.getElementById('checkPasswordLabel');
        if (pass != '') {
            $.ajax({
                type: "POST",
                url: "{{url('/profile/checkPass')}}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'pass': pass,
                },
                dataType: "json",
                success: function(response) {
                    passLabel.innerHTML = "Password matches";
                    passLabel.style.color = '#50cd89';
                    flagPass = true;
                    checkCreds();
                },
                error: function(response) {
                    passLabel.innerHTML = "Password does not match";
                    passLabel.style.color = '#f1416c';
                    flagPass = false;
                    checkCreds();
                }
            });
        } else {
            passLabel.innerHTML = "Password is required";
            passLabel.style.color = '#f1416c';
            flagPass = false;
            checkCreds();
        }

    }
</script>

<script>
    var flagOldPass = false;
    var flagNewPass = false;
    // var flagConfirmPass = false;

    function changePassCreds() {
        if (flagOldPass == true && flagNewPass == true) {
            document.getElementById("kt_password_submit").disabled = false;
        } else {
            document.getElementById("kt_password_submit").disabled = true;
        }
    }

    function checkOldPass() {
        var oldPass = document.getElementById("currentpassword").value;
        var oldPassLabel = document.getElementById('checkOldPasswordLabel');
        if (oldPass != '') {
            $.ajax({
                type: "POST",
                url: "{{url('/profile/checkOldPass')}}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'oldPass': oldPass,
                },
                dataType: "json",
                success: function(response) {
                    oldPassLabel.innerHTML = "Password matches";
                    oldPassLabel.style.color = '#50cd89';
                    flagOldPass = true;
                    changePassCreds();
                },
                error: function(response) {
                    oldPassLabel.innerHTML = "Password does not match";
                    oldPassLabel.style.color = '#f1416c';
                    flagOldPass = false;
                    changePassCreds();
                }
            });
        } else {
            oldPassLabel.innerHTML = "Password is required";
            oldPassLabel.style.color = '#f1416c';
            flagOldPass = false;
            changePassCreds();
        }
    }

    function checkNewPass() {
        var newPass = document.getElementById("newpassword").value;
        var passRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        var newPassLabel = document.getElementById('checkNewPasswordLabel');
        if (passRegex.test(newPass)) {
            if (newPass != '') {
                newPassLabel.innerHTML = "Password is valid";
                newPassLabel.style.color = '#50cd89';
                flagNewPass = true;
                changePassCreds();
            } else {
                newPassLabel.innerHTML = "Password is required";
                newPassLabel.style.color = '#f1416c';
                flagNewPass = false;
                changePassCreds();
            }
        } else {
            newPassLabel.innerHTML = "Password must contain at least 8 characters, 1 uppercase, 1 lowercase and 1 number";
            newPassLabel.style.color = '#f1416c';
            flagNewPass = false;
            changePassCreds();
        }
    }
</script>

<!-- check email and phone -->
<script>
    function checkupdateEmail() {
        var email = document.getElementById('email').value;
        var emailTitle = document.getElementById('emailTitle');
        var button = document.getElementById('kt_account_profile_details_submit');
        var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if (email == "") {
            emailTitle.style.display = "none";

        } else if (!email.match(emailPattern)) {
            emailTitle.innerHTML = "Please enter valid email";
            emailTitle.style.color = '#f1416c';
            emailTitle.style.display = "block";
            button.disabled = true;
        } else {
            $.ajax({
                type: "POST",
                url: "{{url('/user/checkEmail')}}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'email': email,
                },
                dataType: "json",
                success: function(response) {
                    if (document.getElementById('oldemail').value == response['data']['email']) {
                        emailTitle.innerHTML = "It's current email Id";
                        emailTitle.style.color = '#50cd89';
                        emailTitle.style.display = "block";
                        button.disabled = false;
                    } else {
                        emailTitle.innerHTML = "Email is already taken";
                        emailTitle.style.color = '#f1416c';
                        emailTitle.style.display = "block";
                        button.disabled = true;
                    }
                },
                error: function(response) {
                    emailTitle.innerHTML = "Email is available";
                    emailTitle.style.color = '#50cd89';
                    emailTitle.style.display = "block";
                    button.disabled = false;

                }
            });

        }

    }

    function checkupdatePhone() {
        var phone = document.getElementById('tel').value;
        var phoneTitle = document.getElementById('phoneTitle');
        var button = document.getElementById('kt_account_profile_details_submit');
        var phonePattern = /^[0-9]{10}$/;

        if (phone == "") {
            phoneTitle.style.display = "none";

        } else if (!phone.match(phonePattern)) {
            phoneTitle.innerHTML = "Please enter valid phone number";
            phoneTitle.style.color = '#f1416c';
            phoneTitle.style.display = "block";
            button.disabled = true;
        } else {
            $.ajax({
                type: "POST",
                url: "{{url('/user/checkPhone')}}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'phone': phone,
                },
                dataType: "json",
                success: function(response) {
                    if (document.getElementById('oldphone').value == response['data']['phone']) {
                        phoneTitle.innerHTML = "It's current phone number";
                        phoneTitle.style.color = '#50cd89';
                        phoneTitle.style.display = "block";
                        button.disabled = false;
                    } else {
                        phoneTitle.innerHTML = "Phone number is already taken";
                        phoneTitle.style.color = '#f1416c';
                        phoneTitle.style.display = "block";
                        button.disabled = true;
                    }
                },
                error: function(response) {
                    phoneTitle.innerHTML = "Phone number is available";
                    phoneTitle.style.color = '#50cd89';
                    phoneTitle.style.display = "block";
                    button.disabled = false;

                }
            });
        }
    }
</script>

<!-- edit profile -->
<script>
    var KTAccountSettingsProfileDetails = function() {
        var e, t;
        var o = document.getElementById("kt_account_profile_details_submit");
        return {
            init: function() {
                (e = document.getElementById("kt_account_profile_details_form")) && (e.querySelector("#kt_account_profile_details_submit"),
                    t = FormValidation.formValidation(e, {
                        fields: {
                            name: {
                                validators: {
                                    notEmpty: {
                                        message: "Name is required"
                                    }
                                }
                            },
                            phone: {
                                validators: {
                                    notEmpty: {
                                        message: "Enter phone number is required"
                                    },
                                }
                            },
                            email: {
                                validators: {
                                    notEmpty: {
                                        message: "Enter email is required"
                                    },
                                }
                            },
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger,
                            submitButton: new FormValidation.plugins.SubmitButton,
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row",
                                eleInvalidClass: "",
                                eleValidClass: ""
                            })
                        }
                    }), o.addEventListener("click", (function(e) {
                        e.preventDefault(), t && t.validate().then((function(e) {
                            Swal.fire({
                                text: "Your account details has been updated successfully!",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then((function() {
                                // submit form
                                var f = document.getElementById('kt_account_profile_details_form');
                                f.submit();
                            }))
                        }))
                    })))
            }
        }
    }();
    KTUtil.onDOMContentLoaded((function() {
        KTAccountSettingsProfileDetails.init()
    }));
</script>

<!-- deactivate account -->
<script>
    "use strict";
    var KTAccountSettingsDeactivateAccount = function() {
        var t, n, e;
        return {
            init: function() {
                (t = document.querySelector("#kt_account_deactivate_form")) && (e = document.querySelector("#kt_account_deactivate_account_submit"), n = FormValidation.formValidation(t, {
                    fields: {
                        deactivate: {
                            validators: {
                                notEmpty: {
                                    message: "Please check the box to deactivate your account"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        submitButton: new FormValidation.plugins.SubmitButton,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                }), e.addEventListener("click", (function(t) {
                    t.preventDefault(), n.validate().then((function(t) {
                        "Valid" == t ? swal.fire({
                            text: "Are you sure you want to deactivate your account?",
                            icon: "warning",
                            buttonsStyling: !1,
                            showDenyButton: !0,
                            confirmButtonText: "Yes",
                            denyButtonText: "No",
                            customClass: {
                                confirmButton: "btn btn-light-primary",
                                denyButton: "btn btn-danger"
                            }
                        }).then((t => {
                            t.isConfirmed ? Swal.fire({
                                text: "Your account has been deactivated.",
                                icon: "success",
                                confirmButtonText: "Ok",
                                buttonsStyling: !1,
                                customClass: {
                                    confirmButton: "btn btn-light-primary"
                                }
                            }).then((function() {
                                window.location.href = "{{url('/profile/deactiveAccount')}}";

                            })) : t.isDenied && Swal.fire({
                                text: "Account deactivation aborted.",
                                icon: "info",
                                confirmButtonText: "Ok",
                                buttonsStyling: !1,
                                customClass: {
                                    confirmButton: "btn btn-light-primary"
                                }
                            })
                        })) : swal.fire({
                            text: "Sorry, looks like there are some missing fields, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-light-primary"
                            }
                        })
                    }))
                })))
            }
        }
    }();
    KTUtil.onDOMContentLoaded((function() {
        KTAccountSettingsDeactivateAccount.init()
    }));
</script>

<!-- change mail and password -->
<script>
    "use strict";
    var KTAccountSettingsSigninMethods = function() {
        var t, e, n, o, i, s, r, a, l, d = function() {
                e.classList.toggle("d-none"), s.classList.toggle("d-none"), n.classList.toggle("d-none")
            },
            c = function() {
                o.classList.toggle("d-none"), a.classList.toggle("d-none"), i.classList.toggle("d-none")
            };
        return {
            init: function() {
                var m;
                t = document.getElementById("kt_signin_change_email"),
                    e = document.getElementById("kt_signin_email"),
                    n = document.getElementById("kt_signin_email_edit"),
                    o = document.getElementById("kt_signin_password"),
                    i = document.getElementById("kt_signin_password_edit"),
                    s = document.getElementById("kt_signin_email_button"),
                    r = document.getElementById("kt_signin_cancel"),
                    a = document.getElementById("kt_signin_password_button"),
                    l = document.getElementById("kt_password_cancel"),
                    e && (s.querySelector("button").addEventListener("click", (function() {
                        d()
                    })), r.addEventListener("click", (function() {
                        d()
                    })), a.querySelector("button").addEventListener("click", (function() {
                        c()
                    })), l.addEventListener("click", (function() {
                        c()
                    }))), t && (m = FormValidation.formValidation(t, {
                        fields: {

                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger,
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row"
                            })
                        }
                    }), t.querySelector("#kt_signin_submit").addEventListener("click", (function(e) {
                        e.preventDefault(), console.log("click"), m.validate().then((function(e) {
                            "Valid" == e ? swal.fire({
                                text: "Mobile number change Successfully.Please login with your new number",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            }).then((function() {
                                t.submit()
                                t.reset(), m.resetForm(), d()
                            })) : swal.fire({
                                text: "Sorry, looks like there are some missing fields, please try again.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            })
                        }))
                    }))),
                    function(t) {
                        var e, n = document.getElementById("kt_signin_change_password");
                        n && (e = FormValidation.formValidation(n, {
                            fields: {
                                confirmpassword: {
                                    validators: {
                                        notEmpty: {
                                            message: "Confirm Password is required"
                                        },
                                        identical: {
                                            compare: function() {
                                                return n.querySelector('[name="newpassword"]').value
                                            },
                                            message: "The password and its confirm are not the same"
                                        }
                                    }
                                }
                            },
                            plugins: {
                                trigger: new FormValidation.plugins.Trigger,
                                bootstrap: new FormValidation.plugins.Bootstrap5({
                                    rowSelector: ".fv-row"
                                })
                            }
                        }), n.querySelector("#kt_password_submit").addEventListener("click", (function(t) {
                            t.preventDefault(), console.log("click"), e.validate().then((function(t) {
                                "Valid" == t ? swal.fire({
                                    text: "Your password has been changed. Please login with new password.",
                                    icon: "success",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn font-weight-bold btn-light-primary"
                                    }
                                }).then((function() {
                                    n.submit()
                                    n.reset(), e.resetForm(), c()
                                })) : swal.fire({
                                    text: "Sorry, looks like there are some missing fields, please try again.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn font-weight-bold btn-light-primary"
                                    }
                                })
                            }))
                        })))
                    }()
            }
        }
    }();
    KTUtil.onDOMContentLoaded((function() {
        KTAccountSettingsSigninMethods.init()
    }));
</script>

<!-- logs table -->

<script>
    var KTAppEcommerceProducts = function() {
        var t, e
        return {
            init: function() {
                (t = document.querySelector("#kt_ecommerceService_table")) && ((e = $(t).DataTable({
                    info: !1,
                    order: [],
                    pageLength: 10,

                })), (() => {
                    const t = document.querySelector('[data-kt-ecommerce-product-filter="status"]');
                    $(t).on("change", (t => {
                        let o = t.target.value;
                        "all" === o && (o = ""), e.column(0).search(o).draw()
                    }))
                })())
            }
        }
    }();
    KTUtil.onDOMContentLoaded((function() {
        KTAppEcommerceProducts.init()
    }));
</script>


<!-- Attendance  -->



@endsection