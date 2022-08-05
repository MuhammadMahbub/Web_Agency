<footer class="page_footer foot_bg corner-footer ds s-pt-30 s-pb-0 s-pb-lg-10 s-pb-xl-50 c-gutter-60 s-parallax">

    <div class="container">
        <div class="container">
            <div class="row">
                <div class="divider-20 d-none d-xl-block"></div>
                <div class="col-md-12 mt-4 text-center animate" data-animation="fadeInUp">
                    <img class="margin-negative footer_logo_class" src="{{ asset('uploads/images/generalSetting') }}/{{ generalsettings()->footer_logo }}" alt="">
                    <div class="widget widget_social_buttons">
                        <a href="{{ socialurls()->fb_url }}" target="_blank" class="fa fa-facebook color-icon" title="facebook"></a>
                        <a href="{{ socialurls()->twitter_url }}" target="_blank" class="fa fa-twitter color-icon" title="twitter"></a>
                        <a href="{{ socialurls()->instagram_url }}" target="_blank" class="fa fa-instagram color-icon" title="instagram"></a>
                        <a href="{{ socialurls()->youtube_url }}" target="_blank" class="fa fa-youtube-play color-icon" title="youtube-play"></a>
                        <a href="{{ socialurls()->linkedin_url }}" target="_blank" class="fa fa-linkedin color-icon" title="linkedin"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<section class="page_copyright light-copy cs s-py-20 s-py-lg-5 s-parallax copyright">
    <div class="container">
        <div class="row align-items-center">
            <div class="divider-20 d-none d-lg-block"></div>
            <div class="col-md-12 text-center">
                <p>{{ generalsettings()->copyright }}</p>
            </div>
            <div class="divider-20 d-none d-lg-block"></div>
        </div>
    </div>
</section>
