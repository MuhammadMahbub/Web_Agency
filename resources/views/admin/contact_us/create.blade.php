@extends('layouts.dashboard')

{{-- title --}}
@section('title')
 {{ __("Contact Us") }}
@endsection

{{-- menu active --}}
@section('ContactUsCreate')
    active
@endsection

@section('contactUsSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('contactUsSpinnerCreate')
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
       <li class="breadcrumb-item ">{{ __("Contact Us") }}</li>
       <li class="breadcrumb-item active">{{ __("Update Contact Us Top Section") }}</li>
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
                  <h4 class="card-title">{{ __('Edit Contact Us Top Section') }}</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('contact_us.update', $all_contactus_data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <h4>{{ __('Block 1') }}</h4>

                      <div class="form-group">
                        <label  for="icon">{{ __('Icon') }} <span class="text-danger">*</span></label>
                        <input type="file"  class="form-control" name="contact_icon1">
                        @error('contact_icon1')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon">{{ __('Preview Icon') }}</label>
                        <img width="70" height="70" src="{{ asset('uploads/images/contact_us') }}/{{ $all_contactus_data->contact_icon1 }}" alt="">
                        @error('contact_icon')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label  for="title">{{ __("Title") }} <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" name="contact_title1" value="{{ $all_contactus_data->contact_title1 }}">
                        @error('contact_title1')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="title">{{ __('Phone one') }} <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" name="contact_support" value="{{ $all_contactus_data->contact_support }}">
                        @error('contact_support')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="title">{{ __("Phone two") }}</label>
                        <input type="text" class="form-control" name="new_accounts" value="{{ $all_contactus_data->new_accounts }}">
                        @error('new_accounts')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                    </div>

                    <div class="form-group">
                      <h4>{{ __('Block 2') }}</h4>
                      <div class="form-group">
                        <label  for="icon">Icon <span class="text-danger">*</span></label>
                        <input type="file"  class="form-control" name="contact_icon2">
                        @error('contact_icon2')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon">{{ __('Preview Icon') }}</label>
                        <img width="70" height="70" src="{{ asset('uploads/images/contact_us') }}/{{ $all_contactus_data->contact_icon2 }}" alt="">
                        @error('contact_icon2')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label  for="title">{{ __('Title') }} <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" name="contact_title2" value="{{ $all_contactus_data->contact_title2 }}">
                        @error('contact_title2')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label  for="title">{{ __('Email one') }} <span class="text-danger">*</span></label>
                        <input type="email" id="title" class="form-control" name="email_one" value="{{ $all_contactus_data->email_one }}">
                        @error('email_one')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="title">{{ __('Email Two') }}</label>
                        <input type="email" id="title" class="form-control" name="email_two" value="{{ $all_contactus_data->email_two }}">
                        @error('email_two')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                    </div>

                    <div class="form-group">
                      <h4>Block 3</h4>

                      <div class="form-group">
                        <label  for="icon">{{ __("Icon") }} <span class="text-danger">*</span></label>
                        <input type="file"  class="form-control" name="contact_icon3">
                        @error('contact_icon3')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon">{{ __("Preview Icon") }}</label>
                        <img width="70" height="70" src="{{ asset('uploads/images/contact_us') }}/{{ $all_contactus_data->contact_icon3 }}" alt="">
                        @error('contact_icon3')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label  for="title">{{ __("Title") }} <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" name="contact_title3" value="{{ $all_contactus_data->contact_title3 }}">
                        @error('contact_title3')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="title">{{ __('Address line one') }}<span class="text-danger">*</span></label>
                        <input type="text" id="title" class="form-control" name="contact_address" value="{{ $all_contactus_data->contact_address }}">
                        @error('contact_address')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="contact_address_two">{{ __('Address line two') }} </label>
                        <input type="text" id="contact_address_two" class="form-control" name="contact_address_two" value="{{ $all_contactus_data->contact_address_two }}">
                        @error('contact_address_two')
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
