{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}


@extends('layouts.metronic.guest')
@section('Card')
<!--begin::Form-->
<form class="form w-100" id="kt_password_reset_form" method="POST" action="{{ route('password.email') }}">
    @csrf
    <!--begin::Heading-->
    <div class="text-center mb-10">
        <!--begin::Title-->
        <h1 class="text-dark fw-bolder mb-3">Forgot Password ?</h1>
        <!--end::Title-->
        <!--begin::Link-->
        <div class="text-gray-500 fw-semibold fs-6">Enter your email to reset your password.</div>
        <!--end::Link-->
    </div>
    <!--begin::Heading-->
    <!--begin::Input group=-->
    <div class="fv-row mb-8">
        <!--begin::Email-->
        <input type="text" placeholder="Email" name="email" class="form-control bg-transparent" />
        <!--end::Email-->
    </div>
    <!--begin::Actions-->
    <div class="d-flex flex-wrap justify-content-center pb-lg-0">
        <button type="submit" id="kt_password_reset_submit" class="btn btn-primary me-4">
            <!--begin::Indicator label-->
            <span class="indicator-label">Submit</span>
            <!--end::Indicator label-->
            <!--begin::Indicator progress-->
            <span class="indicator-progress">Please wait...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            <!--end::Indicator progress-->
        </button>
        <a href="{{route('login')}}" class="btn btn-light">Cancel</a>
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->
@endsection
