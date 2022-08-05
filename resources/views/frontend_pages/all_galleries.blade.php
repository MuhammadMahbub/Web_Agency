@extends('frontend_master.frontend_master')

@section('frontend_title', 'blog details')

@section('frontend_content')

<section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" style="margin-top: 100px">
                <h1>{{ titlesettings()->gallery_title }}</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('root') }}">Home</a>
                    </li>

                    <li class="breadcrumb-item active">
                        {{ titlesettings()->gallery_title }}
                    </li>
                </ol>
                <div class="divider-15 d-none d-xl-block"></div>
            </div>
        </div>
    </div>
</section>


<section class="ls s-pt-50 s-pb-100 gallery-pagination gallery-regular">
    <div class="d-none d-lg-block divider-20"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-xl-8">
                        <div class="filters gallery-filters small-text text-lg-right">
                            <a href="#" data-filter="*" class="active selected">All</a>

                            @foreach ($gallery_name as $item)
                            <a href="#" data-filter=".gallery_{{ $item->id }}">{{$item->gallery_name}}</a>
                            @endforeach

                        </div>
                    </div>
                </div>


                <div class="row isotope-wrapper masonry-layout c-mb-30" data-filters=".gallery-filters">
                    @foreach ($gallery_photo as $item)

                    <div class="col-xl-4 col-sm-6 gallery_{{ $item->id }}">
                        <div class="vertical-item item-gallery content-absolute gallery text-center ls">
                            <div class="item-media">
                                <img src="{{ asset('uploads/gallery_photos') }}/{{ $item->gallery_photo }}" alt="" style="height: 200px">
                                <div class="media-links">
                                </div>
                            </div>
                            <div class="item-content">
                                <h6>
                                    <a class="tags small-text" href="#">{{ $item->relationtoname->gallery_name }}</a>
                                    <br>
                                    <a href="#">{{ $item->gallery_title }}</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
                <!-- .isotope-wrapper-->

                {{-- <nav class="navigation pagination @@navClass" role="navigation">
                    <h2 class="screen-reader-text">Posts navigation</h2>
                    <div class="nav-links">
                        <a class="prev page-numbers" href="blog-1.html">
                            <i class="fa fa-chevron-left"></i>
                            <span class="screen-reader-text">Previous page</span>
                        </a>
                        <span class="page-numbers current">
                            <span class="meta-nav screen-reader-text">Page </span> 1
                        </span>
                        <a class="page-numbers" href="blog-1.html">
                            <span class="meta-nav screen-reader-text">Page </span> 2
                        </a>
                        <a class="page-numbers" href="blog-1.html">
                            <span class="meta-nav screen-reader-text">Page </span> 3
                        </a>
                        <a class="next page-numbers" href="blog-1.html">
                            <span class="screen-reader-text">Next page</span>
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </nav> --}}
            </div>
        </div>
    </div>
    <div class="d-none d-lg-block divider-105"></div>
</section>


@endsection
