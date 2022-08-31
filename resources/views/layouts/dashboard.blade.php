<!DOCTYPE html>
<html class="loaded {{ themesettings(Auth::id())->theme }}" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Digital Tech">
    <link rel="shortcut icon" href="{{ asset('uploads/images/generalSetting/') }}/{{ generalSettings()->favicon }}" type="image/x-icon">
    {{-- <link rel="apple-touch-icon" href="{{ asset('uploads/generalSettings') }}/{{ generalSettings()->favicon }}"> --}}

    <title>{{ config('app.name') }} |@yield('title')</title>


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/charts/chart-apex.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('dashboard_assets/app-assets/vendors/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/forms/pickers/form-pickadate.css') }}">
    <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

    @yield('vendor.css')

    <script src="https://unpkg.com/@yaireo/tagify"></script>
    <script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/app-assets/css/themes/semi-dark-layout.css') }}">

    @yield('theme.css')

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/pages/app-invoice-list.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/trix-editor/trix.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />

    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        .example::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .example {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .apexcharts-toolbar{
            display: none !important;
        }

    </style>

    <style>
        trix-button-group.trix-button-group--file-tools {
            display: none;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .example::-webkit-scrollbar {
            display: none !important;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .example {
            -ms-overflow-style: none !important;
            /* IE and Edge */
            scrollbar-width: none !important;
            /* Firefox */
        }

        .trix-button-group.trix-button-group--file-tools {
            display: none;
        }


        .spinner-main-grow-style{
            width: 14px;
            height: 14px;
            background: #000;
            border: 1px solid white;
        }

        .main-menu.menu-light .navigation > li.open:not(.menu-item-closing) > a, .main-menu.menu-light .navigation > li.sidebar-group-active > a{
            color: #d5d5d7;
            background: #181818;
            border-radius: 6px;
        }

    </style>

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->

    @yield('css')

    <!-- END: Custom CSS-->


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body
    class="vertical-layout vertical-menu-modern  navbar-floating footer-static menu-{{ themesettings(Auth::id())->nav }}"
    data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i
                                class="ficon" data-feather="menu"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                @php
                    $locale = \App::getLocale();
                @endphp
                <li class="nav-item dropdown dropdown-language">
                    @if ($locale == 'fr')
                        <a class="nav-link dropdown-toggle" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-fr"></i><span class="selected-language">{{ __('French') }}</span></a>
                    @else
                        <a class="nav-link dropdown-toggle" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">{{ __('English') }}</span></a>
                    @endif
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag">
                        <a class="dropdown-item" href="{{ route('locale', 'en') }}" data-language="en"><i class="flag-icon flag-icon-us"></i> {{ __('English') }}<a>
                        <a class="dropdown-item" href="{{ route('locale', 'fr') }}" data-language="fr"><i class="flag-icon flag-icon-fr"></i> {{ __('French') }}</a>
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a id="dark" class="nav-link nav-link-style">
                        <i class="ficon" data-feather="moon"></i>
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-notification mr-25 d-none">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="dropdown">
                        <i class="ficon" data-feather="bell"></i>
                        <span class="badge badge-pill badge-danger badge-up">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 mr-auto">{{ __('Notifications') }}</h4>
                                <div class="badge badge-pill badge-light-primary"></div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list">
                            <a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar">
                                            <img src="{{ asset('dashboard_assets/app-assets/images/portrait/small/avatar-s-15.jpg') }}"
                                                alt="avatar" width="32" height="32">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="media d-flex align-items-center">
                                <h6 class="font-weight-bolder mr-auto mb-0">{{ __('System Notifications') }}</h6>
                                <div class="custom-control custom-control-primary custom-switch">
                                    <input class="custom-control-input" id="systemNotification" type="checkbox"
                                        checked="">
                                    <label class="custom-control-label" for="systemNotification"></label>
                                </div>
                            </div>
                            <a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">
                                            <span class="font-weight-bolder">{{ __('Server down') }}</span>&nbsp;{{ __('registered') }}
                                        </p>
                                        <small class="notification-text"> {{ __('USA Server is down due to hight CPU
                                            usage') }}</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block"
                                href="javascript:void(0)">{{ __('Read all notifications') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name font-weight-bolder">{{ ucfirst(Auth::user()->name) }}</span>
                            <span class="user-status">{{ __('Admin') }}</span>
                        </div>
                        <span class="avatar">
                            <img class="round" src="{{ Auth::user()->profile_photo_url }}"
                                alt="Profile Photo" height="40" width="40">
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="{{ url('user/profile') }}"><i class="mr-50"
                                data-feather="user"></i> {{ __('Profile') }}</a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();"><i class="mr-50"
                                    data-feather="power"></i>{{ __('Logout') }}</a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    {{-- <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center">
            <a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="../../../app-assets/images/icons/xls.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small
                            class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a>
        </li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between">
            <a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start">
                    <span class="mr-75" data-feather="alert-circle"></span>
                    <span>No results found.</span>
                </div>
            </a>
        </li>
    </ul> --}}
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="{{ route('dashboard') }}">
                        <span>
                            <img src="{{ asset('uploads/images/generalSetting/') }}/{{ generalSettings()->site_logo }}"
                                style="max-width: 130px" alt="Logo" height="30">
                        </span>
                        {{-- <h2 class="brand-text">Dgtaltech</h2> --}}
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a id="toggle" class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                        <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="{{ url('/') }}" target="_blank">
                        <i data-feather='eye'></i>
                        <span class="menu-title text-truncate" data-i18n="Dashboards">{{ __('View Website') }}</span>
                    </a>
                </li>
                <li class="@yield('dashboardActive')">
                    <a class="d-flex align-items-center" href="{{ route('dashboard') }}">
                        {{-- <i data-feather='database'></i> --}}
                        @yield('dashboardSpinner')
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span class="menu-title text-truncate" data-i18n="Email">{{ __('Dashboard') }}</span>
                    </a>
                </li>

                <li class="navigation-header"><span data-i18n="Apps &amp; Pages">{{ __('Apps') }} &amp; {{ __('Pages') }}</span><i
                        data-feather="more-horizontal"></i>
                </li>



                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="#">
                        {{-- <i data-feather='user-check'></i> --}}
                        @yield('userSpinner')
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        {{-- <i class="fa fa-user sidenav-main__icon"></i> --}}
                        <span class="menu-title text-truncate" data-i18n="Invoice">{{ __('Users') }}</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('usersList')">
                            <a class="d-flex align-items-center" href="{{ route('users.index') }}">
                                <i data-feather="circle" class="@yield('userSpinnerList')"></i>
                                <span class="menu-item text-truncate" data-i18n="List">{{ __('List') }}</span>
                            </a>
                        </li>
                        <li class="@yield('usersCreate')">
                            <a class="d-flex align-items-center" href="{{ route('users.create') }}">
                                <i data-feather="circle" class="@yield('userSpinnerCreate')"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">{{ __('Create') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- i am here --}}

                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="#">
                        @yield('homeSpinner')
                        <i data-feather='home'></i>
                        <span class="menu-title text-truncate" data-i18n="Menu Levels">{{ __('Home') }}</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a class="d-flex align-items-center" href="#">
                                @yield('bannerSpinner')
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="Second Level">{{ __('Banners') }}</span>
                            </a>
                            <ul class="menu-content">
                                <li class="@yield('bannerList')">
                                    <a class="d-flex align-items-center" href="{{ route('banner.index') }}">
                                        <i data-feather="circle" class="@yield('bannerSpinnerList')"></i>
                                        <span class="menu-item text-truncate" data-i18n="List">{{ __('List') }}</span>
                                    </a>
                                </li>
                                <li class="@yield('bannerCreate')">
                                    <a class="d-flex align-items-center" href="{{ route('banner.create') }}">
                                        <i data-feather="circle" class="@yield('bannerSpinnerCreate')"></i>
                                        <span class="menu-item text-truncate" data-i18n="Add">{{ __("Create") }}</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="@yield('companyList')">
                            <a class="d-flex align-items-center" href="{{ route('company.index') }}">
                                @yield('homeSection2Spinner')
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">{{ __('Company') }}</span>
                            </a>
                        </li>

                        <li>
                            <a class="d-flex align-items-center" href="#">
                                @yield('processSpinner')
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="Second Level">{{ __('Market Planning') }}</span>
                            </a>
                            <ul class="menu-content">
                                <li class="@yield('processList')">
                                    <a class="d-flex align-items-center" href="{{ route('process.index') }}">
                                        <i data-feather='aperture' class="@yield('processSpinnerList')"></i>
                                        <span class="menu-title text-truncate">{{ __('List') }}</span>
                                    </a>
                                </li>
                                <li class="@yield('processCreate')">
                                    <a class="d-flex align-items-center" href="{{ route('process.create') }}">
                                        <i data-feather="circle" class="@yield('processSpinnerCreate')"></i>
                                        <span class="menu-item text-truncate" data-i18n="Add">{{ __("Create") }}</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="@yield('marketList')">
                            <a class="d-flex align-items-center" href="{{ route('m_stretegy.index') }}">
                                @yield('marketSpinner')
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">{{ __('B2B Marketing') }}</span>
                            </a>
                        </li>

                        <li class=" nav-item @yield('buyNowList')">
                            <a class="d-flex align-items-center" href="{{ route('buyNow.index') }}">
                                @yield('buySpinner')
                                <i data-feather='circle'></i>
                                <span class="menu-title text-truncate" data-i18n="Invoice">{{ __('Modern Marketing') }}</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="d-flex align-items-center" href="#">
                                @yield('reviewSpinner')
                                <i data-feather='circle'></i>
                                <span class="menu-title text-truncate" data-i18n="Invoice">{{ __('Review') }}</span>
                            </a>
                            <ul class="menu-content">
                                <li class="@yield('reviewList')">
                                    <a class="d-flex align-items-center" href="{{ route('review.index') }}">
                                        <i data-feather="circle" class="@yield('reviewSpinnerList')"></i>
                                        <span class="menu-item text-truncate" data-i18n="List">{{ __('List') }}</span>
                                    </a>
                                </li>
                                <li class="@yield('reviewCreate')">
                                    <a class="d-flex align-items-center" href="{{ route('review.create') }}">
                                        <i data-feather="circle" class="@yield('reviewSpinnerCreate')"></i>
                                        <span class="menu-item text-truncate" data-i18n="Add">{{ __('Create') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class=" nav-item @yield('startProjectList')">
                            <a class="d-flex align-items-center" href="{{ route('startProject.index') }}">
                                @yield('projectSpinner')
                                <i data-feather='circle'></i>
                                <span class="menu-title text-truncate" data-i18n="Invoice">{{ __('Start Project') }}</span>
                            </a>
                        </li>

                    </ul>
                </li>

                {{-- <li class="nav-item @yield('process')">
                    <a class="d-flex align-items-center" href="{{ route('process.index') }}">
                        <i data-feather='aperture'></i>
                        <span class="menu-title text-truncate">Process</span>
                    </a>
                </li> --}}
                {{-- i am here end --}}

                <li class="nav-item">
                    <a class="d-flex align-items-center" href="#">
                        @yield('aboutSpinner')
                        <i data-feather='twitch'></i>

                        <span class="menu-title text-truncate" data-i18n="Invoice">{{ __('About') }}</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('about_header')">
                            <a class="d-flex align-items-center" href="{{ route('about_header') }}">
                                <i data-feather="circle" class="@yield('aboutHeader')"></i>
                                <span class="menu-item text-truncate" data-i18n="List">{{ __('Header Section') }}</span>
                            </a>
                        </li>
                        <li class="@yield('about_us')">
                            <a class="d-flex align-items-center" href="{{ route('about_us') }}">
                                <i data-feather="circle" class="@yield('aboutUs')"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">{{ __('About Us') }}</span>
                            </a>
                        </li>
                        <li class="@yield('about_back_img')">
                            <a class="d-flex align-items-center" href="{{ route('about_back_img') }}">
                                <i data-feather="circle" class="@yield('aboutFooter')"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">{{ __('Team Section') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>


                {{-- ===== Starting Raju ==== --}}
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="#">
                        {{-- <i data-feather='user-check'></i> --}}
                        @yield('serviceSpinner')
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag sidenav-main__icon"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                        <span class="menu-title text-truncate" data-i18n="Invoice">{{ __('Services') }}</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('serviceList')">
                            <a class="d-flex align-items-center" href="{{ route('service.index') }}">
                                {{-- @yield('serviceSpinner') --}}
                                <i data-feather="circle" class="@yield('serviceSpinnerList')"></i>
                                <span class="menu-item text-truncate" data-i18n="List">{{ __("List") }}</span>
                            </a>
                        </li>
                        <li class="@yield('serviceCreate')">
                            <a class="d-flex align-items-center" href="{{ route('service.create') }}">
                                <i data-feather="circle" class="@yield('serviceSpinnerCreate')"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">{{ __('Create') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="d-flex align-items-center" href="#">
                        @yield('blogSpinner')
                        <i data-feather='file-text'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">{{ __('Blog') }}</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('blog')">
                            <a class="d-flex align-items-center" href="{{ route('blog.index') }}">
                                <i data-feather="circle" class="@yield('blogSpinnerList')"></i>
                                <span class="menu-item text-truncate" data-i18n="List">{{ __('Blog') }}</span>
                            </a>
                        </li>
                        <li class="@yield('blogcategory')">
                            <a class="d-flex align-items-center" href="{{ route('blogcategory.index') }}">
                                <i data-feather="circle" class="@yield('blogCategoryList')"></i>
                                <span class="menu-item text-truncate" data-i18n="List">{{__('Category')}}</span>
                            </a>
                        </li>
                        <li class="@yield('blogcomment')">
                            <a class="d-flex align-items-center" href="{{ route('blogcomment.index') }}">
                                <i data-feather="circle" class="@yield('blogCommentList')"></i>
                                <span class="menu-item text-truncate" data-i18n="List">{{ __('Comments') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="#">
                        {{-- <i data-feather='user-check'></i> --}}
                        @yield('teamSpinner')
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span class="menu-title text-truncate" data-i18n="Invoice">{{ __('Team') }}</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('TeamlList')">
                            <a class="d-flex align-items-center" href="{{ route('team.index') }}">
                                <i data-feather="circle" class="@yield('teamSpinnerList')"></i>
                                <span class="menu-item text-truncate" data-i18n="List">{{ __('List') }}</span>
                            </a>
                        </li>
                        <li class="@yield('TeamCreate')">
                            <a class="d-flex align-items-center" href="{{ route('team.create') }}">
                                <i data-feather="circle" class="@yield('teamSpinnerCreate')"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">{{ __('Create') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="#">
                        {{-- <i data-feather='user-check'></i> --}}
                        @yield('testimonialSpinner')

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-film sidenav-main__icon"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17" x2="7" y2="17"></line><line x1="17" y1="17" x2="22" y2="17"></line><line x1="17" y1="7" x2="22" y2="7"></line></svg>
                        <span class="menu-title text-truncate" data-i18n="Invoice">{{ __('Testimonials') }}</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('TestimonialList')">
                            <a class="d-flex align-items-center" href="{{ route('testimonial.index') }}">
                                <i data-feather="circle" class="@yield('testimonialSpinnerList')"></i>
                                <span class="menu-item text-truncate" data-i18n="List">{{ __('List') }}</span>
                            </a>
                        </li>
                        <li class="@yield('TestimonialCreate')">
                            <a class="d-flex align-items-center" href="{{ route('testimonial.create') }}">
                                <i data-feather="circle" class="@yield('testimonialSpinnerCreate')"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">{{ __('Create') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="#">
                        {{-- <i data-feather='user-check'></i> --}}
                        @yield('faqSpinner')
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg>
                        <span class="menu-title text-truncate" data-i18n="Invoice">{{ __('Faq') }}</span>
                    </a>

                    <ul class="menu-content">
                        <li class="@yield('FaqTopCreate')">
                            <a class="d-flex align-items-center" href="{{ route('faq_top.create') }}">
                                <i data-feather="circle" class="@yield('faqSpinnerTopCreate')"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">{{ __('Faq Top Create') }}</span>
                            </a>
                        </li>

                        <li class="@yield('FaqUnanserCreate')">
                            <a class="d-flex align-items-center" href="{{ route('faq_unanswer.create') }}">
                                <i data-feather="circle" class="@yield('faqSpinnerBottomCreate')"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">{{ __('Faq Bottom Create') }}</span>
                            </a>
                        </li>

                        <li class="@yield('FaqList')">
                            <a class="d-flex align-items-center" href="{{ route('faq.index') }}">
                                <i data-feather="circle" class="@yield('faqSpinnerList')"></i>
                                <span class="menu-item text-truncate" data-i18n="List">{{ __('List') }}</span>
                            </a>
                        </li>
                        <li class="@yield('FaqCreate')">
                            <a class="d-flex align-items-center" href="{{ route('faq.create') }}">
                                <i data-feather="circle" class="@yield('faqSpinnerCreate')"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">{{ __('Create') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="d-flex align-items-center" href="#">
                        @yield('featuresSpinner')
                        <i data-feather='book-open'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">{{ __('Features') }}</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('featureList')">
                            <a class="d-flex align-items-center" href="{{ route('feature.index') }}">
                                <i data-feather="circle" class="@yield('featuresSpinnerList')"></i>

                                <span class="menu-item text-truncate" data-i18n="List">{{ __('List') }}</span>
                            </a>
                        </li>
                        <li class="@yield('featureCreate')">
                            <a class="d-flex align-items-center" href="{{ route('feature.create') }}">
                                <i data-feather="circle" class="@yield('featuresSpinnerCreate')"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">{{ __("Create") }}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Gallery --}}
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="#">
                        @yield('gallerySpinner')
                        <i data-feather='music'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">{{ __('Gallery') }}</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('gallery_name')">
                            <a class="d-flex align-items-center" href="{{ route('gallery_name.index') }}">
                                <i data-feather="circle" class="@yield('gallery_nameSpinnerCreate')"></i>
                                <span class="menu-item text-truncate" data-i18n="List">{{ __('Gallery Name') }}</span>
                            </a>
                        </li>
                        <li class="@yield('gallery')">
                            <a class="d-flex align-items-center" href="{{ route('gallery.index') }}">
                                <i data-feather="circle" class="@yield('gallerySpinnerList')"></i>
                                <span class="menu-item text-truncate" data-i18n="List">{{ __('Gallery') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @yield('ContactUsCreate')">
                    <a class="d-flex align-items-center" href="{{ route('contact_us.create') }}">
                        <i data-feather="circle" class="@yield('contactUsSpinnerCreate')"></i>
                        <span class="menu-item text-truncate" data-i18n="Add">{{ __('Contact us') }}</span>
                    </a>
                </li>

                {{-- <li class=" nav-item">
                    <a class="d-flex align-items-center" href="#">
                        @yield('contactUsSpinner')
                        <i data-feather='phone'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">{{ __('Gallery') }}</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('ContactUsCreate')">
                            <a class="d-flex align-items-center" href="{{ route('contact_us.create') }}">
                                <i data-feather="circle" class="@yield('contactUsSpinnerCreate')"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">{{ __('Create') }}</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}




                <li class="@yield('ContactMessageList')">
                    <a class="d-flex align-items-center" href="{{ route('contact_us.index') }}">
                        {{-- <i data-feather="circle"></i> --}}
                        {{-- <span style="width:20px; height:20px; background:red; border-radius:50%" class="spinner-border text-info spinner-grow"></span> --}}

                        @yield('contactMessageSpinner')

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <span class="menu-item text-truncate" data-i18n="List">{{ __("Contact Message") }}</span>
                    </a>
                </li>

                {{-- ======= Ending Raju ====== --}}



                {{-- Site Settings --}}
                <li class="navigation-header">
                    <span data-i18n="Apps &amp; Pages">{{ __('Site Settings') }}</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item @yield('generalSettings')">

                    <a class="d-flex align-items-center" href="{{ route('generalSettings.index') }}">
                        @yield('generalSettingSpinner')
                        <i data-feather='settings'></i>
                        <span class="menu-title text-truncate">{{ __('General Settings') }}</span>
                    </a>

                </li>

                <li class="nav-item @yield('titlelSettings')">

                    <a class="d-flex align-items-center" href="{{ route('titleSettings.index') }}">
                        @yield('titleSettingSpinner')
                        <i data-feather='settings'></i>
                        <span class="menu-title text-truncate">{{ __('Title Settings') }}</span>
                    </a>
                </li>

                {{-- Raju --}}
                <li class="nav-item @yield('colorSettings')">
                    <a class="d-flex align-items-center" href="{{ route('colorSettings.index') }}">
                        @yield('ColorSettingSpinner')
                        <i data-feather='settings'></i>
                        <span class="menu-title text-truncate">{{ __('Color Settings') }}</span>
                    </a>
                </li>
                {{-- Raju --}}


                <li class="nav-item @yield('socialurls')">
                    <a class="d-flex align-items-center" href="{{ route('socialurls.index') }}">
                        <i data-feather='settings'></i>
                        <span class="menu-title text-truncate">{{ __('Social Urls') }}</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            @yield('breadcrumb')
                            {{-- <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Layouts</a>
                                    </li>
                                </ol>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block">
                    <div class="form-group breadcrumb-right">

                    </div>
                </div>
            </div>
            <div class="content-body">
                {{-- Content Start From Here --}}
                @yield('content')
                {{-- Content End Here --}}
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0">
            <span class="float-md-left d-block d-md-inline-block mt-25">
                {{ generalsettings()->copyright }}
            </span>
        </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}">
    </script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}">
    </script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}">
    </script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}">
    </script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}">
    </script>
    <script src="{{ asset('dashboard_assets/app-assets/js/scripts/forms/form-validation.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/js/scripts/forms/form-select2.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/pickers/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/pickers/pickadate/legacy.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/js/scripts/forms/pickers/form-pickers.js') }}"></script>


    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->

    <script src="{{ asset('dashboard_assets/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->
    <!-- END: Page JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('dashboard_assets/app-assets/js/core/app-menu.js') }}"></script>
    {{-- <script src="{{ asset('dashboard_assets/app-assets/trix-editor/trix.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
    <!-- BEGIN: Page JS-->

    @yield('js')

    <script>
        $('#data_table').dataTable({
            "bProcessing": false,
            "sAutoWidth": false,
            "bDestroy": false,
            "bSort": true,
            "sPaginationType": "bootstrap", // full_numbers
            // "iDisplayStart ": 10,
            // "iDisplayLength": 10,
            "bPaginate": false, //hide/show pagination
            "bFilter": true, //hide/show Search bar
            "bInfo": false, // hide/show showing entries
        })
    </script>

    <script>
        $(document).ready(function() {
            $('#dark').click(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('theme.color') }}",
                    type: "GET",
                    success: function(data) {}
                })


            });
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#toggle').click(function() {

                // Ajax Setup
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('theme.toggle') }}",
                    type: "GET",
                    success: function(data) {}
                })


            });
        })
    </script>



    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

    <script>
        $(document).ready(function() {
            $('#data_table').DataTable();
        });
    </script>

</body>

<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.error('{{ $error }}');
        </script>
    @endforeach
@endif

@if (session()->get('danger'))
    <script>
        toastr.error('{{ session()->get('danger') }}');
    </script>
@endif

@if (session()->get('success'))
    <script>
        toastr.success('{{ session()->get('success') }}');
    </script>
@endif

<!-- END: Body-->

</html>
