@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
     {{ __('Button Settings') }}
@endsection

{{-- Active Menu --}}
@section('buttonSettings')
    active
@endsection

@section('buttonSettingsSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">{{ __("Admin Dashboard") }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item active">
                {{ __('Button Settings') }}
            </li>
        </ol>
    </div>
@endsection

@section('content')
<section class="banner-main-section" id="main">
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow">
          <div class="card-header">
            <h4 class="card-title">{{ __("Update Buttons") }}</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('button.update', $button->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @if (strpos(url()->previous(), 'admin/process'))
                    <div class="form-group">
                        <label for="process_btn_text">{{ __('M. Planning Button Text') }}<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="process_btn_text" name="process_btn_text"
                            value="{{ $button->process_btn_text }}">
                    </div>
                    <div class="form-group">
                        <label for="process_btn_url">{{ __('M. Planning Button Url') }}</label>
                        <input type="text" class="form-control" id="process_btn_url" name="process_btn_url"
                            value="{{ $button->process_btn_url }}">
                    </div>
                @endif

                @if (strpos(url()->previous(), 'admin/about/back/img'))
                    <div class="form-group">
                        <label for="about_btn_text">{{ __('About Button Text') }}<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="about_btn_text" name="about_btn_text"
                            value="{{ $button->about_btn_text }}">
                    </div>
                    <div class="form-group">
                        <label for="about_btn_url">{{ __('About Button Url') }}</label>
                        <input type="text" class="form-control" id="about_btn_url" name="about_btn_url"
                            value="{{ $button->about_btn_url }}">
                    </div>
                @endif

                @if (strpos(url()->previous(), 'admin/buyNow'))
                    <div class="form-group">
                        <label for="buy_btn_text">{{ __("Modern Marketing Button Text") }}<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="buy_btn_text" name="buy_btn_text"
                            value="{{ $button->buy_btn_text }}">
                    </div>
                    <div class="form-group">
                        <label for="buy_btn_url">{{ __('Modern Marketing Button Url') }}</label>
                        <input type="text" class="form-control" id="buy_btn_url" name="buy_btn_url"
                            value="{{ $button->buy_btn_url }}">
                    </div>
                @endif

                <button type="submit" class="btn btn-primary mt-4">{{ __('Update') }}</button>
                <a href="{{ redirect()->getUrlGenerator()->previous() }}" class="btn btn-primary mt-4">{{ __('Back') }}</a>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection

