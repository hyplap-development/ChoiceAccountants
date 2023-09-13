@extends('layouts.admin')

@section('title','SEO Content For BlogsFor Blog')

@section('header')

@endsection

@section('breadcrumb')
<h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">SEO Content For Blog</h1>
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
    <li class="breadcrumb-item text-muted">
        <a href="{{url('/dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">
        <a href="{{url('/seo')}}" class="text-muted text-hover-primary">Blogs</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-dark">SEO Content For Blog</li>
</ul>
@endsection

@section('content')
<form action="{{url('/seo/updateseo')}}" id="kt_modal_add_form" enctype="multipart/form-data" method="post">
    @csrf
    <input type="hidden" name="hiddenId" value="{{$seoblog->id}}">
    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_normal1_tab" id="step1">Meta Titles and Images</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_normal2_tab" id="step2">Meta Descriptions</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab" href="#kt_user_view_normal3_tab" id="step3">Schemas</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="kt_user_view_normal1_tab" role="tabpanel">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="row g-9 mb-7">
                        <div>
                            <h4 style="color: #f1416c; display: inline;">You can only upload one from either an image or a URL</h4>
                            <h4 style="color: #268d44; display: inline; float: right;">{{$blog->title}}</h4>
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Open Graph Image</label>
                            <div class="d-flex flex-center flex-column py-5 mb-1">
                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                    <?php
                                    if ($seoblog->ogImage != null) {
                                        $placeholderblankImage = $seoblog->ogImage;
                                    } else {
                                        $placeholderblankImage = config('placeholderblankImage');
                                    }
                                    ?>
                                    <div class="image-input-wrapper w-150px h-150px" style="background-image: url('{{ $placeholderblankImage }}')"></div>
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Add Image">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="ogImage" accept="image/*" value="{{$seoblog->ogImage }}" />
                                        <input type="hidden" name="avatar_remove" />
                                    </label>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Image">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                </div>
                                <div class="form-text">Allowed all image file types</div>
                            </div>
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Twitter Image</label>
                            <div class="d-flex flex-center flex-column py-5 mb-1">
                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                    <?php
                                    if ($seoblog->twitterImage != null) {
                                        $placeholderblankImage = $seoblog->twitterImage;
                                    } else {
                                        $placeholderblankImage = config('placeholderblankImage');
                                    }
                                    ?>
                                    <div class="image-input-wrapper w-150px h-150px" style="background-image: url('{{ $placeholderblankImage }}')"></div>
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Add Image">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="twitterImage" accept="image/*" value="{{$seoblog->twitterImage }}" />
                                        <input type="hidden" name="avatar_remove" />
                                    </label>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Image">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                </div>
                                <div class="form-text">Allowed all image file types</div>
                            </div>
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Or Open Graph Image Url</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Open Graph Image Url" id="ogImageurl" name="ogImageurl" value="{{$seoblog->ogImage}}">
                            <span id="errormsgimg2"></span>
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Or Twitter Image Url</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Twitter Image Url" id="twitterImageurl" name="twitterImageurl" value="{{$seoblog->twitterImage}}">
                            <span id="errormsgimg3"></span>
                        </div>
                        <input type="hidden" name="fieldId" id="fieldId" value="{{$seoblog->fieldId}}">
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Title</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" id="title" name="title" value="{{$seoblog->title}}">
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Meta Title</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Meta Title" id="metaTitle" name="metaTitle" value="{{$seoblog->metaTitle}}">
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Open Graph Title</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Open Graph Title" id="ogTitle" name="ogTitle" value="{{$seoblog->ogTitle}}">
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Facebook Open Graph Title</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Facebook Title" id="fbogTitle" name="fbogTitle" value="{{$seoblog->fbogTitle}}">
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Twitter Title</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Twitter Title" id="twitterTitle" name="twitterTitle" value="{{$seoblog->twitterTitle}}">
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Item Property Title</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Item Property Title" id="ipTitle" name="ipTitle" value="{{$seoblog->ipTitle}}">
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Dublin Core Title</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Dublin Core Title" id="dcTitle" name="dcTitle" value="{{$seoblog->dcTitle}}">
                        </div>

                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Dublin Core Creator</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Dublin Core Creator" id="dcCreator" name="dcCreator" value="{{$seoblog->dcCreator}}">
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Meta Keyword</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Meta Keywords" name="metaKeyword" id="metaKeyword" value="{{$seoblog->metaKeyword}}">
                        </div>
                        <div class="col-md-3 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Meta Author Name</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Meta Author Name" id="metaAuthor" name="metaAuthor" value="{{$seoblog->metaAuthor}}">
                        </div>
                        <div class="col-md-3 fv-row">
                            <label class="fs-6 fw-semibold mb-2 ">Meta Robot</label>
                            <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select Option" data-hide-search="true" name="metaRobot[]" id="metaRobot" multiple>
                                <option value=""></option>
                                <option value="index" {{in_array('index', explode(',', $seoblog->metaRobot)) ? 'selected' : ''}}>Index</option>
                                <option value="noindex" {{in_array('noindex', explode(',', $seoblog->metaRobot)) ? 'selected' : ''}}>No Index</option>
                                <option value="follow" {{in_array('follow', explode(',', $seoblog->metaRobot)) ? 'selected' : ''}}>Follow</option>
                                <option value="nofollow" {{in_array('nofollow', explode(',', $seoblog->metaRobot)) ? 'selected' : ''}}>No Follow</option>
                            </select>
                        </div>

                        <div class="col-md-4 fv-row">
                            <label class="fs-6 fw-semibold mb-2 ">Twitter Type</label>
                            <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select Type" data-hide-search="true" name="twitterType" id="twitterType">
                                <option value=""></option>
                                <option value="App" {{$seoblog->twitterType == 'App' ? 'selected' : ''}}>App</option>
                                <option value="Player" {{$seoblog->twitterType == 'Player' ? 'selected' : ''}}>Player</option>
                                <option value="Summery" {{$seoblog->twitterType == 'Summery' ? 'selected' : ''}}>Summery</option>
                                <option value="Summerywithlargeimage" {{$seoblog->twitterType == 'Summerywithlargeimage' ? 'selected' : ''}}>Summerywithlargeimage</option>
                            </select>
                        </div>
                        <div class="col-md-4 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Facebook Open Graph Type</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Facebook Open Graph Type" id="fbogType" name="fbogType" value="{{$seoblog->fbogType}}">
                        </div>
                        <div class="col-md-4 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Facebook Open Graph Site Name</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Facebook Open Graph Site Name" id="fbogSiteName" name="fbogSiteName" value="{{$seoblog->fbogSiteName}}">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-primary" data-bs-toggle="tab" onclick="document.getElementById('step2').click();">Next</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="kt_user_view_normal2_tab" role="tabpanel">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="row g-9 mb-7">
                        <div class="col-md-12 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Meta Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Meta Description" id="metaDescription" name="metaDescription" rows="5">{{$seoblog->metaDescription}}</textarea>
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Open Graph Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Open Graph Description" id="ogDescription" name="ogDescription" rows="5">{{$seoblog->ogDescription}}</textarea>
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Facebook Open Graph Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Open Graph Description" id="fbogDescription" name="fbogDescription" rows="5">{{$seoblog->fbogDescription}}</textarea>
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Twitter Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Twitter Description" id="twitterDescription" name="twitterDescription" rows="5">{{$seoblog->twitterDescription}}</textarea>
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Item Property Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Item Property Description" id="ipDescription" name="ipDescription" rows="5">{{$seoblog->ipDescription}}</textarea>
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Dublin Core Description</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Dublin Core Description" id="dcDescription" name="dcDescription" rows="5">{{$seoblog->dcDescription}}</textarea>
                        </div>

                    </div>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-primary" data-bs-toggle="tab" onclick="document.getElementById('step3').click();">Next</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="kt_user_view_normal3_tab" role="tabpanel">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="row g-9 mb-7">
                        <div class="col-md-12 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Schema 1</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Schema" id="schema1" name="schema1" rows="8">{!!$seoblog->schema1!!}</textarea>
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Schema 2</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Schema" id="schema2" name="schema2" rows="8">{!!$seoblog->schema2!!}</textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" id="kt_modal_add_submit">
                            <span class="indicator-label">Update</span>
                            <span class="indicator-progress">Plaese Wait...
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
    document.addEventListener("DOMContentLoaded", function() {
        const validateImageUrl = (inputElement, errorMsgElement) => {
            const inputValue = inputElement.value;
            const urlRegex = /^(https?:\/\/)?[\w\-]+(\.[\w\-]+)+[/#?]?.*\.(?:jpg|jpeg|png|gif|svg|webp)$/i;

            if (inputValue.trim() === "" || urlRegex.test(inputValue)) {
                errorMsgElement.textContent = "";
                enableSubmitButton();
            } else {
                errorMsgElement.textContent = "Invalid URL Format. Please Enter a Valid Image URL.";
                errorMsgElement.style.color = "#f1416c";
                disableSubmitButton();
            }
        };

        const synchronizeImageUrls = (sourceInput) => {
            const txtVal = sourceInput.value;
            const inputsToUpdate = [
                document.getElementById("ogImageurl"),
                document.getElementById("twitterImageurl"),
            ];

            inputsToUpdate.forEach(input => {
                if (input !== sourceInput) {
                    input.value = txtVal;
                    validateImageUrl(input, input.nextElementSibling);
                }
            });
        };

        const enableSubmitButton = () => {
            const submitButton = document.getElementById("kt_modal_add_submit");
            submitButton.removeAttribute("disabled");
            submitButton.querySelector(".indicator-label").textContent = "Update";
            submitButton.querySelector(".indicator-progress").style.display = "none";
        };

        const disableSubmitButton = () => {
            const submitButton = document.getElementById("kt_modal_add_submit");
            submitButton.setAttribute("disabled", "true");
            submitButton.querySelector(".indicator-label").textContent = "";
            submitButton.querySelector(".indicator-progress").style.display = "block";
        };

        const ogImageurlInput = document.getElementById("ogImageurl");
        ogImageurlInput.addEventListener("input", function() {
            validateImageUrl(ogImageurlInput, ogImageurlInput.nextElementSibling);
            synchronizeImageUrls(ogImageurlInput);
        });

        const twitterImageurlInput = document.getElementById("twitterImageurl");
        twitterImageurlInput.addEventListener("input", function() {
            validateImageUrl(twitterImageurlInput, twitterImageurlInput.nextElementSibling);
        });

    });
</script>

<script>
    $(document).ready(function() {
        $('#ogImageurl').keyup(function(e) {
            var txtVal = $(this).val();
            $('#twitterImageurl').val(txtVal);
        });
    });
</script>

@endsection