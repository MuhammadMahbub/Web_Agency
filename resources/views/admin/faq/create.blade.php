@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ __('Faq') }}
@endsection

{{-- menu active --}}
@section('FaqCreate')
    active
@endsection

@section('faqSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('faqSpinnerCreate')
    spinner-border text-info
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">{{ __("Admin Dashboard") }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __("Home") }}</a>
            </li>
            <li class="breadcrumb-item ">{{ _("Faq") }}</li>
            <li class="breadcrumb-item active">{{ __("Create Faq") }}</li>
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
                  <form action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                      <div class="form-group">
                        <label  for="icon">{{ __("Question") }} <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" name="faq_question" value='{{ old('faq_question') }}'>
                        @error('faq_question')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon">{{ __('Answer') }} <span class="text-danger">*</span></label>
                        <input type="hidden" id="faq_answer"  class="form-control" name="faq_answer" value='{{ old('faq_answer') }}'>
                        <trix-editor input="faq_answer" style="min-height: 12rem"></trix-editor>
                        @error('faq_answer')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>


                      <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>

@endsection

