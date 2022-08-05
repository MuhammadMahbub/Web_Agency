{{-- @if($all_blogs->count() > 0) --}}

@foreach ($all_blogs as $item)
<article class="text-md-left vertical-item blog-padding ls ms post type-post status-publish format-standard has-post-thumbnail sticky">
    <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-5 col-xs-12">
            <div class="item-media cover-image" >
                <img width="100%" src="{{ asset('uploads/blog_photos') }}/{{ $item->blog_photo }}" alt="">
            </div>
        </div>
        <div class="col-xl-8 col-lg-7 col-md-6 col-xs-12">
            <div class="item-content">
                <h6 class="fw-500">
                    <a href="{{ route('single.blog.details',$item->slug) }}">{{ $item->title }}</a>
                </h6>
                <span style="color: var(--theme-color)">Category: </span><span><a href="{{ route('cate.wise.blogs',$item->relationtoblogcategory->id ) }}">{{ $item->relationtoblogcategory->category_name }}</a></span>
                <p>
                    {{  \Str::limit( $item->s_description, 50)}}
                </p>
                <div class="item-meta color-darkgrey">
                    <a href="#">
                        <i class="fa fa-calendar color-main"></i>
                        <span>{{ $item->created_at->format('d-m-Y') }}</span>
                    </a>
                    <a href="#">
                        <i class="fa fa-user color-main"></i>
                        <span>Admin</span>
                    </a>
                    <a href="#">
                        <i class="fa fa-comments color-main"></i>
                        @php
                            $comment_count = App\Models\BlogComment::where('blog_id',$item->id)->count();
                        @endphp
                        <span>{{ $comment_count }} Comments</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</article>
@endforeach

{{-- @endif --}}

