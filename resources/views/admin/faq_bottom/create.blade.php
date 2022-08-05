@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ __('Faq') }}
@endsection

{{-- menu active --}}
@section('FaqUnanserCreate')
    active
@endsection

@section('faqSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('faqSpinnerBottomCreate')
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
            <li class="breadcrumb-item active">{{ __('Create Faq Bottom Section') }}</li>
        </ol>
    </div>
@endsection

{{-- content --}}
@section('content')
<section>
        <div class="col-12">
          <div class="row ">
            <div class="col-lg-12">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">{{ __('Create Faq Bottom') }} </h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('faq_unanswer.update', $faq_unanswer_data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div>
                        <div class="form-group">
                            <label  for="title">{{ __('Title') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $faq_unanswer_data->title }}">
                            @error('title')
                                <span class="text-danger"> {{ $message }} *</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label  for="button_text">{{ __('Button Text') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="button_text" name="button_text" value="{{ $faq_unanswer_data->button_text }}">
                            @error('button_text')
                                <span class="text-danger"> {{ $message }} *</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="button_url">{{ __('Button URL') }}</label>
                            <input type="text" name="button_url" class="form-control"  value="{{ $faq_unanswer_data->button_url }}">
                        </div>
                        <div class="form-group col-12">


                        </div>

                        <div class="form-group">
                          <label  for="icon">{{ _('Background Image') }} <span class="text-danger">*</span></label>
                          <input type="file"  class="form-control" name="background_img" value="{{ old('background_img') }}">
                          @error('background_img')
                              <span class="text-danger"> {{ $message }} *</span>
                          @enderror
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                              <label for="name">{{ __("Preview Image") }}</label>

                              <img width="70" height="70" src="{{ asset('uploads/images/faq_bottom_bg') }}/{{ $faq_unanswer_data->background_img }}" alt="">
                              <br>

                          </div>
                      </div>

                    </div>
                      <button type="submit" class="btn btn-primary">{{ __("Update") }}</button>

                    </form>
                  </div>
                </div>
              </div>
            </div>

  </section>
@endsection

