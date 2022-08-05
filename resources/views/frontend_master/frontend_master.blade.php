<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>{{ config('app.name') }} | @yield('frontend_title')</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="{{ asset('uploads/images/generalSetting/') }}/{{ generalSettings()->favicon }}" type="image/x-icon">

	<link rel="stylesheet" href="{{asset('frontend_assets/css')}}/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('frontend_assets/css')}}/animations.css">
	<link rel="stylesheet" href="{{asset('frontend_assets/css')}}/font-awesome.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	{{-- <link rel="stylesheet" href="{{asset('frontend_assets/css')}}/main.css" class="color-switcher-link"> --}}
	<script src="{{asset('frontend_assets/js')}}/vendor/modernizr-2.6.2.min.js"></script>

	@include('frontend_color_setting.css')

	@yield('custom_css')

	{{-- <!--[if lt IE 9]>
		<script src="{{asset('frontend_assets/js')}}/vendor/html5shiv.min.js"></script>
		<script src="{{asset('frontend_assets/js')}}/vendor/respond.min.js"></script>
		<script src="{{asset('frontend_assets/js')}}/vendor/jquery-1.12.4.min.js"></script>
	<![endif]--> --}}

</head>

    <!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

    <body>

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

    <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
		</div>
	</div>

    {{-- <div id="canvas">
		<div id="box_wrapper"> --}}

            @include('frontend_master.header')

            @yield('frontend_content')

            @include('frontend_master.footer')

        {{-- </div>
		<!-- eof #box_wrapper -->
	</div> --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="{{asset('frontend_assets/js')}}/compressed.js"></script>
	<script src="{{asset('frontend_assets/js')}}/main.js"></script>

    <script>
        $(document).ready(function () {
            $('#home_search').click(function (e) {

                $('#search_form').submit();
                // console.log('ok');
            });
        });
    </script>



	@yield('custom_js')


</body>

</html>
