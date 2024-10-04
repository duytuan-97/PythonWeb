<div id="kt_app_header" class="app-header">
    <!--begin::Header container-->
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
        <!--begin::Sidebar mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
            @include('theme.header.sidebar-mobile')
        </div>
        <!--end::Sidebar mobile toggle-->
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="../../demo1/dist/index.html" class="d-lg-none">
                <img alt="Logo" src="{{ asset('./assets/media/logos/default-small.svg') }}" class="h-30px" />
            </a>
        </div>
        <!--end::Mobile logo-->
        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}" class="page-title d-flex flex-column justify-content-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">@yield('title','Extended')</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
                <!--begin::Search-->
                <div class="app-navbar-item align-items-stretch ms-1 ms-md-3">
                    <!--begin::Search-->
                    <div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                        @include('theme.header.search')
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Search-->
                <!--begin::Activities-->
                <div class="app-navbar-item ms-1 ms-md-3">
                    <!--begin::Drawer toggle-->
                    @include('theme.header.drawer-toggle')
                    <!--end::Drawer toggle-->
                </div>
                <!--end::Activities-->
                <!--begin::Notifications-->
                <div class="app-navbar-item ms-1 ms-md-3">
                    @include('theme.header.notification')
                </div>
                <!--end::Notifications-->
                <!--begin::Chat-->
                {{-- <div class="app-navbar-item ms-1 ms-md-3">
                    @include('theme.header.chat')
                </div> --}}
                <!--end::Chat-->
                <!--begin::My apps links-->
                <div class="app-navbar-item ms-1 ms-md-3">
                    @include('theme.header.my-app')
                </div>
                <!--end::My apps links-->
                <!--begin::Theme mode-->
                <div class="app-navbar-item ms-1 ms-md-3">
                    @include('theme.header.theme-mode')
                </div>
                <!--end::Theme mode-->
                <!--begin::User menu-->
                <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                    @include('theme.header.user-menu')
                </div>
                <!--end::User menu-->
                <!--begin::Header menu toggle-->
                <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
                    @include('theme.header.menu-toggle')
                </div>
                <!--end::Header menu toggle-->
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
