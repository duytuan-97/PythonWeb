{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                @error('name')
                    <span class="invalid-feedlback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                @error('email')
                    <span class="invalid-feedlback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                @error('password')
                    <span class="invalid-feedlback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                @error('password_confirmation')
                    <span class="invalid-feedlback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>



            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}

@extends('layouts.metronic.guest')
@section('Card')
	<form class="form w-100" id="kt_sign_up_form" method="POST" action="{{ route('register') }}">
		@csrf
		<div class="text-center mb-11">
			<h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
		</div>
        <div class="fv-row mb-8">
			<input type="text" placeholder="Name" name="name" class="form-control bg-transparent" />
		</div>
		<div class="fv-row mb-8">
			<input type="text" placeholder="Email" name="email" class="form-control bg-transparent" />
		</div>
		<div class="fv-row mb-8" data-kt-password-meter="true">
			<div class="mb-1">
				<div class="position-relative mb-3">
					<input class="form-control bg-transparent" type="password" placeholder="Password" name="password"/>
					<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
						<i class="bi bi-eye-slash fs-2"></i>
						<i class="bi bi-eye fs-2 d-none"></i>
					</span>
				</div>
				<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
					<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
					<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
					<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
					<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
				</div>
			</div>
			<div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
		</div>
		<div class="fv-row mb-8">
			<input placeholder="Repeat Password" name="password_confirmation" type="password" class="form-control bg-transparent" />
		</div>
		<div class="fv-row mb-8">
			<label class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" name="toc" value="1" />
				<span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the
				<a href="#" class="ms-1 link-primary">Terms</a></span>
			</label>
		</div>
		<div class="d-grid mb-10">
			<button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
				<span class="indicator-label">Sign up</span>
				<span class="indicator-progress">Please wait...
				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
			</button>
		</div>
		<div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account?
		<a href="{{route('login')}}" class="link-primary fw-semibold">Sign in</a></div>
	</form>
@endsection
