@extends('layouts.admin')

@section('title')
Add Blog
@endsection

@section('header')

@endsection

@section('breadcrumb')
<h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Add Blog</h1>
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
    <li class="breadcrumb-item text-muted">
        <a href="{{url('/dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">
        <a href="{{url('/blogs')}}" class="text-muted text-hover-primary">Blogs</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-dark">Add Blog</li>


</ul>
@endsection

@section('content')
<form autocomplete="off" action="{{url('/blogs/add')}}" enctype="multipart/form-data" method="post" id="kt_modal_add_form">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-5 mb-xl-8">
                <div class="card-header">
                    <h3 class="card-title">Add Blog Details</h3>
                </div>
                <div class="card-body">
                    <div class="row g-9 mb-2">
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Blog Image</label>
                            <div class="d-flex flex-center flex-column py-5">
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/blankimg.svg')">
                                    <div class="image-input-wrapper w-150px h-150px" style="background-image: url('assets/media/blankimg.svg')"></div>
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
                            <label class="fs-6 fw-semibold mb-2 ">Status</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" name="status" id="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Visibility For</label>
                            <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select Option" data-hide-search="true" name="type" id="type">
                                <option value=""></option>
                                <option value="general">General</option>
                                <option value="service">Service</option>
                            </select>
                        </div>
                        <div class="col-md-12 fv-row" style="display: none;" id="services">
                            <label class="fs-6 fw-semibold mb-2">Select Service</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-placeholder="Select Service" data-dropdown-parent="#kt_modal_add_form" name="serviceId" id="serviceId">
                                <option value=""></option>
                                @foreach ($services as $service)
                                <option value="{{$service->id}}">{{$service->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row g-9 mb-2">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Title</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" id="title" name="title" minlength="10" onkeyup="checkBlog()">
                            <span id="blogTitle"></span>
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">URL</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter URL" name="url" id="url">
                        </div>
                        <div class="col-md-3 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Writer </label>
                            <input type="text" class="txtOnly form-control form-control-solid " placeholder="Enter Writer Name" id="writer" name="writer" minlength="3">
                        </div>
                        <div class="col-md-9 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Sub Title</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Sub Title" id="subtitle" name="subtitle" minlength="10">
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="required d-flex align-items-center fs-6 fw-semibold mb-2">Add Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter description" id="description1" name="description1" minlength="25" rows="15"></textarea>
                        </div>
                        <!-- <div class="col-md-12 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Add Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter description" id="description2" name="description2" minlength="25" rows="7"></textarea>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer mt-5">
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
        $('#title').keyup(function(e) {
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
                                        message: "Blog title is required"
                                    },
                                }
                            },
                            subtitle: {
                                validators: {
                                    notEmpty: {
                                        message: "Blog subtitle is required"
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
                                        message: "Blog image is required"
                                    },
                                }
                            },
                            description1: {
                                validators: {
                                    notEmpty: {
                                        message: "Enter description is required"
                                    },
                                }
                            },
                            type: {
                                validators: {
                                    notEmpty: {
                                        message: "Select option is required"
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

<script>
    $('.txtOnly').bind('keydown', function(event) {
        var key = event.which;
        if (key >= 48 && key <= 57) {
            event.preventDefault();
        }
    });
</script>

<script>
    function checkBlog() {
        var title = document.getElementById('title').value;
        var blogTitle = document.getElementById('blogTitle');
        var button = document.getElementById('kt_modal_add_submit');

        $.ajax({
            type: "POST",
            url: "{{url('blog/checkBlog')}}",
            data: {
                "_token": "{{ csrf_token() }}",
                'title': title,
            },
            dataType: "json",
            success: function(response) {
                blogTitle.innerHTML = "Title already taken";
                blogTitle.style.color = '#f1416c';
                blogTitle.style.display = 'block';
                button.disabled = true;
            },
            error: function(response) {

                blogTitle.innerHTML = "Title is available";
                blogTitle.style.color = '#50cd89';
                blogTitle.style.display = 'block';
                button.disabled = false;
            }
        });
    }
</script>

<script>
    var services = document.getElementById('services');
    $('#type').change(function(e) {
        e.preventDefault();
        var visisbilityValue = document.getElementById('type').value;
        if (visisbilityValue == 'service') {
            services.style.display = "block"
        } else {
            services.style.display = "none"
        }

    });
</script>

@endsection