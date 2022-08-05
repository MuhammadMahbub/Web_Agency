@extends('frontend_master.frontend_master')

@section('frontend_title', 'testimonial')

@section('TestimonialActive')
active
@endsection

@if ($all_testimonial_data->count() > 0)
@section('frontend_content')
    <section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top:120px">
                    <h1>{{ titlesettings()->testimonial_title }}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('root') }}">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            {{ titlesettings()->testimonial_title }}
                        </li>
                    </ol>
                    <div class="divider-15 d-none d-xl-block"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="ls s-pt-20 s-pb-130 s-pb-lg-100 testimonials-page">
        <div class="container">
            <div class="divider-75 d-none d-xl-block"></div>
            <div class="row c-mb-lg-30 c-gutter-60">

                @foreach ($all_testimonial_data as $item)
                <div class="col-md-6">
                    <div class="text-center">
                        <div class="testimonials-item">
                            <img style="height: 90px" src="{{ asset('uploads/images/testimonial') }}/{{ $item->user_photo }}" alt="">
                        </div>
                        <h6>
                            {{ $item->user_name}}
                        </h6>
                        <p>
                            {{ $item->user_review }}
                        </p>
                    </div>
                </div>
                @endforeach


            </div>
            <div class="divider-70 d-none d-xl-block"></div>
        </div>
    </section>
@endsection
@endif
