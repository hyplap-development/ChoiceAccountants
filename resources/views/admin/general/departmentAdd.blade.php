@extends('layouts.admin')

@section('title')
Add Department
@endsection

@section('header')

@endsection

@section('breadcrumb')
<h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Add Department</h1>
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
    <li class="breadcrumb-item text-muted">
        <a href="{{url('/dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">
        <a href="{{url('/department')}}" class="text-muted text-hover-primary">Departments</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-dark">Add Department</li>


</ul>
@endsection

@section('content')
<form autocomplete="off" action="{{url('/department/add')}}" enctype="multipart/form-data" method="post" id="kt_modal_add_form">
    @csrf
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-5 mb-xl-8">
                <div class="card-header">
                    <h3 class="card-title">Add Department Details</h3>
                </div>
                <div class="card-body">
                    <div class="row g-9 mb-1">
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Department Image</label>
                            <div class="d-flex flex-center flex-column py-5">
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/blankimg.svg')">
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url('assets/media/blankimg.svg')"></div>
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Add Image">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="image" accept="image/*" />
                                        <input type="hidden" name="avatar_remove" />
                                    </label>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Image">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                </div>
                                <div class="form-text">Allowed all image file types</div>
                            </div>
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Image Alt Tags (Comma Seperated)</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Alt Tags" name="imgAlt" id="imgAlt">
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Banner Image</label>
                            <div class="d-flex flex-center flex-column py-5">
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/blankimg.svg')">
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url('assets/media/blankimg.svg')"></div>
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Add Image">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="bannerImage" accept="image/*" />
                                        <input type="hidden" name="avatar_remove" />
                                    </label>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Image">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                </div>
                                <div class="form-text">Allowed all image file types</div>
                            </div>
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Banner Image Alt Tags (Comma Seperated)</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Alt Tags" name="bannerImgAlt" id="bannerImgAlt">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="row g-9 mb-1">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Department Name</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Department Name" id="name" name="name">
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">URL</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter URL" name="url" id="url">
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="required d-flex align-items-center fs-6 fw-semibold mb-2">Add Home Page Description</label>
                            <input class="form-control form-control-solid" placeholder="Enter Home Page Description" id="homePageDes" name="homePageDes">
                        </div>
                        <div class="col-md-9 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Title</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="title" id="title">
                        </div>
                        <div class="col-md-3 fv-row">
                            <label class="fs-6 fw-semibold mb-2 ">Status</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" name="status" id="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="required d-flex align-items-center fs-6 fw-semibold mb-2">Add Short Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Short Description" id="shortDescription" name="shortDescription" rows="5"></textarea>
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Subtitle</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Subtitle" name="subtitle" id="subtitle">
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="required d-flex align-items-center fs-6 fw-semibold mb-2">Add Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Description" id="description" name="description" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="kt_modal_add_submit">
            <span class="indicator-label">Add</span>
            <span class="indicator-progress">Please Wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
    </div>

</form>


@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        $('#name').keyup(function(e) {
            var txtVal = $(this).val();
            $('#url').val(txtVal);
        });
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
                            title: {
                                validators: {
                                    notEmpty: {
                                        message: "Enter title is required"
                                    },
                                }
                            },
                            url: {
                                validators: {
                                    notEmpty: {
                                        message: "Enter url is required"
                                    },
                                }
                            },
                            image: {
                                validators: {
                                    notEmpty: {
                                        message: "Select image is required"
                                    },
                                }
                            },
                            description: {
                                validators: {
                                    notEmpty: {
                                        message: "Enter description is required"
                                    },
                                }
                            },
                            shortDescription: {
                                validators: {
                                    notEmpty: {
                                        message: "Enter short description is required"
                                    },
                                }
                            },
                            subtitle: {
                                validators: {
                                    notEmpty: {
                                        message: "Enter subtitle is required"
                                    },
                                }
                            },
                            homePageDes: {
                                validators: {
                                    notEmpty: {
                                        message: "Enter home page description is required"
                                    },
                                }
                            },
                            bannerImage: {
                                validators: {
                                    notEmpty: {
                                        message: "Select banner image is required"
                                    },
                                }
                            },
                            name: {
                                validators: {
                                    notEmpty: {
                                        message: "Enter department name is required"
                                    },
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

@endsection