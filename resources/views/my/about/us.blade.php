@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
 {{ __('About') }}
@endsection

{{-- Active Menu --}}
@section('about_us')
    active
@endsection

@section('aboutSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('aboutUs')
    spinner-border text-info
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">{{ __('Admin Dashboard') }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item active">
                {{ __('About') }}
            </li>
            <li class="breadcrumb-item active">
                {{ __('Update About Us') }}
            </li>
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
                  <h4 class="card-title">{{ __('Edit About Us') }}</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('about_us_update', $about_us->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <h4>{{ __('Block 1') }}</h4>

                      <div class="form-group">
                        <label  for="icon">{{ __('Icon') }} <span class="text-danger">*</span></label>
                        <input type="file"  class="form-control" name="image1">
                        @error('image1')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon">{{ __('Preview Icon') }}</label>
                        <img width="70" height="70" src="{{ asset('uploads/aboutus') }}/{{ $about_us->image1 }}" alt="">
                      </div>
                      <div class="form-group">
                        <label  for="title">{{ __('Title') }} <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" name="title1" value="{{ $about_us->title1 }}">
                        @error('title1')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="description1">{{ __('Description') }} <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" name="description1" value="{{ $about_us->description1 }}">
                        @error('description1')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                    </div>

                    <div class="form-group">
                      <h4>{{ __('Block 2') }}</h4>
                      <div class="form-group">
                        <label  for="image2">Icon <span class="text-danger">*</span></label>
                        <input type="file"  class="form-control" name="image2">
                        @error('image2')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="image2">{{ __('Preview Icon') }}</label>
                        <img width="70" height="70" src="{{ asset('uploads/aboutus') }}/{{ $about_us->image2 }}" alt="">
                      </div>
                      <div class="form-group">
                        <label  for="title2">{{ __('Title') }} <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" name="title2" value="{{ $about_us->title2 }}">
                        @error('title2')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="description2">{{ __('Description') }} <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" name="description2" value="{{ $about_us->description2 }}">
                        @error('description2')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                    </div>

                    <div class="form-group">
                      <h4>{{ __('Block 3') }}</h4>

                      <div class="form-group">
                        <label  for="image3">{{ __('Icon') }} <span class="text-danger">*</span></label>
                        <input type="file"  class="form-control" name="image3">
                        @error('image3')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="image3">{{ __('Preview Icon') }}</label>
                        <img width="70" height="70" src="{{ asset('uploads/aboutus') }}/{{ $about_us->image3 }}" alt="">
                        @error('image3')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label  for="title3">{{ __('Title') }} <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" name="title3" value="{{ $about_us->title3 }}">
                        @error('title3')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="description3">{{ __('Description') }} <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" name="description3" value="{{ $about_us->description3 }}">
                        @error('description3')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                    </div>

                      <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
  </section>

@endsection
