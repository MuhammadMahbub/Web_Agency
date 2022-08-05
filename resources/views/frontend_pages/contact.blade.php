@extends('frontend_master.frontend_master')

@section('frontend_title', 'Contact')

@section('frontend_content')

@section('ContactActive')
active
@endsection

@include('frontend_pages.reuse_pages.frontend_toster_message')

<section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" style="margin-top: 120px">
                <h1>
                    {{ titlesettings()->contact_title }}
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('root') }}">Home</a>
                    </li>

                    <li class="breadcrumb-item active">
                        {{ titlesettings()->contact_title }}
                    </li>
                </ol>
                <div class="divider-15 d-none d-xl-block"></div>
            </div>
        </div>
    </div>
</section>


<section class="ls s-pt-30 s-pb-100 s-pb-md-130 s-py-lg-100 contact2">
    <div class="divider-15 d-none d-xl-block"></div>
    <div class="container">

        @include('frontend_pages.reuse_pages.contact_block')

        <div class="divider-60 d-none d-xl-block"></div>

        @include('frontend_pages.reuse_pages.contact_form');

    </div>
</section>
<section class="about-map ms page_map" data-draggable="false" data-scrollwheel="false">

    <div class="marker">
        <div class="marker-address">2231 Sycamore, Green Bay, WI 54304</div>
        <div class="marker-description">

            <ul class="list-unstyled">
                <li>
                    <span class="icon-inline">
                        <span class="icon-styled color-main">
                            <i class="fa fa-map-marker"></i>
                        </span>

                        <span>
                            2231 Sycamore, Green Bay, WI 54304
                        </span>
                    </span>
                </li>

                <li>
                    <span class="icon-inline">
                        <span class="icon-styled color-main">
                            <i class="fa fa-phone"></i>
                        </span>

                        <span>
                            1-800-123-4567
                        </span>
                    </span>
                </li>
                <li>
                    <span class="icon-inline">
                        <span class="icon-styled color-main">
                            <i class="fa fa-envelope"></i>
                        </span>

                        <span>
                            DotCreative@example.com
                        </span>
                    </span>
                </li>
            </ul>
        </div>

        <img class="marker-icon" src="images/map_marker_icon.png" alt="">
    </div>
    <!-- .marker -->

</section>

@endsection
