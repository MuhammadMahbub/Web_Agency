@extends('frontend_master.frontend_master')

@section('frontend_title', 'blog details')

@section('frontend_content')

<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form" action="/">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="btn">Search</button>
        </form>
    </div>
</div>

<section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" style="margin-top: 120px">
                <h1> {{ titlesettings()->blog_details_title }}</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('root') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('blog') }}"> {{ titlesettings()->blog_title }}</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{ titlesettings()->blog_details_title }}
                    </li>
                </ol>
                <div class="divider-15 d-none d-xl-block"></div>
            </div>
        </div>
    </div>
</section>

<section class="ls s-py-50 s-pt-lg-50 s-pb-lg-100 c-gutter-60 post1">
    <div class="container">
        <div class="row">

            <div class="d-none d-lg-block divider-65"></div>

            <main class="col-lg-7 col-xl-8 order-lg-2">
                <article class="vertical-item post type-post status-publish format-standard has-post-thumbnail">

                    <!-- .post-thumbnail -->
                    <div class="row">
                        <div class="col-md-10">
                            <h3>{{ $blog_details->title }}</h3>
                        </div>
                        <div class="col-md-2">
                            <div class="like">
                                <i class="fa fa-heart color-main fs-14"></i>
                                <a href="{{ route('blog.like',$blog_details->id) }}"><h3>like this post</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="entry-meta icons link-a small-text border-top">
                        <i class="fa fa-calendar color-main fs-14"></i>
                        <a class="url fn n" href="#">{{ $blog_details->created_at->format('m.d.Y') }}</a>
                        <i class="fa fa-user color-main fs-14"></i>
                        <a class="url fn n" href="#">{{ Auth::user()->name ?? 'ADMIN' }}</a>
                        <i class="fa fa-eye color-main fs-14"></i>
                        {{-- <a class="url fn n" href="#">154 views</a> --}}
                        <i class="fa fa-comments color-main fs-14"></i>
                        <a class="url fn n" href="#">{{ $comment_count }} comments</a>
                        <i class="fa fa-heart color-main fs-14"></i>
                        <a class="url fn n" href="#">{{ $likes }} Likes</a>
                    </div>

                    <div class="item-media post-thumbnail">
                        <img style="height: 500px" src="{{ asset('uploads/blog_photos') }}/{{ $blog_details->blog_photo }}" alt="">
                    </div>

                    <div class="item-content blog-post1">
                        {!! $blog_details->description!!}
                        <div class="tags">
                            <span class="cat-tags-links">
                                {{-- <span class="tags-links">
                                    <span>Tags:</span>
                                    <a href="#" rel="tag">Branding</a>,
                                    <a href="#" rel="tag">Design</a>,
                                    <a href="#" rel="tag">Photo</a>
                                </span> --}}
                            </span>

                        </div>
                        <div class="share_buttons social_part">
                            <a href="{{ socialurls()->fb_url }}" class="color-bg-icon fa fa-facebook" target="_blank"></a>
                            <a href="{{ socialurls()->twitter_url }}" class="color-bg-icon fa fa-twitter" target="_blank"></a>
                            <a href="{{ socialurls()->instagram_url }}" class="color-bg-icon fa fa-instagram" target="_blank"></a>
                            <a href="{{ socialurls()->linkedin_url }}" class="color-bg-icon fa fa-linkedin" target="_blank"></a>
                            <a href="{{ socialurls()->youtube_url }}" class="color-bg-icon fa fa-youtube-play" target="_blank"></a>

                        </div>
                        <!-- eof .share_buttons -->
                @if ($blog_details->editors_comment != '' || $blog_details->editors_photo != "")
                <div class="author-bio side-item content-padding">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-xs-12">
                            <div class="item-media covage">
                                @if ($blog_details->editors_photo != 'default.png')
                                    <img src="{{ asset('uploads/editors_photos') }}/{{ $blog_details->editors_photo }}" alt="" style="height: 235px">
                                @else
                                    <img src="{{ asset('uploads/editors_photos/default.png') }}" alt="">
                                @endif
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-6 col-md-6 col-xs-12">
                            <div class="item-content">
                                <p class="small-text color-main">
                                    {{ Auth::user()->name ?? 'ADMIN' }}
                                </p>
                                <p>
                                    {{ $blog_details->editors_comment }}
                                </p>
                                <div class="author-social fs-14">
                                    <a href="{{ socialurls()->fb_url }}" class="fa fa-facebook color-icon"></a>
                                    <a href="{{ socialurls()->twitter_url }}" class="fa fa-twitter color-icon"></a>
                                    <a href="{{ socialurls()->instagram_url }}" class="fa fa-instagram color-icon"></a>
                                    <a href="{{ socialurls()->linkedin_url }}" class="fa fa-linkedin color-icon"></a>
                                    <a href="{{ socialurls()->youtube_url }}" class="fa fa-youtube-play color-icon"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                    <nav class="navigation post-nav" role="navigation">
                        <h2 class="screen-reader-text">Post navigation</h2>
                        <div class="nav-links">
                            <div class="nav-previous ds">

                                    <div class="post-nav-text-wrap">

                                        <span class="screen-reader-text">Previous Post</span>
                                        <span aria-hidden="true" class="nav-subtitle color-main prev-post">Previous Post</span>
                                        @if($prev)
                                        <p class="nav-title">
                                            <span> <a href="{{ route('single.blog.details',$prev->slug) }}">
                                            </a></span>{{ $prev->title }}
                                        </p>
                                        @else
                                        <p class="nav-title">
                                            No Post
                                        </p>
                                        @endif

                                    </div>
                            </div>
                            <div class="nav-next ds next">

                                <div class="post-nav-text-wrap">
                                    <span class="screen-reader-text">Next Post</span>
                                    <span aria-hidden="true" class="nav-subtitle color-main next-post">Next Post</span>
                                    @if($next)
                                    <p class="nav-title">
                                            <span><a href="{{ route('single.blog.details',$next->slug) }}"></a></span>{{ $next->title }}
                                    </p>
                                    @else
                                    <p class="nav-title">
                                        No Post
                                    </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </nav>
                    </div>
                </article>

                <div class="related-posts">
                    <h4>
                        Related Posts
                    </h4>
                    @if (count($related_blogs)>0)
                    <div class="row c-gutter-30 mb-25">
                        @foreach ($related_blogs as $item)
                        <div class="col-12 col-md-6">
                            <div class="vertical-item">
                                <div class="item-media">
                                    <img src="{{ asset('uploads/blog_photos') }}/{{ $item->blog_photo }}" alt="">
                                </div>
                                <div class="item-content">
                                    <p>
                                        <a href="{{ route('single.blog.details',$item->slug) }}">{{ $item->title }}</a>
                                    </p>
                                </div>
                                <p class="item-meta link-a">
                                   {{ $item->created_at }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="row c-gutter-30 mb-25">
                        <h3 class="text-danger m-auto">No Related Posts</h3>
                    </div>
                    @endif
                </div>

                <div id="comments" class="comments-area comment1">
                    <h4 class="comments-title">
                        Comments
                    </h4>
                    <ol class="comment-list">

                        @foreach ($blog_comments as $item)
                        <li class="comment border-top">
                            <article class="comment-body">
                                <footer class="comment-meta">
                                    <div class="comment-author vcard">
                                             <img src="{{ asset('uploads/user_photos/default.png') }}" alt="">
                                        <b class="fn">
                                            <a href="#" rel="nofollow" class="url">{{ $item->name }}</a>
                                            <span class="dot">.</span>
                                            <span class="data link-a">{{ $item->created_at->format('d-m-Y') }}</span>
                                        </b>
                                        <div class="float-right">
                                            <a href="#respond">
                                                <i class="color-darkgrey fa fa-mail-reply" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <!-- .comment-author -->

                                </footer>
                                <!-- .comment-meta -->

                                <div class="comment-content">
                                    <p>
                                        {{ $item->comment }}
                                    </p>
                                </div>
                                <!-- .comment-content -->

                            </article>
                            <!-- .comment-body -->
                        </li>
                        @endforeach
                        <!-- #comment-## -->
                    </ol>
                    <!-- .comment-list -->
                    <article class="comment-body comment-form">
                        <div class="comment-author vcard">
                            <img alt="" src="images/admin_icon.png">
                            <div id="respond" class=" comment-respond ms">
                                <form action="{{ route('blogcomment.store') }}" method="post" class="comment-form">
                                    @csrf
                            <input type="hidden" name="blog_id" value="{{ $blog_details->id }}">
                                    <div class="row c-gutter-20">
                                        <div class="col-md-6">
                                            <p class="comment-form-author ">
                                                <input id="name" name="name" type="text" value="" size="30" maxlength="245" aria-required="true" required="required" class="form-control" placeholder="Full Name">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="comment-form-email">
                                                <input id="phone" name="phone" type="text" value="" size="30" maxlength="100" aria-required="true" placeholder="Phone Number" class="form-control">
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="comment-form-email">
                                                <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-required="true" required="required" placeholder="Email Adress" class="form-control">
                                            </p>
                                        </div>
                                    </div>

                                    <p class="comment-form-comment">
                                        <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required" placeholder="Your comment" class="form-control"></textarea>
                                    </p>
                                    <div class="form-submit">
                                        <input name="submit" type="submit" class="submit" value="Post A Comment">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </article>
                </div>

            </main>

            <aside class="col-lg-5 col-xl-4 order-lg-1">
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
                                    <img  style="height: 250px" src="{{ asset('uploads/blog_photos') }}/{{ $item->blog_photo }}" alt="">
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

                {{-- <div class="widget widget_tag_cloud">


                    <div class="tagcloud">

                        <a href="blog-3.html" class="tag-cloud-link">
                            Corporate
                        </a>

                        <a href="blog-3.html" class="tag-cloud-link">
                            Business
                        </a>

                        <a href="blog-3.html" class="tag-cloud-link">
                            Entertainment
                        </a>

                        <a href="blog-3.html" class="tag-cloud-link">
                            Innovations
                        </a>

                        <a href="blog-3.html" class="tag-cloud-link">
                            News
                        </a>

                        <a href="blog-3.html" class="tag-cloud-link">
                            Knowledge
                        </a>
                    </div>
                </div> --}}


            </aside>

            <div class="d-none d-lg-block divider-85"></div>
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
