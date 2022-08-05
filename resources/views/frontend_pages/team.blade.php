@extends('frontend_master.frontend_master')

@section('frontend_title', 'team')

@section('TeamActive')
active
@endsection

@if ($all_teams_data->count() > 0)
@section('frontend_content')
    <section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top: 120px">
                    <h1>{{ titlesettings()->team_title }}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('root') }}">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            {{ titlesettings()->team_title }}
                        </li>
                    </ol>
                    <div class="divider-15 d-none d-xl-block"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="ls s-pt-75 s-pb-100 s-pb-lg-130 team">
        <div class="divider-40 d-none d-xl-block"></div>
        <div class="container">
            <div class="row c-mb-30">
                <!-- .col-* -->

                @foreach ($all_teams_data as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="vertical-item ls ms content-padding text-center">
                            <div class="item-media" >
                                <img src="{{ asset('uploads/images/team') }}/{{ $item->member_photo }}" alt="">
                            </div>
                            <div class="item-content">
                                <h6>
                                    <a href="{{ route('single.team.details', $item->team_slug) }}">{{ $item->member_name }}</a>
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
                    </div>
                @endforeach


                <div class="d-none d-lg-block divider-75"></div>
            </div>

        </div>
    </section>
@endsection
@endif
