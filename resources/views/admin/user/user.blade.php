@extends('layouts.admin')

@section('title')
Users
@endsection

@section('header')

@endsection

@section('breadcrumb')
<h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Users</h1>
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
    <li class="breadcrumb-item text-muted">
        <a href="" class="text-muted text-hover-primary">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-dark">Users</li>
</ul>
@endsection
@section('content')

@foreach (['danger', 'warning', 'success', 'info'] as $msg)
@if(Session::has('alert-' . $msg))
<div class="col-sm-12">
    <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
        {{ Session::get('alert-' . $msg) }}.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
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

<!-- user table -->
@if($users->count() == 0)
<div class="card">
    <div class="card-body p-0">
        <div class="text-center px-4">
            <img class="mw-100 mh-300px" alt="" src="assets/media/illustrations/sketchy-1/5.png" />
        </div>
        <div class="card-px text-center py-20 my-10">
            <h2 class="fs-2x fw-bold mb-10">No User Found</h2>
            <p class="text-gray-400 fs-4 fw-semibold mb-10">Looks like you do not have any user here.
                <br />If you want to add a user, click on the button below.
            </p>
            </p>
            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addmodal">
                <span class="svg-icon svg-icon-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                    </svg>
                </span>Add User
            </a>
        </div>

    </div>
