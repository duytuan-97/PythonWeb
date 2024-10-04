{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}

@extends('layouts.metronic.guest')
@section('Card')
<form class="form w-100" d="kt_new_password_form" method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $request->route('token') }}">
    <!--begin::Heading-->
    <div class="text-center mb-10">
        <!--begin::Title-->
        <h1 class="text-dark fw-bolder mb-3">Setup New Password</h1>
        <!--end::Title-->
        <!--begin::Link-->
        <div class="text-gray-500 fw-semibold fs-6">Have you already reset the password ?
        <a href="{{route('login')}}" class="link-primary fw-bold">Sign in</a></div>
        <!--end::Link-->
    </div>
    <!--begin::Heading-->
    <div class="fv-row mb-8">
        <input type="text" placeholder="Email" name="email":value="old('email', $request->email)" class="form-control bg-transparent"/>
    </div>
    <!--begin::Input group-->
    <div class="fv-row mb-8" data-kt-password-meter="true">
        <!--begin::Wrapper-->
        <div class="mb-1">
            <!--begin::Input wrapper-->
            <div class="position-relative mb-3">
                <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" />
                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                    <i class="bi bi-eye-slash fs-2"></i>
                    <i class="bi bi-eye fs-2 d-none"></i>
                </span>
            </div>
            <!--end::Input wrapper-->
            <!--begin::Meter-->
            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
            </div>
            <!--end::Meter-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Hint-->
        <div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
        <!--end::Hint-->
    </div>
    <!--end::Input group=-->
    <!--end::Input group=-->
    <div class="fv-row mb-8">
        <!--begin::Repeat Password-->
        <input type="password" placeholder="Repeat Password" name="password_confirmation" class="form-control bg-transparent" />
        <!--end::Repeat Password-->
    </div>
    <!--end::Input group=-->
    <!--begin::Input group=-->
    <div class="fv-row mb-8">
        <label class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="toc" value="1" />
            <span class="form-check-label fw-semibold text-gray-700 fs-6 ms-1">I Agree &
            <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
        </label>
    </div>
    <!--end::Input group=-->
    <!--begin::Action-->
    <div class="d-grid mb-10">
        <button type="submit" id="kt_new_password_submit" class="btn btn-primary">
            <!--begin::Indicator label-->
            <span class="indicator-label">Submit</span>
            <!--end::Indicator label-->
            <!--begin::Indicator progress-->
            <span class="indicator-progress">Please wait...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            <!--end::Indicator progress-->
        </button>
    </div>
    <!--end::Action-->
</form>
@endsection
