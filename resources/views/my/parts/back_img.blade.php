@if ($about_back_img->count() > 0)
<div class="shortcode-team-slider">
    <h3 class="slider-title">{{ __('Team') }}</h3>
    <h3 class="slider-title d-lg-block">{{ __('Team') }}</h3>
    <div class="flexslider team-slider" data-nav="false" data-dots="true">
        <ul class="slides">
            @foreach ($about_back_img as $item)
                <li class="ls" style="height: 600px">
                    <img src="{{ asset('uploads/aboutus') }}/{{ $item->back_img }}" alt="" width="100%" height="938px">
                </li>

            @endforeach
        </ul>

    </div>
    <!-- eof flexslider -->
    <div class="flexslider-controls">
        <ul class="flex-control-nav-1">
            @foreach ($about_back_img as $item)
            <li class="menu_item">
                {{ $item->name }}
                <span class="position">{{ $item->post }}</span>
            </li>
            @endforeach

            <span class="team-social-icons">
                <span class="social-icons">
                    <a href="{{ socialurls()->fb_url }}" target="_blank" class="fa fa-facebook color-icon border-icon rounded-icon" title="facebook"></a>
                    <a href="{{ socialurls()->twitter_url }}" target="_blank" class="fa fa-twitter color-icon border-icon rounded-icon" title="twitter"></a>
                    <a href="{{ socialurls()->youtube_url }}" target="_blank" class="fa fa-youtube color-icon border-icon rounded-icon" title="youtube"></a>
                    <a href="{{ socialurls()->linkedin_url }}" target="_blank" class="fa fa-linkedin color-icon border-icon rounded-icon" title="linkedin"></a>
                    <a href="{{ socialurls()->instagram_url }}" target="_blank" class="fa fa-instagram color-icon border-icon rounded-icon" title="instagram"></a>
                </span>
            </span>
        </ul>
    </div>
</div>
@endif

