{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
@extends('common.guest-layout')

@section('content')
	<!--begin::Wrapper-->
	<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
		<!--begin::Form-->
		<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{ route('login') }}">
			@csrf
			<!--begin::Heading-->
			<div class="text-center mb-10">
				<!--begin::Title-->
				<h1 class="text-dark mb-3">Giriş Yap</h1>
				<!--end::Title-->
				<!--begin::Link-->
				{{-- <div class="text-gray-400 fw-bold fs-4">New Here?
				<a href="../../demo9/dist/authentication/flows/basic/sign-up.html" class="link-primary fw-bolder">Create an Account</a></div> --}}
				<!--end::Link-->
			</div>
			<!--begin::Heading-->
			<!--begin::Input group-->
			<div class="fv-row mb-10">
				<!--begin::Label-->
				<label class="form-label fs-6 fw-bolder text-dark">Email</label>
				<!--end::Label-->
				<!--begin::Input-->
				<input
					class="form-control form-control-lg form-control-solid"
					type="email" name="email" :value="old('email')"
					required autofocus autocomplete="off"/>
				<!--end::Input-->
			</div>
			<!--end::Input group-->
			<!--begin::Input group-->
			<div class="fv-row mb-10">
				<!--begin::Wrapper-->
				<div class="d-flex flex-stack mb-2">
					<!--begin::Label-->
					<label class="form-label fw-bolder text-dark fs-6 mb-0">Parola</label>
					<!--end::Label-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Input-->
				<input
					class="form-control form-control-lg form-control-solid"
					type="password"
					name="password"
					autocomplete="current-password"
					required />
				<!--end::Input-->
			</div>
			<!--end::Input group-->
			<!--begin::Actions-->
			<div class="text-center">
				<!--begin::Submit button-->
				<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
					<span class="indicator-label">Giriş Yap</span>
					<span class="indicator-progress">Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				</button>
				<!--end::Submit button-->
			</div>
			<!--end::Actions-->
		</form>
		<!--end::Form-->
	</div>
	<!--end::Wrapper-->
@endsection
