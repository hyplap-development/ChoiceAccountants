@extends('layouts.admin')

@section('title')
Add Service
@endsection

@section('header')

@endsection

@section('breadcrumb')
<h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Add Service</h1>
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
    <li class="breadcrumb-item text-muted">
        <a href="{{url('/dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">
        <a href="{{url('/service')}}" class="text-muted text-hover-primary">Services</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-dark">Add Service</li>


</ul>
@endsection

@section('content')
<form autocomplete="off" action="{{url('/service/add')}}" enctype="multipart/form-data" method="post" id="kt_modal_add_form">
    @csrf
    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_normal1_tab" id="step1">Introduction & Conclusion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab" href="#kt_user_view_normal2_tab" id="step2">Why It Is Necessary</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab" href="#kt_user_view_normal3_tab" id="step3">How Choice Will Help</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="kt_user_view_normal1_tab" role="tabpanel">
            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-5 mb-xl-8">
                        <div class="card-header">
                            <h3 class="card-title">Add Service Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="row g-9 mb-1">
                                <div class="col-md-12 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">Service Cover Image</label>
                                    <div class="d-flex flex-center flex-column py-5">
                                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/blankimg.svg')">
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url('assets/media/blankimg.svg')"></div>
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Add Image">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <input type="file" name="coverImage" accept="image/*" />
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
                                    <label class="fs-6 fw-semibold mb-2">Cover Image Alt Tags (Comma Seperated)</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="Enter Alt Tags" name="coverImageAltTag" id="coverImageAltTag">
                                </div>
                                <div class="col-md-12 fv-row">
                                    <label class="fs-6 fw-semibold mb-2">Conclusion Image</label>
                                    <div class="d-flex flex-center flex-column py-5">
                                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/blankimg.svg')">
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url('assets/media/blankimg.svg')"></div>
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Add Image">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <input type="file" name="conclusionImage" accept="image/*" />
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
                                    <label class="fs-6 fw-semibold mb-2">Conclusion Image Alt Tags (Comma Seperated)</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="Enter Alt Tags" name="conclusionImageAltTag" id="conclusionImageAltTag">
                                </div>
                                <div class="col-md-12 fv-row">
                                    <label class="fs-6 fw-semibold mb-2 ">Status</label>
                                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" name="status" id="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row g-9 mb-1">
                                <div class="col-md-5 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">Service Name</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="Enter Service Name" id="name" name="name">
                                </div>
                                <div class="col-md-5 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">URL</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="Enter URL" name="url" id="url">
                                </div>
                                <div class="col-md-2 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2 ">Best or Not</label>
                                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Option" name="flag" id="flag">
                                        <option value=""></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <div class="col-md-6 fv-row">
                                    <label class="required d-flex align-items-center fs-6 fw-semibold mb-2">Home Page Description</label>
                                    <textarea class="form-control form-control-solid" placeholder="Enter Home Page Description" id="homePageDesc" name="homePageDesc" rows="3"></textarea>
                                </div>
                                <div class="col-md-6 fv-row">
                                    <label class="required d-flex align-items-center fs-6 fw-semibold mb-2">Description</label>
                                    <textarea class="form-control form-control-solid" placeholder="Enter Description" id="description" name="description" rows="3"></textarea>
                                </div>
                                
                                <div class="col-md-8 fv-row">
                                    <label class="fs-6 fw-semibold mb-2">Subtitle</label>
                                    <textarea class="form-control form-control-solid" placeholder="Enter Subtitle" id="subtitle" name="subtitle"></textarea>
                                </div>
                                <div class="col-md-4 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">Select Department</label>
                                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select Department" data-hide-search="false" data-dropdown-parent="#kt_modal_add_form" name="departmentId" id="departmentId">
                                        <option value=""></option>
                                        @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Introduction 1</label>
                                    <textarea class="form-control form-control-solid" placeholder="Enter Introduction" id="intropara1" name="intropara1" rows="6"></textarea>
                                </div>
                                <div class="col-md-6 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Introduction 2</label>
                                    <textarea class="form-control form-control-solid" placeholder="Enter Introduction" id="intropara2" name="intropara2" rows="6"></textarea>
                                </div>
                                <div class="col-md-12 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Add Conclusion</label>
                                    <textarea class="form-control form-control-solid" placeholder="Enter Conclusion" id="conclusion" name="conclusion" rows="6"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" data-bs-toggle="tab" onclick="document.getElementById('step2').click();">Next</a>
            </div>
        </div>
        <div class="tab-pane fade" id="kt_user_view_normal2_tab" role="tabpanel">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 fv-row">
                            <div class="col-md-12 fv-row">
                                <label class="fs-6 fw-semibold mb-2">Necessary Image</label>
                                <div class="d-flex flex-center flex-column py-5">
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/blankimg.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url('assets/media/blankimg.svg')"></div>
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Add Image">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <input type="file" name="necessaryImage" accept="image/*" />
                                            <input type="hidden" name="avatar_remove" />
                                        </label>
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Image">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 fv-row">
                                <label class="fs-6 fw-semibold mb-2">Necessary Image Alt Tags (Comma Seperated)</label>
                                <input type="text" class="form-control form-control-solid" placeholder="Enter Alt Tags" name="necessaryImageAltTag" id="necessaryImageAltTag">
                            </div>
                        </div>

                        <div class="col-md-8 fv-row">
                            <div class="row g-9 mb-1">
                                <div class="col-md-6 fv-row">
                                    <label class="fs-6 fw-semibold mb-2">Necessary Title 1</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="nt1" id="nt1">
                                </div>
                                <div class="col-md-6 fv-row">
                                    <label class="fs-6 fw-semibold mb-2">Necessary Title 2</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="nt2" id="nt2">
                                </div>
                                <div class="col-md-6 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Title 1 Description</label>
                                    <textarea class="form-control form-control-solid" placeholder="Enter Description" id="nta1" name="nta1" rows="5"></textarea>
                                </div>
                                <div class="col-md-6 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Title 2 Description</label>
                                    <textarea class="form-control form-control-solid" placeholder="Enter Description" id="nta2" name="nta2" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 fv-row mt-7">
                            <label class="fs-6 fw-semibold mb-2">Necessary Title 3</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="nt3" id="nt3">
                        </div>
                        <div class="col-md-4 fv-row mt-7">
                            <label class="fs-6 fw-semibold mb-2">Necessary Title 4</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="nt4" id="nt4">
                        </div>
                        <div class="col-md-4 fv-row mt-7">
                            <label class="fs-6 fw-semibold mb-2">Necessary Title 5</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="nt5" id="nt5">
                        </div>
                        <div class="col-md-4 fv-row mt-7">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Title 3 Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Description" id="nta3" name="nta3" rows="5"></textarea>
                        </div>
                        <div class="col-md-4 fv-row mt-7">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Title 4 Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Description" id="nta4" name="nta4" rows="5"></textarea>
                        </div>
                        <div class="col-md-4 fv-row mt-7">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Title 5 Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Description" id="nta5" name="nta5" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer mt-5">
                <a class="btn btn-primary" data-bs-toggle="tab" onclick="document.getElementById('step3').click();">Next</a>
            </div>
        </div>
        <div class="tab-pane fade" id="kt_user_view_normal3_tab" role="tabpanel">
            <div class="card">
                <div class="card-body">
                    <div class="row g-9 mb-1">
                        <div class="col-md-4 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Title 1</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="st1" id="st1">
                        </div>
                        <div class="col-md-4 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Title 2</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="st2" id="st2">
                        </div>
                        <div class="col-md-4 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Title 3</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="st3" id="st3">
                        </div>
                        <div class="col-md-4 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Title 1 Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Description" id="sta1" name="sta1" rows="5"></textarea>
                        </div>
                        <div class="col-md-4 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Title 2 Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Description" id="sta2" name="sta2" rows="5"></textarea>
                        </div>
                        <div class="col-md-4 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Title 3 Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Description" id="sta3" name="sta3" rows="5"></textarea>
                        </div>
                        <div class="col-md-4 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Title 4</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="st4" id="st4">
                        </div>
                        <div class="col-md-4 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Title 5</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="st5" id="st5">
                        </div>
                        <div class="col-md-4 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Title 6</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="st6" id="st6">
                        </div>
                        <div class="col-md-4 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Title 4 Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Description" id="sta4" name="sta4" rows="5"></textarea>
                        </div>
                        <div class="col-md-4 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Title 5 Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Description" id="sta5" name="sta5" rows="5"></textarea>
                        </div>
                        <div class="col-md-4 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Title 6 Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Description" id="sta6" name="sta6" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="kt_modal_add_submit">
                            <span class="indicator-label">Add</span>
                            <span class="indicator-progress">Please Wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
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
                                name: {
                                    validators: {
                                        notEmpty: {
                                            message: "Enter name is required"
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
                                coverImage: {
                                    validators: {
                                        notEmpty: {
                                            message: "Select cover image is required"
                                        },
                                    }
                                },
                                flag: {
                                    validators: {
                                        notEmpty: {
                                            message: "Select option is required"
                                        },
                                    }
                                },
                                homePageDesc: {
                                    validators: {
                                        notEmpty: {
                                            message: "Enter description is required"
                                        },
                                    }
                                },
                                departmentId: {
                                    validators: {
                                        notEmpty: {
                                            message: "Select department is required"
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
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger,
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row",
                                eleInvalidClass: "",
                                eleValidClass: ""
                            })
                        }
                    }),
            t.addEventListener("click", (function(e) {
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