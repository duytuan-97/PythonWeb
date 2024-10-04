<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.1.7
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../"/>
		<title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />

        <script>var hostUrl = "assets/";</script>
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="{{ asset('./assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('./assets/js/scripts.bundle.js') }}"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Custom Javascript(used for this page only)-->
        <script src="{{ asset('./assets/js/custom/authentication/sign-in/general.js') }}"></script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('assets/media/auth/bg4.jpg'); } [data-bs-theme="dark"] body { background-image: url('assets/media/auth/bg4-dark.jpg'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row flex-center">

				<!--begin::Body-->
				<div class="d-flex flex-center w-lg-50 p-10">
					<!--begin::Card-->
                    <div class="card rounded-3 w-md-550px">
    <!--begin::Card body-->
    <div class="card-body d-flex flex-column p-10 p-lg-20 pb-lg-10">
        <!--begin::Wrapper  pb-15 pb-lg-20-->
        <div class="d-flex flex-center flex-column-fluid">
            <!--begin::Form-->
					@yield('Card')
					<!--end::Card-->
                </div>
        <!--end::Wrapper-->
        <!--begin::Footer-->
        <div class="d-flex flex-stack">
            <!--begin::Languages-->
            <div class="me-10">
                <!--begin::Toggle-->
                <button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                    <img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="assets/media/flags/united-states.svg" alt="" />
                    <span data-kt-element="current-lang-name" class="me-1">English</span>
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                    <span class="svg-icon svg-icon-5 svg-icon-muted rotate-180 m-0">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
                <!--end::Toggle-->
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7" data-kt-menu="true" id="kt_auth_lang_menu">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                            <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
                            </span>
                            <span data-kt-element="lang-name">English</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                            <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
                            </span>
                            <span data-kt-element="lang-name">Spanish</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
                            <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
                            </span>
                            <span data-kt-element="lang-name">German</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
                            <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
                            </span>
                            <span data-kt-element="lang-name">Japanese</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
                            <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/france.svg" alt="" />
                            </span>
                            <span data-kt-element="lang-name">French</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Languages-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Card body-->
</div>
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
            <link rel="shortcut icon" href="{{ asset('./assets/media/logos/favicon.ico') }}" />
            <!--begin::Fonts(mandatory for all pages)-->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
            <!--end::Fonts-->
            <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
            <link href="{{ asset('./assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('./assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
