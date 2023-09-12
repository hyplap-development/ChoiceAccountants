@extends('layouts.auth')

@section('title', 'Login')

@section('header')

@endsection

@section('content')

<div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
	<div class="w-md-400px">
		<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="" action="#">
			<div class="text-center mb-11">
				<h1 class="text-dark fw-bolder mb-3">Sign In</h1>
			</div>
			<!-- <div class="row g-3">
				<img alt="logo" src="{{asset('assets/media/logos/logo.png')}}">
			</div> -->
			<div class="fv-row mt-5" style="text-align: left;">
				<label class="required form-label fs-6 fw-bolder">Phone Number </label>
				<input type="text" placeholder="Phone Number" id="Login" name="login" autocomplete="off" class="form-control bg-transparent" maxlength="10" />
			</div>
			<div class="fv-row mt-5" style="text-align: left;">
				<label class="required form-label fs-6 fw-bolder">Password </label>
				<input type="password" placeholder="Password" id="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
			</div>
			<div class="d-grid mt-5">
				<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
					<span class="indicator-label">Sign In</span>
					<span class="indicator-progress">Please wait...
						<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				</button>
			</div>
		</form>
	</div>
</div>
@endsection

@section('footer')
<script src="{{asset('assets/js/custom/authentication/sign-in/general.js')}}"></script>
@endsection