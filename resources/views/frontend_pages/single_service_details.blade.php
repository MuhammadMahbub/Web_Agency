@extends('frontend_master.frontend_master')

@section('frontend_title', 'single service details')

@section('frontend_content')

    <section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top: 120px">
                    <h1> {{ titlesettings()->service_details_title }}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('root') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('service') }}"> {{ titlesettings()->service_title }}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ titlesettings()->service_details_title }}
                        </li>
                    </ol>
                    <div class="divider-15 d-none d-xl-block"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="ls s-pt-30 s-pt-md-50 s-pb-md-10 s-py-lg-50 c-gutter-60 c-mb-30 c-mb-md-50 overflow-visible">
        <div class="divider-65 d-none d-lg-block"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 service-single to_animate animate" data-animation="fadeInRight">
                    <h6 class="fs-20">
                        {{ $single_service_details->service_name }}
                    </h6>
                    <p>
                        {{ $single_service_details->service_short_description }}
                    </p>

                </div>
                <div class="col-lg-6 to_animate fw-column animate" data-animation="fadeInLeft">
                    <img src="{{ asset('uploads/images/service') }}/{{ $single_service_details->service_image }}" alt="" class="service_details_img">
                </div>
                <div class="col-lg-12 to_animate fw-column animate" data-animation="fadeInUp">
                    <div class="shortcodes">
                        {!! $single_service_details->service_long_description !!}
                    </div>
                </div>
            </div>
            <div class="divider-10 d-none d-lg-block"></div>
        </div>
    </section>
    @if ($all_tesimonial_data->count() >0)
    <section id="section_testimonials" class="s-pt-50 s-pb-130 ls ms service-single-testimonials">
        <div class="divider-70 d-none d-lg-block"></div>
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="special-heading text-center">
                        <h4>
                            
                                {{ titlesettings()->testimonial_title }}
                            
                            
                        </h4>
                    </div>
                    <div class="testimonials-slider owl-carousel" data-autoplay="false" data-responsive-lg="3" data-responsive-md="1" data-responsive-sm="1" data-nav="false" data-dots="true">
                        @foreach ($all_tesimonial_data as $item)
                            <div class="quote-item">
                                <div class="testimonials-item">
                                    <img style="height: 80px" src="{{ asset('uploads/images/testimonial') }}/{{ $item->user_photo }}" alt="">
                                </div>
                                <h6>
                                    {{ $item->user_name }}
                                </h6>
                                <p>
                                    {{ \Str::limit($item->user_review, 120 ) }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                    <!-- .testimonials-slider -->
                </div>
                <div class="divider-70 d-none d-lg-block"></div>
            </div>
        </div>
        <div class="corner corner-outside ds ms"></div>
    </section>
    @endif
@endsection
