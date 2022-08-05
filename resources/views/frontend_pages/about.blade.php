@extends('frontend_master.frontend_master')

@section('frontend_title', 'about')

@section('AboutActive')
active
@endsection

@section('frontend_content')

    <section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top: 120px">
                    <h1>{{ titlesettings()->about_title }}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('root') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            {{ titlesettings()->about_title }}
                        </li>

                    </ol>
                    <div class="divider-15 d-none d-xl-block"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="s-pt-30 s-pt-lg-50 ls about">
        <div class="divider-60 d-none d-xl-block"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="main-content text-center">
                        <h5>
                            {{ $about_header->heading }}
                        </h5>
                        <i class="rt-icon2-user"></i>
                        <p>
                            {{ $about_header->name }}
                            <span class="link-a">
                                <a href="#">{{ $about_header->post }}</a>
                            </span>
                        </p>

                        <div class="divider-10 d-none d-xl-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s-pt-0  s-pb-30 s-pt-lg-30 s-pb-lg-75 ls about-icon teaser-contact-icon">
        <div class="divider-10 d-none d-xl-block"></div>
        <div class="container">
            <div class="row c-mt-50 c-mt-lg-0">
                <div class="col-lg-4 text-center call-icon">
                    <div class="border-icon">
                        <div class="teaser-icon">
                            <img style="height: 64px" src="{{ asset('uploads/aboutus') }}/{{ $about_us->image1 }}" alt="">
                        </div>
                    </div>
                    <h6>
                        {{ $about_us->title1 }}
                    </h6>
                    <div class="icon-content">
                        <p>
                            {{ \Str::limit($about_us->description1,500 )}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 text-center write-icon">
                    <div class="divider-30 d-none d-xl-block"></div>
                    <div class="border-icon">
                        <div class="teaser-icon">
                            <img style="height: 64px" src="{{ asset('uploads/aboutus') }}/{{ $about_us->image2 }}" alt="">
                        </div>
                    </div>
                    <div class="icon-content">
                        <h6>
                            {{ $about_us->title2 }}
                        </h6>
                        <p>
                            {{ \Str::limit($about_us->description2,500 )}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 text-center visit-icon">
                    <div class="border-icon">
                        <div class="teaser-icon">
                            <img style="height: 64px" src="{{ asset('uploads/aboutus') }}/{{ $about_us->image3 }}" alt="">
                        </div>
                    </div>
                    <div class="icon-content">
                        <h6>
                            {{ $about_us->title3 }}
                        </h6>
                        <p>
                            {{ \Str::limit($about_us->description3,500 )}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @if ($gallery_photo->count() > 0)
    <section class="s-pt-20 s-pt-lg-30 gallery-carousel main-gallery container-px-0">
        <div class="container-fluid">
            <div class="divider-5 d-none d-xl-block"></div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel gallery-owl-nav" data-autoplay="false" data-responsive-lg="5" data-responsive-md="3" data-responsive-sm="3" data-responsive-xs="2" data-nav="true" data-dots="false" data-filters=".gallery-filters" data-margin="0" data-loop="true">
                        @foreach ($gallery_photo as $item)
                        <div class="vertical-item item-gallery content-absolute text-center ds ">
                            <div class="item-media" style="height: 200px">
                                <img style="height: 100%" src="{{ asset('uploads/gallery_photos') }}/{{ $item->gallery_photo }}" alt="">
                                <div class="media-links">

                                </div>
                            </div>
                            <div class="item-content">
                                <h6>
                                    <a class="small-text" href="{{ route('all_galleries') }}">{{  $item->relationtoname->gallery_name  }}</a>
                                </h6>
                                <h6>
                                    <a href="{{ route('all_galleries') }}">{{ $item->gallery_title }}</a>
                                </h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- .owl-carousel-->
                </div>
            </div>
        </div>
    </section>
    @endif

    <section class="page_slider">

        @include('my.parts.back_img')

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

            <img class="marker-icon" src="{{ asset('frontend_assets/images') }}/map_marker_icon.png" alt="">
        </div>
        <!-- .marker -->

    </section>
@endsection
