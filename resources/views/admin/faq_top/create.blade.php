@extends('layouts.dashboard')

{{-- title --}}
@section('title')
   {{ __('Faq') }}
@endsection

{{-- menu active --}}
@section('FaqTopCreate')
    active
@endsection

@section('faqSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('faqSpinnerTopCreate')
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
            <li class="breadcrumb-item ">{{ __('Faq') }}</li>
            <li class="breadcrumb-item active">{{ __('Create Faq Top Section') }}</li>
        </ol>
    </div>
@endsection

{{-- content --}}
@section('content')
<section class="banner-main-section" id="main">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">{{ __('Create Faq') }}</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('faq_top.update', $all_faq_top_content->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div>
                        <h3>{{ __("Block 1") }}</h3>
                        <div class="form-group">
                            <label  for="icon">{{ __('Title') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title_one" name="title_one" value="{{ $all_faq_top_content->title_one }}">
                            @error('title_one')
                                <span class="text-danger"> {{ $message }} *</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label  for="icon">{{ __("Short Description") }} <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="description_one" id="description_one" cols="30" rows="3">{{ $all_faq_top_content->description_one }}</textarea>
                            @error('description_one')
                                <span class="text-danger"> {{ $message }} *</span>
                            @enderror
                          </div>
                    </div>

                    <div>
                        <h3>{{ __("Block 2") }}</h3>
                        <div class="form-group">
                            <label  for="icon">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title_two" name="title_two" value="{{ $all_faq_top_content->title_two }}">
                            @error('title_two')
                                <span class="text-danger"> {{ $message }} *</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label  for="icon">{{ __('Short Description') }} <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="description_two" id="description_two" cols="30" rows="3">{{ $all_faq_top_content->description_two }}</textarea>
                            @error('description_two')
                                <span class="text-danger"> {{ $message }} *</span>
                            @enderror
                          </div>
                    </div>

                    <div>
                        <h3>{{ __('Block 3') }}</h3>
                        <div class="form-group">
                            <label  for="icon">{{ __("Title") }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title_three" name="title_three" value="{{ $all_faq_top_content->title_three }}">
                            @error('title_three')
                                <span class="text-danger"> {{ $message }} *</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label  for="icon">{{ __('Short Description') }} <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="description_three" id="description_three" cols="30" rows="3">{{ $all_faq_top_content->description_three }}</textarea>
                            @error('description_three')
                                <span class="text-danger"> {{ $message }} *</span>
                            @enderror
                          </div>
                    </div>

                      <button type="submit" class="btn btn-primary">{{ __("Update") }}</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>
@endsection

