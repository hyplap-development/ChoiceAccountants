@extends('layouts.admin')

@section('title','Dashboard')

@section('header')

@endsection

@section('breadcrumb')
<h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Dashboard</h1>

@endsection

@section('content')
<!-- <div class="row g-5 g-xl-8">
    <div class="col-xl-3">
        <a class="card bg-primary hoverable card-xl-stretch mb-xl-8">
            <div class="card-body">
                <div class="text-white fw-bold fs-2 mb-2 mt-5">Total Users</div>
                <h1 class="fw-semibold text-white">{{$user->count()}}</h1>
            </div>
        </a>
    </div>
    <div class="col-xl-3">
        <a class="card bg-white hoverable card-xl-stretch mb-xl-8">
            <div class="card-body">
                <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">Total Services</div>
                <h1 class="fw-semibold text-gray">{{$service->count()}}</h1>
            </div>
        </a>
    </div>
    <div class="col-xl-3">
        <a class="card bg-primary hoverable card-xl-stretch mb-xl-8">
            <div class="card-body">
                <div class="text-white fw-bold fs-2 mb-2 mt-5">Total Blogs</div>
                <h1 class="fw-semibold text-white">{{$blog->count()}}</h1>
            </div>
        </a>
    </div>
    <div class="col-xl-3">
        <a class="card bg-white hoverable card-xl-stretch mb-xl-8">
            <div class="card-body">
                <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">Total Clients</div>
                <h1 class="fw-semibold text-gray">{{$client->count()}}</h1>
            </div>
        </a>
    </div>
</div> -->

@if($department->count() == 0)
<div class="card">
    <div class="card-body p-0">
        <div class="text-center px-4">
            <img class="mw-100 mh-300px" alt="" src="assets/media/illustrations/sketchy-1/5.png" />
        </div>
        <div class="card-px text-center py-20 ">
            <h2 class="fs-2x fw-bold mb-10">No Department Found</h2>
            <p class="text-gray-400 fs-4 fw-semibold mb-10">Looks like you do not have any department here.
                <br />If you want to add a department, click on the button below.
            </p>
            </p>
            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addmodal"><span class="svg-icon svg-icon-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                    </svg>
                </span>Add Department
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
                <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Department" />
            </div>
        </div>
        <div class="card-toolbar">
            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
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
                    <th class="text-center min-w-25px">Department Image</th>
                    <th class="text-center min-w-125px">Department Name</th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                <?php $i = 1; ?>
                @foreach ($department as $data)
                <tr>
                    <td class="text-center">
                        {{ $i++}}
                    </td>
                    <td class="text-center">
                        <div class="symbol symbol-50px">
                            <img src="{{$data->image != null ? $data->image : 'assets/media/blank.png'}}" alt="" />
                        </div>
                    </td>
                    <td class="text-center">
                        {{ $data->name }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
<div class="row g-5 g-xl-8 mt-5">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark">Performance</span>
                    <span class="text-gray-400 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
                </h3>
                <div class="card-toolbar">
                    <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" data-kt-daterangepicker-range="today" class="btn btn-sm btn-light d-flex align-items-center px-4">
                        <div class="text-gray-600 fw-bold">Loading date range...</div>
                        <span class="svg-icon svg-icon-1 ms-2 me-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
                                <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
                                <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-body d-flex align-items-end p-0">
                <div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6" style="height: 300px"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Recent Statistics</span>
                    <span class="text-muted fw-semibold fs-7">More than 400 new members</span>
                </h3>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f20b69eb25">
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bold">Filter Options</div>
                        </div>
                        <div class="separator border-gray-200"></div>
                        <div class="px-7 py-5">
                            <div class="mb-10">
                                <label class="form-label fw-semibold">Status:</label>
                                <div>
                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f20b69eb25" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fw-semibold">Member Type:</label>
                                <div class="d-flex">
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fw-semibold">Notifications:</label>
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_charts_widget_1_chart" style="height: 350px"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    var KTAppEcommerceCategories = function() {
        var n = () => {

        };
        return {
            init: function() {
                (t = document.querySelector("#data_table")) && ((e = $(t).DataTable({
                    info: !1,
                    order: [],
                    pageLength: 2,

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