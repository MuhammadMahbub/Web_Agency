@extends('frontend_master.frontend_master')

@section('frontend_title', 'single team details')

@include('frontend_pages.reuse_pages.frontend_toster_message')

@section('frontend_content')
    <section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top:120px">
                    <h1>{{ titlesettings()->team_details_title }}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('root') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('team') }}">{{ titlesettings()->team_title }}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ titlesettings()->team_details_title }}
                        </li>
                    </ol>
                    <div class="divider-15 d-none d-xl-block"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="ls s-pt-50 s-pb-50 s-pb-lg-100">
        <div class="d-none d-lg-block divider-65"></div>
        <div class="container">
            <div class="row">

                <div class="col-12 team-single">
                    <div class="row c-gutter-60">
                        <div class="col-md-4">
                            <div>
                                <img src="{{ asset('uploads/images/team') }}/{{ $single_team_details->member_photo }}" alt="not found">
                            </div>
                            <p class="progress-title">{{ $single_team_details->expertise_name_one }}</p>
                            <div class="progress">
                                <div class="progress-bar bg-maincolor" role="progressbar" data-transitiongoal="{{ $single_team_details->expertise_percent_one }}" aria-valuemin="0" aria-valuemax="100">

                                    <span class="float-right">{{ $single_team_details->expertise_percent_one }}</span>
                                </div>
                            </div>

                            <p class="progress-title">{{ $single_team_details->expertise_name_two }}</p>
                            <div class="progress">
                                <div class="progress-bar bg-maincolor2" role="progressbar" data-transitiongoal="{{ $single_team_details->expertise_percent_two }}" aria-valuemin="0" aria-valuemax="100">
                                    <span class="float-right">{{ $single_team_details->expertise_percent_two }}</span>
                                </div>
                            </div>

                            <p class="progress-title">{{ $single_team_details->expertise_name_three }}</p>
                            <div class="progress">
                                <div class="progress-bar bg-maincolor3" role="progressbar" data-transitiongoal="{{ $single_team_details->expertise_percent_three }}" aria-valuemin="0" aria-valuemax="100">
                                    <span>{{ $single_team_details->expertise_percent_three }}</span>
                                </div>
                            </div>
                            <p class="progress-title">{{ $single_team_details->expertise_name_four }}</p>
                            <div class="progress">
                                <div class="progress-bar bg-maincolor4" role="progressbar" data-transitiongoal="{{ $single_team_details->expertise_percent_four }}" aria-valuemin="0" aria-valuemax="100">
                                    <span class="float-right">{{ $single_team_details->expertise_percent_four }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-md-offset-1 team-content">
                            <div class="d-flex justify-content-between">
                                <h6>
                                   {{ $single_team_details->member_name }}
                                </h6>
                                <p class="social-icons">

                                    @if ($single_team_details->facebook_link != '')
                                        <a href="{{ $single_team_details->facebook_link }}" class="fa fa-facebook color-icon bg-icon rounded-icon" title="facebook"></a>
                                    @endif

                                    @if ($single_team_details->twitter_link != '')
                                    <a href="{{ $single_team_details->twitter_link }}" class="fa fa-twitter color-icon bg-icon rounded-icon" title="twitter"></a>
                                    @endif

                                    @if ($single_team_details->linkedin_link != '')
                                        <a href="{{ $single_team_details->linkedin_link }}" class="fa fa-linkedin color-icon bg-icon rounded-icon" title="linkedin"></a>
                                    @endif

                                    @if ($single_team_details->google_plus_link != '')
                                    <a href="{{ $single_team_details->google_plus_link }}" class="fa fa-google-plus color-icon bg-icon rounded-icon" title="google"></a>
                                    @endif

                                    @if ($single_team_details->youtube_link != '')
                                    <a href="{{ $single_team_details->youtube_link }}" class="fa fa-youtube-play  color-icon bg-icon rounded-icon" title="youtube-play"></a>
                                    @endif

                                </p>
                            </div>
                            <p class="small-text color-main">
                                {{ $single_team_details->member_designation }}
                            </p>

                            <div class="row fs-14 contact-icon col-md-12">
                                <div class="media">
                                    <div class="icon-styled color-main">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <p>
                                            {{ $single_team_details->member_phone }}
                                        </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="icon-styled color-main">
                                        <i class="fa fa-pencil"></i>
                                    </div>

                                    <div class="media-body">
                                        <p>
                                            {{ $single_team_details->member_email }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <p>
                                {!! $single_team_details->member_details !!}
                            </p>


                            {{-- i am here --}}
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Thanks!</strong> {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                            @endif

                            <!--Model Popup starts-->
                                {{-- <div class="container">
                                    <div class="row">
                                        <a class="btn btn-primary" data-toggle="modal" href="#ignismyModal">open Popup</a>
                                        <div class="modal fade" id="ignismyModal" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <div class="thank-you-pop">
                                                            <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                                                            <h1>Thank You!</h1>
                                                            <p>Your submission is received and we will contact you soon</p>
                                                            <h3 class="cupon-pop">Your Id: <span>12345</span></h3>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            <!--Model Popup ends-->

                            <form class=" c-mb-20 c-gutter-20 pt-40" action="{{ route('mail.send.team.member') }}" class="s-pb-130 s-pb-lg-170" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group has-placeholder">
                                            <label for="name">Full Name
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" name="client_name" id="client_name" class="form-control" placeholder="Full Name" value="{{ old('client_name') }}">
                                            @error('client_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group has-placeholder">
                                            <label for="email">Email address
                                                <span class="required">*</span>
                                            </label>
                                            <input type="email" aria-required="true" size="30" value="{{ old('client_email') }}" name="client_email" id="email" class="form-control" placeholder="Email Adress">
                                            @error('client_email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group has-placeholder">
                                            <label for="phone">Phone Number
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" aria-required="true" size="30" name="client_phone" id="phone" class="form-control" placeholder="Phone Number" value="{{ old('client_phone') }}">

                                            @error('client_phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group has-placeholder">
                                            <label for="subject">Your Subject
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" aria-required="true" size="30" value="{{ old('client_phone') }}" name="message_subject" id="subject" class="form-control" placeholder="Your Topic">
                                            @error('message_subject')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group has-placeholder">
                                            <label for="message">Your Message</label>
                                            <textarea aria-required="true" rows="6" cols="45" name="message_details" id="message_details" class="form-control" placeholder="Your Message">
                                                {{ old('client_phone') }}
                                            </textarea>
                                            @error('message_details')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 mt-15">
                                        <div class="form-group">

                                            <button type="submit"> Send Message </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            {{-- <form class="contact-form c-mb-20 c-gutter-20 pt-40">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group has-placeholder">
                                            <label for="name">Full Name
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group has-placeholder">
                                            <label for="email">Email address
                                                <span class="required">*</span>
                                            </label>
                                            <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Adress">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group has-placeholder">
                                            <label for="phone">Phone Number
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group has-placeholder">
                                            <label for="subject">Your Topic
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Your Topic">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group has-placeholder">
                                            <label for="message">Your Message</label>
                                            <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 mt-15">
                                        <div class="form-group">
                                            <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>

                <div class="d-none d-lg-block divider-20"></div>

            </div>
        </div>
    </section>

    <section class="ls ms s-pt-30 s-pb-130 s-py-lg-130 single-member-carousel">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4>
                        Our Experts
                    </h4>
                    <div class="owl-carousel top-right-nav" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="2" data-nav="true" data-dots="false" data-loop="true" data-margin="" data-nav-prev="<span>prev</span>" data-nav-next="<span>next</span>">

                        @foreach ($all_rest_team_member as $item)
                            <div class="vertical-item ls content-padding text-center">
                                <div class="item-media">
                                    <img src="{{ asset('uploads/images/team') }}/{{ $item->member_photo }}" alt="" style="height:350px">
                                </div>
                                <div class="item-content">
                                    <h6>
                                        <a href="{{ route('single.team.details', $item->id) }}">{{ $item->member_name }}</a>
                                    </h6>
                                    <p class="small-text color-main">
                                        {{ $item->member_designation }}
                                    </p>
                                    <p class="social-icons">

                                        @if ($item->facebook_link != '')
                                            <a href="{{ $item->facebook_link }}" class="fa fa-facebook color-icon bg-icon rounded-icon" title="facebook"></a>
                                        @endif

                                        @if ($item->twitter_link != '')
                                        <a href="{{ $item->twitter_link }}" class="fa fa-twitter color-icon bg-icon rounded-icon" title="twitter"></a>
                                        @endif

                                        @if ($item->linkedin_link != '')
                                            <a href="{{ $item->linkedin_link }}" class="fa fa-linkedin color-icon bg-icon rounded-icon" title="linkedin"></a>
                                        @endif

                                        @if ($item->google_plus_link != '')
                                        <a href="{{ $item->google_plus_link }}" class="fa fa-google-plus color-icon bg-icon rounded-icon" title="google"></a>
                                        @endif

                                        @if ($item->youtube_link != '')
                                        <a href="{{ $item->youtube_link }}" class="fa fa-youtube-play  color-icon bg-icon rounded-icon" title="youtube-play"></a>
                                        @endif

                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-lg-block divider-75"></div>
    </section>

@endsection
