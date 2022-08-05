@extends('frontend_master.frontend_master')

@section('frontend_title', 'blog')

@section('BlogActive')
active
@endsection

@section('custom_css')

    <style>
    .pagination {
    justify-content: left !important;
    margin-top: 60px;
    }
    .pagination a{
        background: rgb(235, 235, 235) !important;
        float: left !important;
    }
    .pagination > .nav-links span{
        background: red !important;
        float: left !important;
    }
    </style>
@endsection

@section('frontend_content')


    <section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top: 120px">
                    <h1> {{ titlesettings()->blog_title }}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('root') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ titlesettings()->blog_title }}
                        </li>
                    </ol>
                    <div class="divider-15 d-none d-xl-block"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls s-pt-50 s-pb-50 s-pb-lg-100 blog-list">
        <div class="container">

            @if (count($all_blogs) > 0)

                @else
                <h3 class="text-danger">No Data Found</h3>
                <a href="{{ route('blog') }}" style="text-decoration: underline; color:blue">Back to Blog</a>
                {{-- <div class="d-none d-lg-block divider-65"></div> --}}
            @endif



            <div class="row c-gutter-60">

                <main class="col-lg-7 col-xl-8 order-lg-1 c-gutter-0">

                    <div id="render_data">


                        @include('frontend_pages.blog_search')

                    </div>



                    <!-- #post-## -->
                        {{-- @if (count($all_blogs) > 3) --}}
                    <nav class="custom-pagination navigation pagination @@navClass" role="navigation">
                        {{-- <div class="custom-pagination nav-links">
                            <a class="prev page-numbers" href="blog-1.html">
                                <i class="fa fa-chevron-left"></i>
                                <span class="screen-reader-text">Previous page</span>
                            </a>
                            <a class="page-numbers" href="blog-1.html">
                                <span class="meta-nav screen-reader-text">Page </span>
                                1
                            </a>
                            <span class="page-numbers current">
                                <span class="meta-nav screen-reader-text">Page </span>
                                2
                            </span>
                            <a class="page-numbers" href="blog-1.html">
                                <span class="meta-nav screen-reader-text">Page </span>
                                3
                            </a>
                            <a class="next page-numbers" href="blog-1.html">
                                <span class="screen-reader-text">Next page</span>
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div> --}}
                         {{ $all_blogs->links() }}

                    </nav>
                    {{-- @endif --}}

                </main>

                <aside class="col-lg-5 col-xl-4 order-lg-2">


                    <div class="widget widget_search ds texture-ds">
                        <h6>Search</h6>
                        <form action="{{ route('search.blogs') }}" method="GET" id="search_form_details">
                            <input type="search" id="search-form-widget" name="search_value" class="text-left search-field form-control" placeholder="Search Keyword">
                            <button type="submit" class="search-submit" id="home_search_details">
                                <span class="screen-reader-text">Search</span>
                            </button>
                        </form>
                    </div>


                    <div class="categories-dropdown">
                        <div class="widget widget_categories dropdown">

                            <h3 class="widget-title">Categories</h3>

                            <label class="screen-reader-text" for="cat">
                                Categories dropdown
                            </label>
                            <form action="{{ route('cat.wise.blogs') }}" method="GET" id="cat_search_form">
                                @csrf
                            <select class="postform" id="category_wise_blog" name="search_value">
                                <option>Select Category</option>
                                    @foreach ($blog_categories as $item)
                                     <option class="level-0" value="{{ $item->id }}">{{ $item->category_name }}</option>
                                    @endforeach
                            </select>
                            </form>
                        </div>

                    </div>


                    <div class="widget widget_slider">

                        <h3 class="widget-title">Recent Posts</h3>
                        <div class="item-media">
                            <div class="owl-carousel gallery-owl-nav" data-nav="true" data-loop="false" data-autoplay="true" data-items="1" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1">

                                @foreach ($recent_blogs as $item)
                                <div class="vertical-item">
                                    <div class="item-media">
                                        <img style="height: 200px" src="{{ asset('uploads/blog_photos') }}/{{ $item->blog_photo }}" alt="">
                                    </div>
                                    <div class="item-content widget-content ls ms">
                                        <p class="widget-content">
                                            <a href="{{ route('single.blog.details',$item->slug) }}">
                                                {{ $item->title }}
                                            </a>
                                        </p>
                                        <p class="item-meta link-a">
                                                {{ $item->created_at }}
                                        </p>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <!-- .owl-carousel -->
                        </div>

                    </div>
                    <!-- .widget_slider -->

                    {{-- @include('my.parts.calender') --}}

                    {{-- <div class="widget widget_flickr">

                        <h3 class="widget-title">Instagram</h3>
                        <ul class="flickr_ul"></ul>
                    </div> --}}
                </aside>

                <div class="d-none d-lg-block divider-105"></div>
            </div>

        </div>
    </section>
@endsection



@section('custom_js')


<script>
    $(document).ready(function () {
        $('#home_search_details').click(function (e) {

           $('#search_form_details').submit();
                // console.log('ok');
        });
    });
</script>

<script>
    $(document).ready(function () {

        $('#category_wise_blog').change(function() {

            var country_id = $(this).val();

            $('#cat_search_form').submit();

            });
    });
</script>
@endsection

