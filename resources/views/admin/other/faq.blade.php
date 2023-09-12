@extends('layouts.admin')

@section('title')
FAQ's
@endsection

@section('header')

@endsection

@section('breadcrumb')
<h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">FAQ's</h1>
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
    <li class="breadcrumb-item text-muted">
        <a href="{{url('/dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-dark">FAQ's</li>
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
@if($faqs->count() == 0)
<div class="card">
    <div class="card-body p-0">
        <div class="text-center px-4">
            <img class="mw-100 mh-300px" alt="" src="assets/media/illustrations/sketchy-1/5.png" />
        </div>
        <div class="card-px text-center py-20 ">
            <h2 class="fs-2x fw-bold mb-10">No FAQ Found</h2>
            <p class="text-gray-400 fs-4 fw-semibold mb-10">Looks like you do not have any faqs here.
                <br />If you want to add a faq, click on the button below.
            </p>
            </p>
            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addmodal"><span class="svg-icon svg-icon-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                    </svg>
                </span>Add FAQ
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
                <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search FAQ" />
            </div>
        </div>
        <div class="card-toolbar">
            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addmodal">
                    <span class="svg-icon svg-icon-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                        </svg>
                    </span>
                    Add FAQ
                </button>
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
                    <th class="text-center min-w-25px">Question</th>
                    <th class="text-center min-w-125px">Answer</th>
                    <th class="text-center min-w-125px">Status</th>
                    <th class="text-center min-w-70px">Actions</th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                <?php $i = 1; ?>
                @foreach ($faqs as $data)
                <tr>
                    <td class="text-center">
                        {{ $i++}}
                    </td>
                    <td class="text-center">
                        {{ $data->question }}
                    </td>
                    <td class="text-center">
                        <div class="align-middle text-center">
                            <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#showAnswer{{$data->id}}"> View Answer </a>
                        </div>
                    </td>
                    <!--show answer modal start-->
                    <div class="modal fade" id="showAnswer{{$data->id}}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <div class="modal-content rounded">
                                <div class="modal-header pb-0 border-0 justify-content-end">
                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                        <span class="svg-icon svg-icon-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                    @csrf
                                    <input type="hidden" name="faqId" value="{{$data->id}}">
                                    <div class="text-center">
                                        <h1 class="">Answer </h1>
                                    </div>
                                    <div class="d-flex flex-column fv-row" style="white-space:pre-line;">
                                        {!!$data->answer!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--show answer modal end-->
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
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#updatemodal{{$data->id}}">
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
                <div class="modal fade" id="updatemodal{{$data->id}}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-900px">
                        <div class="modal-content rounded">
                            <div class="modal-header">
                                <h1 class="modal-tital w-100 text-center"> Update Question</h1>
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <form autocomplete="off" action="{{url('faq/update')}}" enctype="multipart/form-data" method="post">
                                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                    @csrf
                                    <input type="hidden" name="faqId" value="{{$data->id}}">
                                    <div class="row g-9 mt-3">
                                        <div class="col-md-9 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Question</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="Enter Question" name="question" id="question{{$data->id}}" value="{{$data->question}}">
                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <label class="fs-6 fw-semibold mb-2 ">Status</label>
                                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" name="status">
                                                <option value="1" {{$data->status == 1 ? 'selected' : ''}}>Active</option>
                                                <option value="0" {{$data->status == 0 ? 'selected' : ''}}>Inactive</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Sequence</label>
                                            <input type="number" class="form-control form-control-solid" placeholder="Enter the viewing sequence" id="sequence{{$data->id}}" value="{{$data->sequence}}" name="sequence" min="0">
                                        </div>
                                        <div class="col-md-9 mb-5">
                                            <label class="required fs-6 fw-semibold mb-2">Answer</label>
                                            <textarea class="form-control form-control-solid" placeholder="Enter Answer" name="answer" id="answer{{$data->id}}" rows="5">{!!$data->answer!!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" id="kt_modal_add_submit1">
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
                                <h5 class="modal-title">Delete Question</h5>
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <form action="{{url('faq/delete')}}" id="UserDeleteForm{{$data->id}}" method="post">
                                @csrf
                                <input type="hidden" value="{{$data->id}}" name="faqId">
                                <div class="modal-body">
                                    <span>Are you sure you want to delete this question ? <br> Action cannot be reverted</span>
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
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endif
<!--create modal start-->
<div class="modal fade" id="addmodal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <div class="modal-content rounded">
            <div class="modal-header">
                <h1 class="modal-tital w-100 text-center"> Add FAQ </h1>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                </div>
            </div>
            <form autocomplete="off" action="{{url('/faq/add')}}" enctype="multipart/form-data" method="post" id="kt_modal_add_form">
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    @csrf
                    <div class="row g-9 mt-3">
                        <div class="col-md-9 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Question</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Question" id="question" name="question">
                        </div>
                        <div class="col-md-3 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Status</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" name="status" id="Status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-3 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Sequence</label>
                            <input type="number" class="form-control form-control-solid" placeholder="Enter the viewing sequence" id="sequence" name="sequence" min="0">
                        </div>
                        <div class="col-md-9 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Answer</label>
                            <textarea class="form-control form-control-solid" placeholder="Enter Answer" id="answer" name="answer" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="kt_modal_add_submit">
                        <span class="indicator-label">Add</span>
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


<!--Required Filed Validation-->
<script>
    var KTModalAdd = function() {
        var t, e, o, n, r, i;
        return {
            init: function() {
                r = document.querySelector("#kt_modal_add_form"),
                    t = r.querySelector("#kt_modal_add_submit"),
                    n = FormValidation.formValidation(r, {
                        fields: {
                            question: {
                                validators: {
                                    notEmpty: {
                                        message: "Enter question is required"
                                    },
                                }
                            },
                            answer: {
                                validators: {
                                    notEmpty: {
                                        message: "Enter answer is required"
                                    },
                                }
                            },
                            sequence: {
                                validators: {
                                    notEmpty: {
                                        message: "Enter sequence is required"
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

<!--Datatable-->
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