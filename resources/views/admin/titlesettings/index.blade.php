@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
   {{ __('Title Settings') }}
@endsection

{{-- Active Menu --}}
@section('titleSettings')
    active
@endsection

@section('titleSettingSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection



{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">{{ __("Admin Dashboard") }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __("Home") }}</a>
            </li>
            <li class="breadcrumb-item active">
                {{ __("Title Settings") }}
            </li>
        </ol>
    </div>
@endsection

{{-- Page Content --}}
@section('content')
    <section id="basic-vertical-layouts">
        <div class="row">
            <div class="col-md-12 col-12 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('Title Settings') }}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('titleSettings.update', titlesettings()->id) }}" method="POST" class="form form-vertical">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="about_title">{{ __('About Title') }}</label>
                                        <input type="text" name="about_title" value="{{ titlesettings()->about_title }}" id="about_title" class="form-control"/>
                                        @error('about_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="service_title">{{ __("Service Title") }}</label>
                                        <input type="text" name="service_title" value="{{ titlesettings()->service_title }}" id="service_title" class="form-control"/>
                                        @error('service_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="service_details_title">{{ __('Service Details Title') }}</label>
                                        <input type="text" name="service_details_title" value="{{ titlesettings()->service_details_title }}" id="service_details_title" class="form-control"/>
                                        @error('service_details_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="blog_title">{{ __('Blog Title') }}</label>
                                        <input type="text" name="blog_title" value="{{ titlesettings()->blog_title }}" id="blog_title" class="form-control"/>
                                        @error('blog_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="blog_details_title">{{ __('Blog Details Title') }}</label>
                                        <input type="text" name="blog_details_title" value="{{ titlesettings()->blog_details_title }}" id="blog_details_title" class="form-control"/>
                                        @error('blog_details_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="team_title">{{ __("Team Title") }}</label>
                                        <input type="text" name="team_title" value="{{ titlesettings()->team_title }}" id="team_title" class="form-control"/>
                                        @error('team_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="team_details_title">{{ __('Team Details Title') }}</label>
                                        <input type="text" name="team_details_title" value="{{ titlesettings()->team_details_title }}" id="team_details_title" class="form-control"/>
                                        @error('team_details_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="testimonial_title">{{ __('Testimonial Title') }}</label>
                                        <input type="text" name="testimonial_title" value="{{ titlesettings()->testimonial_title }}" id="testimonial_title" class="form-control"/>
                                        @error('testimonial_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="contact_title">{{ __('Contact Title') }}</label>
                                        <input type="text" name="contact_title" value="{{ titlesettings()->contact_title }}" id="contact_title" class="form-control"/>
                                        @error('contact_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="faq_title">{{ __('FAQ Title') }}</label>
                                        <input type="text" name="faq_title" value="{{ titlesettings()->faq_title }}" id="faq_title" class="form-control"/>
                                        @error('faq_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="feature_title">{{ __('Feature Title') }}</label>
                                        <input type="text" name="feature_title" value="{{ titlesettings()->feature_title }}" id="feature_title" class="form-control"/>
                                        @error('feature_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="gallery_title">{{ __('Gallery Title') }}</label>
                                        <input type="text" name="gallery_title" value="{{ titlesettings()->gallery_title }}" id="gallery_title" class="form-control"/>
                                        @error('gallery_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1">{{ __('Update') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