</div>
@else
<div class="card">
    <div class="card-header border-0 pt-6">
        <div class="card-title">
            <div class="d-flex align-items-center position-relative my-1">
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                    </svg>
                </span>
                <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search User" />
            </div>
        </div>
        <div class="card-toolbar">
            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addmodal">
                    <span class="svg-icon svg-icon-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                        </svg>
                    </span>Add User
                </a>
            </div>
            <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
                <div class="fw-bold me-5">
                    <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                </div>
                <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
            </div>
        </div>
    </div>
    <div class="card-body pt-0" id="tableDiv">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="data_table">
            <thead>
                <tr class="text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th class="text-center min-w-25px">#</th>
                    <th class="text-center min-w-25px">Profile Image</th>
                    <th class="text-center min-w-125px">Name</th>
                    <th class="text-center min-w-125px">Phone</th>
                    <th class="text-center min-w-125px">Role</th>
                    <th class="text-center min-w-125px">Status</th>
                    <th class="text-center min-w-70px">Actions</th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                <?php $i = 1; ?>
                @foreach ($users as $data)
                @if(Auth::user()->id != $data->id)
                <tr>
                    <td class="text-center">
                        {{ $i++}}
                    </td>
                    <td class="text-center">
                        <div class="symbol symbol-50px">
                            <img src="{{$data->profileImage != null ? $data->profileImage : 'assets/media/blank.png'}}" alt="Profile Image" onerror="src='/assets/media/blank.png'">
                        </div>
                    </td>
                    <td class="text-center">
                        {{ $data->name }}
                    </td>
                    <td class="text-center">
                        {{ $data->phone }}
                    </td>
                    <td class="text-center">
                        @if(isset($data->rolee))
                        {{$data->rolee->name}}
                        @else
                        <span style="color: #f1416c;">No role selected</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if($data->status == 1)
                        <div class="badge badge-light-success">
                            Active
                        </div>
                        @else
                        <div class="badge badge-light-danger">
                            Inactive
                        </div>
                        @endif
                    </td>
                    <td class="text-center">
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="modal" data-bs-target="#updateModal{{$data->id}}">
                            <span class="svg-icon svg-icon-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="currentColor" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                                    <rect fill="currentColor" opacity="0.3" x="5" y="20" width="15" height="2" rx="1" />
                                </svg>
                            </span>
                        </button>
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="modal" data-bs-target="#deleteModal{{$data->id}}">
                            <span class="svg-icon svg-icon-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                </svg>
                            </span>
                        </button>
                    </td>
                </tr>
                <!--update modal start-->
                <div class="modal fade" id="updateModal{{$data->id}}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-700px">
                        <div class="modal-content rounded">
                            <div class="modal-header ">
                                <h1 class="modal-tital w-100 text-center"> Update User </h1>
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <form action="{{url('/user/update')}}" id="kt_modal_add_form{{$data->id}}" enctype="multipart/form-data" method="post">
                                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                    @csrf
                                    <input type="hidden" name="userId" value="{{$data->id}}">
                                    <div class="row">
                                        <div class="col-md-4 fv-row">
                                            <div class="col-md-12 fv-row">
                                                <div class="d-flex flex-center flex-column py-5">
                                                    <div class="image-input image-input-outline" data-kt-image-input="true">
                                                        <?php
                                                        if ($data->profileImage != null) {
                                                            $placeholderImage = $data->profileImage;
                                                        } else {
                                                            $placeholderImage = config('placeholderImage');
                                                        }
                                                        ?>
                                                        <div class="image-input-wrapper w-150px h-150px" style="background-image: url('{{ $placeholderImage }}')"></div>
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Image">
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <input type="file" name="profileImage" accept="image/*" value="{{ $data->profileImage }}" />
                                                            <input type="hidden" name="avatar_remove" />
                                                        </label>
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Remove Image">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 fv-row">
                                            <div class="row g-9 mt-9">
                                                <div class="col-md-12 fv-row">
                                                    <label class="required fs-6 fw-semibold mb-2">Name</label>
                                                    <input type="text" class="txtOnly form-control form-control-solid" placeholder="Enter Your Name" id="name{{$data->id}}" name="name" value="{{$data->name}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 fv-row mb-5">
                                                <label class="required fs-6 fw-semibold mb-2">Email</label>
                                                <input type='hidden' value="{{$data->email}}" id="oldemail{{$data->id}}">
                                                <input type="text" class="form-control form-control-solid" placeholder="Enter Your Email" id="email{{$data->id}}" name="email" value="{{$data->email}}" onkeyup="checkupdateEmail('{{$data->id}}')">
                                                <span id="emailTitle{{$data->id}}"></span>
                                            </div>
                                            <div class="col-md-6 fv-row mb-5">
                                                <label class="required fs-6 fw-semibold mb-2">Phone Number</label>
                                                <input type='hidden' value="{{$data->phone}}" id="oldphone{{$data->id}}">
                                                <input type="text" class="form-control form-control-solid" placeholder="Enter Phone Number" id="phone{{$data->id}}" name="phone" value="{{$data->phone}}" maxlength="10" onkeyup="checkupdatePhone('{{$data->id}}')">
                                                <span id="phoneTitle{{$data->id}}"></span>
                                            </div>
                                            <div class="col-md-6 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Select Role</label>
                                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select Role" data-hide-search="false" name="role" id="role{{$data->id}}" data-dropdown-parent="#updateModal{{$data->id}}">
                                                    <option value=""> </option>
                                                    @foreach($roles as $role)
                                                    <option value="{{$role->slug}}" {{$role->slug == $data->role  ? 'selected' : ''}}>{{$role->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6 fv-row">
                                                <label class="fs-6 fw-semibold mb-2 ">Status</label>
                                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" name="status">
                                                    <option value="1" {{$data->status == 1 ? 'selected' : ''}}>Active</option>
                                                    <option value="0" {{$data->status == 0 ? 'selected' : ''}}>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" id="kt_modal_add_submit{{$data->id}}">
                                        <span class="indicator-label">Update</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--update modal end-->
                <!--delete modal start-->
                <div class="modal fade" id="deleteModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete User</h5>
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <form action="{{url('user/delete')}}" id="UserDeleteForm{{$data->id}}" method="post">
                                @csrf
                                <input type="hidden" value="{{$data->id}}" name="userId">
                                <div class="modal-body">
                                    <span>Are you sure you want to delete user {{$data->name}} ? <br> Action cannot be reverted</span>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-bs-dismiss="modal" class="btn btn-secondary">No</button>
                                    <button type="submit" id="delYes" class="btn btn-danger">Yes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--delete modal end-->
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endif

<!--create modal start-->
<div class="modal fade" id="addmodal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-700px">
        <div class="modal-content rounded">
            <div class="modal-header ">
                <h1 class="modal-tital w-100 text-center"> Add User </h1>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                </div>
            </div>
            <form action="{{url('/user/add')}}" id="kt_modal_add_form" enctype="multipart/form-data" method="post">
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 fv-row">
                            <div class="col-md-12 fv-row">
                                <div class="d-flex flex-center flex-column py-5">
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/blank.png')">
                                        <div class="image-input-wrapper w-150px h-150px" style="background-image: url('assets/media/blank.png')"></div>
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Add Image">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <input type="file" name="profileImage" accept="image/*" />
                                            <input type="hidden" name="avatar_remove" />
                                        </label>
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Image">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 fv-row">
                            <div class="row g-9 mt-9">
                                <div class="col-md-12 fv-row mt-5">
                                    <label class="required fs-6 fw-semibold mb-2">Name</label>
                                    <input type="text" class="txtOnly form-control form-control-solid" placeholder="Enter Your Name" id="name" name="name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 fv-row mb-5">
                            <label class="required fs-6 fw-semibold mb-2">Email</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Your Email" id="email" name="email" onkeyup="checkEmail()">
                            <span id="emailTitle"></span>
                        </div>
                        <div class="col-md-6 fv-row mb-5">
                            <label class="required fs-6 fw-semibold mb-2">Phone Number</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Your Phone Number" id="phone" name="phone" maxlength="10" onkeyup="checkPhone()">
                            <span id="phoneTitle"></span>
                        </div>
                        <div class="col-md-6 fv-row mb-5">
                            <label class="required fs-6 fw-semibold mb-2">Password</label>
                            <input type="password" class="form-control form-control-solid" placeholder="Enter Password" id="password" name="password">
                        </div>
                        <div class="col-md-6 fv-row mb-5">
                            <label class="required fs-6 fw-semibold mb-2">Confirm Password</label>
                            <input placeholder="Repeat Password" name="confirmpassword" id="cpassword" onkeyup="confirmPassword()" type="password" autocomplete="off" class="form-control form-control-solid" />
                            <span id="passwordTitle" style="color: #f1416c; font-size: .925rem; margin-top: 0.5rem"></span>
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Select Role </label>
                            <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select Role" data-hide-search="false" data-dropdown-parent="#kt_modal_add_form" name="role" id="role">
                                <option value=""></option>
                                @foreach($roles as $role)
                                <option value="{{$role->slug}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Status</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" name="status" id="Status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="kt_modal_add_submit">
                        <span class="indicator-label">Add User</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--create modal end-->

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
    var KTModalAdd = function() {
        var t, e, o, n, r, i;
        return {
            init: function() {
                r = document.querySelector("#kt_modal_add_form"),
                    t = r.querySelector("#kt_modal_add_submit"),
                    n = FormValidation.formValidation(r, {
                        fields: {
                            name: {
                                validators: {
                                    notEmpty: {
                                        message: "Name is required"
                                    },

                                }
                            },
                            role: {
                                validators: {
                                    notEmpty: {
                                        message: "Select role is required"
                                    },

                                }
                            },
                            confirmpassword: {
                                validators: {
                                    notEmpty: {
                                        message: "Confirm password is required"
                                    },

                                }
                            },
                            phone: {
                                validators: {
                                    notEmpty: {
                                        message: "Phone number is required"
                                    },

                                }
                            },
                            email: {
                                validators: {
                                    notEmpty: {
                                        message: "Enter email is required"
                                    }


                                }
                            },
                            password: {
                                validators: {
                                    notEmpty: {
                                        message: "Password is required"
                                    },
                                    stringLength: {
                                        min: 8,
                                        message: "Password must be at least 8 characters long"
                                    },
                                    regexp: {
                                        regexp: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/,
                                        message: "Password must contain at least one uppercase, one lowercase, one number and one special character"
                                    }
                                }
                            },

                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger,
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row",
                                eleInvalidClass: "",
                                eleValidClass: ""
                            })
                        }
                    }), t.addEventListener("click", (function(e) {
                        e.preventDefault(), n && n.validate().then((function(e) {

                            console.log("validated!"), "Valid" == e ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function() {
                                t.removeAttribute("data-kt-indicator")
                                e.isConfirmed && (t.disabled = !1)

                                // Submit form
                                r.submit();

                            }), 2e3)) : Swal.fire({
                                text: "Sorry, looks like there are some missing fields, please try again.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            })
                        }))
                    }))
            }
        }
    }();
    KTUtil.onDOMContentLoaded((function() {
        KTModalAdd.init()
    }));
</script>

<script>
    function checkEmail() {
        var email = document.getElementById('email').value;
        var emailTitle = document.getElementById('emailTitle');
        var button = document.getElementById('kt_modal_add_submit');
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

                    emailTitle.innerHTML = "Email is already taken";
                    emailTitle.style.color = '#f1416c';
                    emailTitle.style.display = "block";
                    button.disabled = true;

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

    function checkPhone() {
        var phone = document.getElementById('phone').value;
        var phoneTitle = document.getElementById('phoneTitle');
        var button = document.getElementById('kt_modal_add_submit');
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

                    phoneTitle.innerHTML = "Phone number is already taken";
                    phoneTitle.style.color = '#f1416c';
                    phoneTitle.style.display = "block";
                    button.disabled = true;

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

<script>
    function confirmPassword() {
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('cpassword').value;
        var passwordTitle = document.getElementById('passwordTitle');
        if (password != confirmPassword) {
            passwordTitle.innerHTML = "Password does not match";
            passwordTitle.style.color = "#f1416c"
            passwordTitle.style.display = "block";
            document.getElementById('kt_modal_add_submit').disabled = true;
        } else {
            document.getElementById('kt_modal_add_submit').disabled = false;
            passwordTitle.innerHTML = "Password matched";
            passwordTitle.style.color = "#50cd89"
            passwordTitle.style.display = "block";
        }
    }
</script>

<script>
    function checkupdateEmail(id) {
        var email = document.getElementById('email' + id).value;
        var emailTitle = document.getElementById('emailTitle' + id);
        var button = document.getElementById('kt_modal_add_submit' + id);
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
                    if (document.getElementById('oldemail' + id).value == response['data']['email']) {
                        emailTitle.innerHTML = "It's your email Id only";
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

    function checkupdatePhone(id) {
        var phone = document.getElementById('phone' + id).value;
        var phoneTitle = document.getElementById('phoneTitle' + id);
        var button = document.getElementById('kt_modal_add_submit' + id);
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
                    if (document.getElementById('oldphone' + id).value == response['data']['phone']) {
                        phoneTitle.innerHTML = "It's your phone number only";
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

<script>
    var KTAppEcommerceCategories = function() {
        var n = () => {
        };
        return {
            init: function() {
                (t = document.querySelector("#data_table")) && ((e = $(t).DataTable({
                    info: !1,
                    order: [],
                    pageLength: 10,

                })).on("draw", (function() {
                    n()
                })), document.querySelector('[data-kt-customer-table-filter="search"]').addEventListener("keyup", (function(t) {
                    e.search(t.target.value).draw()
                })), n())
            }
        }
    }();
    KTUtil.onDOMContentLoaded((function() {
        KTAppEcommerceCategories.init()
    }));
</script>

@endsection