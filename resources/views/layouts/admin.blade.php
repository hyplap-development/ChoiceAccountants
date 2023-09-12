<!DOCTYPE html>

<html lang="en">

<head>
	<base href="../../" />
	<title>
		@section('title')
		@show
	</title>
	<meta charset="utf-8" />
	<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />


	<link rel="shortcut icon" href="{{asset('/webassets/uploads/2022/10/cropped-favicon-192x192.png')}}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/summernote/summernote-bs5.css')}}" rel="stylesheet" type="text/css" />

	@section('header')
	@show

</head>

<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
	<script>
		var defaultThemeMode = "light";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-theme-mode");
			} else {
				if (localStorage.getItem("data-theme") !== null) {
					themeMode = localStorage.getItem("data-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-theme", themeMode);
		}
	</script>
	<div class="d-flex flex-column flex-root">
		<div class="page d-flex flex-row flex-column-fluid">
			<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
				<div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
					<div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
						<div class="symbol symbol-50px">
							<img src="{{Auth::User()->profileImage != null ? Auth::User()->profileImage : 'assets/media/blank.png'}}" alt="" />
						</div>
						<div class="aside-user-info flex-row-fluid flex-wrap ms-5">
							<div class="d-flex">
								<div class="flex-grow-1 me-2">
									<a class="text-white text-hover-primary fs-6 fw-bold">{{Auth::User()->name}}</a>
									<span class="fw-semibold d-block fs-8 mb-1" style="color: white;">{{Auth::User()->rolee->name}}</span>
								</div>
								<div class="me-n2">
									<a class="btn btn-icon btn-sm mt-n2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true" >
										<span class="svg-icon svg-icon-2" style="color: white;">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
												<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
											</svg>
										</span>
									</a>
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="{{Auth::User()->profileImage != null ? Auth::User()->profileImage : 'assets/media/blank.png'}}" />
												</div>
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5">{{Auth::User()->name}}
														<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">{{Auth::User()->rolee->name}}</span>
													</div>
													<a href="mailto:{{Auth::User()->email}}" class="fw-semibold text-muted text-hover-primary fs-7">{{Auth::User()->email}}</a>
												</div>
											</div>
										</div>
										<div class="separator my-2"></div>

										<div class="menu-item px-5">
											<a href="{{url('/profile')}}" class="menu-link px-5">My Profile</a>
										</div>

										<div class="separator my-2"></div>

										<div class="menu-item px-5">
											<a href="{{url('/logout')}}" class="menu-link px-5">Sign Out</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="aside-menu flex-column-fluid">
					<div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
						<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
							<a href="{{url('/dashboard')}}" class="menu-item menu-accordion {{Request::is('dashboard*') ? 'here show' : ''}}">
								<span class="menu-link {{Request::is('dashboard*') ? 'active' : ''}}">
									<span class="menu-icon">
										<span class="svg-icon svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
												<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
												<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
												<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
											</svg>
										</span>
									</span>
									<span class="menu-title">Dashboard</span>
								</span>
							</a>
							<div class="menu-item pt-5">
								<div class="menu-content">
									<span class="menu-heading fw-bold text-uppercase fs-7" style="color: white;">Master</span>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item {{Request::is('user*','role*') ? 'here show' : ''}} menu-accordion">
								<span class="menu-link">
									<span class="menu-icon">
										<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="currentColor" fill-rule="nonzero" opacity="0.3" />
													<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="currentColor" fill-rule="nonzero" />
												</g>
											</svg>
										</span>
									</span>
									<span class="menu-title">User Master</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link {{Request::is('role*') ? 'active' : ''}} " href="{{url('/role')}}">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Roles</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link {{Request::is('user*') ? 'active' : ''}} " href="{{url('/user')}}">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Users</span>
										</a>
									</div>
								</div>
							</div>

							<div data-kt-menu-trigger="click" class="menu-item {{Request::is('department*','service*','client*','team*','careeropportunity*') ? 'here show' : ''}} menu-accordion">
								<span class="menu-link">
									<span class="menu-icon">
										<span class="svg-icon svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
												<path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
											</svg>
										</span>
									</span>
									<span class="menu-title">General Master</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link {{Request::is('department*') ? 'active' : ''}} " href="{{url('/department')}}">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Departments</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link {{Request::is('service*') ? 'active' : ''}} " href="{{url('/service')}}">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Services</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link {{Request::is('client*') ? 'active' : ''}} " href="{{url('/client')}}">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Clients</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link {{Request::is('team*') ? 'active' : ''}} " href="{{url('/team')}}">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Teams</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link {{Request::is('careeropportunity*') ? 'active' : ''}} " href="{{url('/careeropportunity')}}">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Career Opportunities</span>
										</a>
									</div>
								</div>
							</div>

							@if(auth()->user()->role == 'developer')
							<div class="menu-item pt-5">
								<div class="menu-content">
									<span class="menu-heading fw-bold text-uppercase fs-7" style="color: white;">SEO Master</span>
								</div>
							</div>
							@endif

							@if(auth()->user()->role == 'developer')
							<div data-kt-menu-trigger="click" class="menu-item {{Request::is('seo','seo/department*','seo/service*','seo/careeropportunity*') ? 'here show' : ''}} menu-accordion">
								<span class="menu-link">
									<span class="menu-icon">
										<span class="svg-icon svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor" />
												<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor" />
											</svg>
										</span>
									</span>
									<span class="menu-title">SEO Master</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link {{Request::is('seo') ? 'active' : ''}} " href="{{url('/seo')}}">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Blogs</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link {{Request::is('seo/department*') ? 'active' : ''}} " href="{{url('/seo/department')}}">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Departments</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link {{Request::is('seo/service*') ? 'active' : ''}} " href="{{url('/seo/service')}}">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Services</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link {{Request::is('seo/careeropportunity*') ? 'active' : ''}} " href="{{url('/seo/careeropportunity')}}">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Career Opportunities</span>
										</a>
									</div>
								</div>
							</div>
							@endif

							<div class="menu-item pt-5">
								<div class="menu-content">
									<span class="menu-heading fw-bold text-uppercase fs-7" style="color: white;">Other</span>
								</div>
							</div>

							<a href="{{url('/faq')}}" class="menu-item menu-accordion {{Request::is('faq*') ? 'here show' : ''}}">
								<span class="menu-link {{Request::is('faq*') ? 'active' : ''}}">
									<span class="menu-icon">
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="currentColor" />
													<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="currentColor" opacity="0.3" />
												</g>
											</svg></span>
									</span>
									<span class="menu-title">FAQ's</span>
								</span>
							</a>

							<a href="{{url('/blog')}}" class="menu-item menu-accordion {{Request::is('blog*') ? 'here show' : ''}}">
								<span class="menu-link {{Request::is('blog*') ? 'active' : ''}}">
									<span class="menu-icon">
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="currentColor" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) " />
													<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="currentColor" fill-rule="nonzero" opacity="0.3" />
												</g>
											</svg>
										</span>
									</span>
									<span class="menu-title">Blogs</span>
								</span>
							</a>

							<a href="{{url('/testimonial')}}" class="menu-item menu-accordion {{Request::is('testimonial*') ? 'here show' : ''}}">
								<span class="menu-link {{Request::is('testimonial*') ? 'active' : ''}}">
									<span class="menu-icon">
										<span class="svg-icon svg-icon-2">
											<svg fill="currentcolor" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 478.248 478.248" xml:space="preserve">
												<g>
													<g>
														<g>
															<path d="M456.02,44.821H264.83c-12.26,0-22.232,9.972-22.232,22.229v98.652c0,12.258,9.974,22.23,22.232,22.23h16.787v39.161
				c0,2.707,1.58,5.165,4.043,6.292c0.92,0.42,1.901,0.627,2.875,0.627c1.631,0,3.244-0.576,4.523-1.685l51.383-44.396h111.576
				c12.26,0,22.23-9.973,22.23-22.23V67.05C478.25,54.792,468.277,44.821,456.02,44.821z M319.922,112.252l-10.209,9.953
				l2.41,14.054c0.174,1.015-0.242,2.038-1.076,2.643c-0.469,0.342-1.027,0.516-1.588,0.516c-0.428,0-0.861-0.103-1.256-0.31
				l-12.621-6.635l-12.619,6.635c-0.912,0.478-2.016,0.398-2.848-0.206s-1.248-1.628-1.074-2.643l2.41-14.054l-10.211-9.953
				c-0.734-0.718-1.002-1.792-0.685-2.769c0.317-0.978,1.164-1.691,2.183-1.839l14.11-2.05l6.31-12.786
				c0.457-0.923,1.396-1.507,2.424-1.507s1.969,0.584,2.422,1.507l6.312,12.786l14.107,2.05c1.02,0.148,1.863,0.861,2.184,1.839
				C320.924,110.46,320.658,111.535,319.922,112.252z M384.766,112.252l-10.211,9.953l2.412,14.054
				c0.172,1.015-0.244,2.038-1.076,2.643c-0.469,0.342-1.025,0.516-1.588,0.516c-0.43,0-0.859-0.103-1.26-0.31l-12.619-6.635
				l-12.619,6.635c-0.912,0.478-2.014,0.398-2.846-0.206c-0.834-0.604-1.25-1.628-1.076-2.643l2.41-14.054l-10.209-9.953
				c-0.734-0.718-1.002-1.792-0.684-2.769c0.316-0.978,1.16-1.691,2.182-1.839l14.109-2.05l6.311-12.786
				c0.455-0.923,1.396-1.507,2.422-1.507c1.029,0,1.967,0.584,2.422,1.507l6.312,12.786l14.109,2.05
				c1.021,0.148,1.863,0.861,2.182,1.839C385.768,110.46,385.5,111.535,384.766,112.252z M449.607,112.252l-10.211,9.953
				l2.408,14.054c0.176,1.015-0.238,2.038-1.072,2.643c-0.471,0.342-1.027,0.516-1.59,0.516c-0.43,0-0.859-0.103-1.258-0.31
				l-12.621-6.635l-12.621,6.635c-0.908,0.478-2.012,0.398-2.844-0.206c-0.834-0.604-1.248-1.628-1.076-2.643l2.412-14.054
				l-10.211-9.953c-0.734-0.718-1-1.792-0.684-2.769c0.316-0.978,1.164-1.691,2.182-1.839l14.111-2.05l6.311-12.786
				c0.453-0.923,1.395-1.507,2.42-1.507c1.027,0,1.971,0.584,2.426,1.507L434,105.594l14.109,2.05
				c1.018,0.148,1.861,0.861,2.182,1.839C450.609,110.46,450.344,111.535,449.607,112.252z" />
															<path d="M152.844,112.924c-46.76,0-72.639,24.231-72.166,70.921c0.686,63.947,27.859,102.74,72.166,102.063
				c0,0,72.131,2.924,72.131-102.063C224.975,137.155,200.605,112.924,152.844,112.924z" />
															<path d="M280.428,334.444l-72.074-28.736l-16.877-14.223c-4.457-3.766-11.041-3.488-15.178,0.621l-23.463,23.336l-23.533-23.342
				c-4.137-4.104-10.713-4.369-15.164-0.615l-16.881,14.223l-72.074,28.739C1.975,343.69,1.995,425.884,0,433.427h305.646
				C303.656,425.9,303.646,343.679,280.428,334.444z" />
														</g>
													</g>
												</g>
											</svg>
										</span>
									</span>
									<span class="menu-title">Testimonials</span>
								</span>
							</a>

							<a href="{{url('/newsletter')}}" class="menu-item menu-accordion {{Request::is('newsletter*') ? 'here show' : ''}}">
								<span class="menu-link {{Request::is('newsletter*') ? 'active' : ''}}">
									<span class="menu-icon">
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="currentColor" />
													<path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="currentColor" opacity="0.3" />
												</g>
											</svg>
										</span>
									</span>
									<span class="menu-title">Newsletters</span>
								</span>
							</a>

						</div>
					</div>
				</div>
			</div>
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<div id="kt_header" class="header align-items-stretch">
					<div class="header-brand">
						<a>
							<!-- <img alt="Logo" src="{{asset('assets/media/logos/logo.png')}}" style="width:160px;" /> -->
						</a>
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
							<span class="svg-icon svg-icon-1 me-n1 minimize-default">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="currentColor" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
										<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="currentColor" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
									</g>
								</svg>
							</span>
							<span class="svg-icon svg-icon-1 minimize-active">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="currentColor" fill-rule="nonzero" />
										<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="currentColor" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
									</g>
								</svg>
							</span>
						</div>
						<div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
							<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
								<span class="svg-icon svg-icon-1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
									</svg>
								</span>
							</div>
						</div>
					</div>
					<div class="toolbar d-flex align-items-stretch">
						<div class="container-fluid py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
							<div class="page-title d-flex justify-content-center flex-column me-5">
								@section('breadcrumb')
								@show
							</div>
						</div>
					</div>
				</div>

				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<div class="post d-flex flex-column-fluid" id="kt_post">
						<div id="kt_content_container" class="container-xxl">
							@section('content')
							@show
						</div>
					</div>
				</div>

				<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
					<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
						<div class="text-dark order-2 order-md-1">
							<span class="text-muted fw-semibold me-1">2023&copy;</span>
							<a class="text-gray-800 text-hover-primary">Choice Accountants</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<span class="svg-icon">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
			</svg>
		</span>
	</div>

	<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
	<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
	<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
	<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
	<script src="{{asset('assets/js/custom/widgets.js')}}"></script>

	<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
	<script src="{{asset('assets/summernote/summernote-bs5.js')}}"></script>


	@section('scripts')
	@show
</body>

</html>