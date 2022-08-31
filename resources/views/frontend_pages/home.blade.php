@extends('frontend_master.frontend_master')

@section('frontend_title')
    Accueil
@endsection


@section('HomeActive')
active
@endsection

@section('search_box')
    <form action="{{ route('search.blogs') }}" method="GET" id="search_form">
      {{-- @csrf --}}
        <div class="search-box">
            <input type="text" placeholder="Blog de recherche" name="search_value" class="search-text">
            <a class="search-btn" id="home_search">
                <i class="fa fa-search" ></i>
            </a>
        </div>
    </form>
@endsection

@section('frontend_content')

    <span class="toggle_menu_side header-slide">
        <span></span>
    </span>
    {{-- start --}}
    @if($banner->count() > 0)
    <section class="page_slider main_slider">
        <div class="flexslider" data-nav="true" data-dots="false">
            <ul class="slides">
                @foreach ($banner as $item)
                <li class="ds text-center slide2">
                    <span class="flexslider-overlay"></span>
                    <img src="{{ asset('uploads/banner/') }}/{{ $item->image }}" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 itro_slider">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer" data-animation="fadeIn">
                                            <h2 class="text-lowercase intro_before_featured_word">
                                            {{ $item->title_one }}
                                            </h2>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeIn">
                                            <h3 class="text-uppercase intro_featured_word">
                                                {{ $item->title_two }}
                                            </h3>
                                        </div>
                                        <div class="intro_layer" data-animation="pullDown">
                                            <p class="text-uppercase intro_after_featured_word">{{ $item->title_three }}</p>
                                        </div>
                                        <div class="intro_layer page-bottom" data-animation="expandUp">
                                            <a class="btn btn-maincolor" href="{{ $item->button_url }}">{{ $item->button_text }}</a>
                                        </div>
                                    </div>
                                    <!-- eof .intro_layers -->
                                </div>
                                <!-- eof .intro_layers_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>

                @endforeach
            </ul>
        </div>
        <!-- eof flexslider -->
        <div class="flexslider-bottom d-none d-xl-block">
            <a href="#about" class="mouse-button animated floating"></a>
        </div>
    </section>
    @endif


    {{-- end --}}
    <div class="divider-10 d-block d-sm-none"></div>
    <section class="s-pt-30 s-pt-lg-50 s-pt-xl-25 ls about-home" id="about">
        <div class="divider-5 d-none d-xl-block"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="main-content text-center">
                        <div class="img-wrap text-center">
                            <!-- Dotted Line Section Code -->

                        @if($companies->count() > 0)
                            <div class="dotted-section">
                                <ul class="dotted__list">
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                </ul>
                            </div>
                            <div class="divider-35"></div>
                        </div>
                        <h5>
                            {{ $companies->title }}
                        </h5>
                        <p>
                        {{ $companies->description }}
                        </p>
                        <div class="divider-30"></div>
                        <div class="img-wrap text-center">
                            <div class="dotted-section">
                                <ul class="dotted__list">
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="divider-40"></div>
                            <a class="btn btn-outline-maincolor" href="{{ $companies->button_url }}">{{ $companies->button_text }}</a>
                            <div class="divider-40"></div>
                        </div>
                    @endif
                        <div class="img-wrap text-center">
                            <div class="dotted-section">
                                <ul class="dotted__list">
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="divider-10 d-none d-xl-block"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider-10 d-block d-sm-none"></div>
    </section>

    @if($all_service_data->count() > 0)
    <section class="s-pt-30 s-pb-3 service-item2 ls animate" id="services" data-animation="fadeInUp">
        <div class="container">
            <div class="row c-mb-50 c-mb-md-60">
                <div class="d-none d-lg-block divider-20"></div>

                    @include('frontend_pages.reuse_pages.services');

            </div>
            <div class="img-wrap text-center">
                <div class="dotted-section">
                    <ul class="dotted__list">
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif


    @if($process->count() > 0)
    <section class="s-pt-100 s-pt-lg-130 ds process-part skew_right s-parallax overflow-visible custom_process_color" id="steps">
        <div class="container">
            <div class="img-wrap text-center">
                <div class="dotted-section process-dot">
                    <ul class="dotted__list">
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                    </ul>
                </div>
            </div>
            <div class="divider-65"></div>

            @foreach ($process as $proc)

                @if (($loop->index%2) == 0)

                    <div class="row align-items-center c-mb-20 c-mb-lg-60">
                        <div class="col-12 col-lg-4">
                            <div class="step-left-part text-right">
                                <h2 class="step-title">
                                    <span class="color-main">0{{ $loop->index + 1}}</span>{{ $proc->title }}</h2>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="step-center-part text-center">
                                <img style="height: 250px" src="{{asset('uploads/process_photo')}}/{{ $proc->process_photo }}" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="step-right-part">
                                <p class="step-text">{{ \Str::limit($proc->description, 500) }}</p>
                            </div>
                        </div>
                    </div>

                @else

                    <div class="row align-items-center right c-mb-20 c-mb-lg-60">
                        <div class="col-12 col-lg-4  order-lg-3">
                            <div class="step-left-part">
                                <h2 class="step-title color1">
                                    <span class="color-main2">0{{ $loop->index + 1 }}</span>{{ $proc->title }}</h2>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 order-lg-2">
                            <div class="step-center-part text-center">
                                <img style="height: 250px"  src="{{asset('uploads/process_photo')}}/{{ $proc->process_photo }}" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 order-lg-1 text-right">
                            <div class="step-right-part ">
                                <p class="step-text">{{ \Str::limit($proc->description, 500) }}</p>
                            </div>
                        </div>
                    </div>
                @endif

            @endforeach

            <div class="divider-10 d-block d-sm-none"></div>

            <div class="img-wrap text-center">
                <div class="dotted-section">
                    <ul class="dotted__list">
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                    </ul>
                </div>
            </div>
            <div class=" white-button text-center">
                <a class="btn white-btn" href="{{ $buttons->process_btn_url }}">{{ $buttons->process_btn_text }}</a>
            </div>
            <div class="divider-30 d-none d-xl-block"></div>
        </div>
    </section>
    @endif


    <section class="s-pt-75 s-pt-xl-50 gallery-carousel main-gallery container-px-0" id="gallery">
        <div class="container-fluid">
            @if($process->count() > 0)
            <div class="img-wrap text-center">
                <div class="dotted-section">
                    <ul class="dotted__list">
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                    </ul>
                </div>
                <div class="divider-40 d-block d-sm-none"></div>
            </div>
            @endif

            @if($gallery_photo->count() > 0)
            <div class="row">
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-xl-5">
                            <div class="filters gallery-filters small-text text-lg-right">
                                <a href="#" data-filter="*" class="active selected">Tous</a>
                                @foreach ($gallery_name as $item)
                                <a href="#" data-filter=".gallery_{{ $item->id }}">{{$item->gallery_name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="owl-carousel gallery-owl-nav enable" data-autoplay="false" data-responsive-lg="5" data-responsive-md="3" data-responsive-sm="3" data-responsive-xs="2" data-nav="true" data-dots="false" data-filters=".gallery-filters" data-margin="0" data-loop="true">

                        @foreach ($gallery_photo as $item)
                        <div class="vertical-item item-gallery content-absolute text-center ds gallery_{{$item->relationtoname->id}}">
                            <div class="item-media" style="height: 200px">
                                <img style="height: 100%" src="{{ asset('uploads/gallery_photos') }}/{{ $item->gallery_photo }}" alt="">
                                <div class="media-links">

                                </div>
                            </div>
                            <div class="item-content">
                                <h6>
                                    <a class="small-text" href="{{ route('all_galleries') }}">{{ $item->relationtoname->gallery_name }}</a>
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
            @endif

        </div>
    </section>

    @if($about_back_img->count() > 0)
        <section class="page_slider team_slider" id="team">
            <div class="container-fluid">
                <div class="row">
                    @include('my.parts.back_img')
                </div>
            </div>
        </section>
    @endif


    <section class="ls ms book-item s-pb-30 s-pb-lg-25">
        <div class="corner corner-light"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="text-block text-center">
                        <div class="btn-book-section overflow-visible">
                            @if($about_back_img->count() > 0)
                            <a href="{{ $buttons->about_btn_url }}" class="btn btn-maincolor">{{ $buttons->about_btn_text }}</a>
                            @endif
                        </div>
                        @if($market_strategy->count() > 0)
                        <div class="img-wrap text-center">
                            <div class="dotted-section">
                                <ul class="dotted__list">
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                </ul>
                            </div>
                            <div class="divider-35"></div>
                        </div>
                        <h5>
                            {{ $market_strategy->title }}
                        </h5>
                        <p>
                            {{ $market_strategy->description }}
                        </p>
                        @endif

                        <div class="divider-30"></div>
                        <div class="img-wrap text-center">
                            <div class="dotted-section">
                                <ul class="dotted__list">
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                    <li class="dotted_list_item"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @if($buyNow->count() > 0)
                <div class="divider-40"></div>
                <div class="row c-gutter-30 c-mb-30 c-mb-lg-0 text-center book">
                    @foreach ($buyNow as $buy)
                    <div class="col-12 col-lg-4">
                        <div class="stage book-{{ $buy->id }} ls">
                            <img src="{{ asset('uploads/buyNow') }}/{{ $buy->image }}" alt="Image Not Found !" style="height: 480px;">
                            <div class="info">
                                <header>
                                    <h6>
                                        <a href="#">
                                            {{ $buy->title }}
                                        </a>
                                    </h6>
                                </header>
                                <p>
                                    {{ $buy->description }}
                                </p>
                                <p class="small-text link-a">
                                    <a href="{{ $buy->buy_now_url }}">
                                        {{ $buy->buy_now_link }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="divider-30"></div>
                <div class="text-center img-wrap col-md-12">
                    <div>
                        <div class="dotted-section">
                            <ul class="dotted__list">
                                <li class="dotted_list_item"></li>
                                <li class="dotted_list_item"></li>
                                <li class="dotted_list_item"></li>
                                <li class="dotted_list_item"></li>
                                <li class="dotted_list_item"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="divider-40"></div>
                    <a href="{{ $buttons->buy_btn_url }}" class="btn btn-outline-maincolor">{{ $buttons->buy_btn_text }}</a>
                    <div class="divider-40"></div>
                    <div>
                        <div class="dotted-section">
                            <ul class="dotted__list">
                                <li class="dotted_list_item"></li>
                                <li class="dotted_list_item"></li>
                                <li class="dotted_list_item"></li>
                                <li class="dotted_list_item"></li>
                                <li class="dotted_list_item"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif

            </div>
            <div class="divider-10"></div>
        </div>
    </section>
    @if($reviews->count() > 0)
    <section class="ls ms blog-post-carousel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="owl-carousel" data-responsive-lg="{{ $reviews_headers->count() }}" data-responsive-md="3" data-responsive-sm="2" data-responsive-xs="1" data-nav="false" data-dots="false"  data-margin="4">
                        @foreach ($reviews_headers as $review_header)
                        <article class="box text-center">
                            <div class="item-content m-auto">
                                <p class="small-text">
                                    {{-- <a href="#">December 29, 2017</a> --}}
                                    <a href="#">{{$review_header->created_at->format('F d, Y')  }}</a>
                                </p>
                                <h6>
                                    <a href="#">{{ \Str::limit($review_header->comment, 50) }}</a>
                                </h6>
                                <div class="post-author">
                                    <img src="{{ asset('uploads/review') }}/{{ $review_header->image }}" alt="" style="height: 40px; width:40px" class="rounded-circle">
                                    <p>
                                        <a href="#">{{ $review_header->name }}</a>
                                    </p>
                                </div>
                            </div>
                            <!-- .item-content -->
                        </article>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s-pt-130 s-pb-15 s-pb-md-50 s-pt-xl-100 s-pb-lg-30 overflow-visible s-parallax testimonials-sliders main-testimonials ds" id="testimonials">
        <div class="corner ls ms"></div>
        <div class="container">
            <div class="row c-mt-30 c-mt-md-0">
                <div class="divider-20"></div>
                <div class="text-center img-wrap line col-md-12">
                    <div class="dotted-section">
                        <ul class="dotted__list">
                            <li class="dotted_list_item"></li>
                            <li class="dotted_list_item"></li>
                            <li class="dotted_list_item"></li>
                            <li class="dotted_list_item"></li>
                            <li class="dotted_list_item"></li>
                        </ul>
                    </div>
                </div>
                <div class="divider-40 d-none d-md-block"></div>
                <div class="col-md-12">
                    <div class="owl-carousel" data-autoplay="false" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-nav="false" data-dots="true" id="quote">
                        @foreach ($reviews as $review)
                        <div class="quote-item">
                            <div class="quote-image">
                                <img src="{{asset('uploads/review')}}/{{ $review->image }}" alt="Image Not Found !">
                            </div>
                            <p class="small-text author-job">
                                {{ $review->company_name }}
                            </p>
                            <h5>
                                <a href="#">{{ $review->name }}</a>
                            </h5>
                            <p>
                                <em class="big">
                                    {{ $review->comment }}
                                </em>
                            </p>
                        </div>
                        @endforeach



                        {{-- <div class="quote-item">
                            <div class="quote-image">
                                <img src="{{asset('frontend_assets/images')}}/team/testimonials_01.jpg" alt="">
                            </div>
                            <p class="small-text author-job">
                                Moving co
                            </p>
                            <h5>
                                <a href="#">Jeffrey P. McAllister</a>
                            </h5>
                            <p>
                                <em class="big">
                                    I highly recommend this company for all and any of your design needs. I am very happy with the new redesigned and restructured website they built for my moving company!
                                </em>
                            </p>
                        </div>
                        <div class="quote-item">
                            <div class="quote-image">
                                <img src="{{asset('frontend_assets/images')}}/team/testimonials_03.jpg" alt="">
                            </div>
                            <p class="small-text author-job">
                                Paradox Inc
                            </p>
                            <h5>
                                <a href="#">Josephine B. Anderson</a>
                            </h5>
                            <p>
                                <em class="big">
                                    This guys are awesome! It is hard to find a web design company who can actually listen and understand what you need. I’m 100% satisfied with this guys. My website is exactly what I needed and even more...
                                </em>
                            </p>

                        </div> --}}
                    </div>
                    <!-- .testimonials-slider -->
                </div>
                <div class="divider-55 d-none d-md-block"></div>
                <div class="text-center img-wrap col-md-12">
                    <div class="dotted-section">
                        <ul class="dotted__list">
                            <li class="dotted_list_item"></li>
                            <li class="dotted_list_item"></li>
                            <li class="dotted_list_item"></li>
                            <li class="dotted_list_item"></li>
                            <li class="dotted_list_item"></li>
                        </ul>
                    </div>
                </div>
                <div class="divider-10 d-none d-md-block"></div>
            </div>
        </div>
        <div class="testimonials-btn text-center">
            <a href="#quote" class="btn-maincolor">
                {!! generalsettings()->arrow_icon !!}
            </a>
        </div>
        <div class="corner corner-light"></div>
    </section>
    @endif


    <section class="s-pt-130 s-pt-md-50 ls text-section">
        <div class="divider-30"></div>
        <div class="container">
            <div class="row">
                <div class="text-center col-md-12 justify-content-center text-block">
                    @if($reviews->count() > 0)
                    <div class="dotted-section">
                        <ul class="dotted__list">
                            <li class="dotted_list_item"></li>
                            <li class="dotted_list_item"></li>
                            <li class="dotted_list_item"></li>
                            <li class="dotted_list_item"></li>
                            <li class="dotted_list_item"></li>
                        </ul>
                    </div>
                    @endif
                    @if($startProject->count() > 0)
                    <div class="divider-35"></div>
                    <div class="content">
                        <h1>
                            {{ $startProject->title }}
                        </h1>
                        <p>
                        {{ $startProject->meta_title }}
                        </p>
                        <div class="divider-30"></div>
                    </div>
                    <div class="dotted-section">
                        <ul class="dotted__list">
                            <li class="dotted_list_item"></li>
                            <li class="dotted_list_item"></li>
                            <li class="dotted_list_item"></li>
                            <li class="dotted_list_item"></li>
                            <li class="dotted_list_item"></li>
                        </ul>
                    </div>
                    <div>
                        <div class="divider-40"></div>
                        <a href="{{ route('contact/us') }}" class="btn btn-outline-maincolor">{{ $startProject->button_text }}!</a>
                        <div class="divider-30"></div>
                    </div>
                    <div class="img-wrap overflow-visible">
                        <div class="dotted-section">
                            <ul class="dotted__list">
                                <li class="dotted_list_item"></li>
                                <li class="dotted_list_item"></li>
                                <li class="dotted_list_item"></li>
                                <li class="dotted_list_item"></li>
                                <li class="dotted_list_item"></li>
                            </ul>
                        </div>
                        <div class="divider-5 d-none d-xl-block"></div>
                    </div>
                    @endif

                </div>

            </div>
        </div>
    </section>

    <section class="s-pt-50 s-pb-100 s-pt-lg-30 s-pb-lg-75 ls ms teaser-contact-icon main-icon s-parallax" id="contact">
        <div class="corner corner-inverse"></div>
        <div class="text-center img-wrap col-md-12">
            <div class="dotted-section">
                <ul class="dotted__list">
                    <li class="dotted_list_item"></li>
                    <li class="dotted_list_item"></li>
                    <li class="dotted_list_item"></li>
                    <li class="dotted_list_item"></li>
                    <li class="dotted_list_item"></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="divider-10 d-none d-xl-block"></div>
            @include('frontend_pages.reuse_pages.contact_block')
            <div class="divider-30 d-none d-lg-block"></div>
            <div class="text-center img-wrap col-md-12 layout-2">
                <div class="dotted-section">
                    <ul class="dotted__list">
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                        <li class="dotted_list_item"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="divider-10"></div>
    </section>
@endsection

{{-- @section('custom_js')

@endsection --}}

