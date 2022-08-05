@extends('layouts.dashboard')

{{-- title --}}
@section('title')
   {{ __('Testimonials') }}
@endsection

{{-- menu active --}}
@section('TestimonialCreate')
    active
@endsection

@section('testimonialSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('testimonialSpinnerCreate')
    spinner-border text-info
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">{{ __("Admin Dashboard") }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item ">{{ __('Testimonials') }}</li>
            <li class="breadcrumb-item active">{{ __("Create Testimonial") }}</li>
        </ol>
    </div>
@endsection

{{-- content --}}
@section('content')
<section class="banner-main-section" id="main">
          <div class="row">
            <div class="col-lg-12">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">{{ __('Create Testimonial') }}</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                      <div class="form-group">
                        <label  for="icon">{{ __('User Name') }} <span class="text-danger">*</span> </label>
                        <input type="text"  class="form-control" name="user_name" value='{{ old('user_name') }}'>
                        @error('user_name')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon">{{ __('User Review') }} <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" name="user_review" value='{{ old('user_review') }}'>
                        @error('user_review')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon">{{ __("User Photo") }} <span class="text-danger">*</span></label>
                        <input type="file"  class="form-control" name="user_photo">
                        @error('user_photo')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </section>

@endsection

