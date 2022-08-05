@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ __('General Settings') }}
@endsection

@section('generalSettings')
    active
@endsection

@section('generalSettingSpinner')
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
            <li class="breadcrumb-item">{{ __('General Settings') }}</li>
            <li class="breadcrumb-item active">{{ __('Update General Settings') }}</li>
        </ol>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12 col-12 m-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ __('Update General Settings') }}</h4>
            </div>
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('generalSettings.update', $get_generel_settings_data->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-12">

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="logo"> {{ __("Site Logo") }} </label>
                                    <input type="file"name="site_logo" class="form-control">
                                    <br>
                                    @error('site_logo')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">{{ __('Preview Logo') }}</label>

                                    <img height="100" src="{{ asset('uploads/images/generalSetting') }}/{{ $get_generel_settings_data->site_logo }}" alt="not found">
                                    <br>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="footer_logo"> {{ __('Footer Logo') }} </label>
                                    <input type="file" name="footer_logo" class="form-control">
                                    <br>
                                    @error('footer_logo')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">{{ __('Preview Logo') }}</label>

                                    <img height="100" src="{{ asset('uploads/images/generalSetting') }}/{{ $get_generel_settings_data->footer_logo }}" alt="not found">
                                    <br>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="favicon">{{ __("Favicon Icon") }}</label>
                                    <input type="file" name="favicon" class="form-control">
                                    <br>
                                    @error('favicon')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">{{ __("Preview Icon") }}</label>

                                    <img height="100" src="{{ asset('uploads/images/generalSetting') }}/{{ $get_generel_settings_data->favicon }}" alt="not found">
                                    <br>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="phone">{{ __('Phone') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="phone" class="form-control" name="phone" value="{{ $get_generel_settings_data->phone }}" />
                                    @error('phone')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="col-12">
                                <div class="form-group">
                                    <label for="common_button_text">Common Button <span class="text-danger">*</span></label>
                                    <input type="hidden" id="common_button_text" class="form-control" name="common_button_text" value="{{ $get_generel_settings_data->common_button_text }}" />
                                    @error('common_button_text')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> --}}

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="common_button_text">{{ __("Arrow Icon") }} <span class="text-danger">*</span> </label> [  <span><a href="https://fontawesome.com/icons" target="_blank">{{ __('Click Here') }}</a> {{ __("for icon") }} ]</span>
                                    <input type="text" id="arrow_icon" class="form-control" name="arrow_icon" value="{{ $get_generel_settings_data->arrow_icon }}" />
                                    @error('arrow_icon')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="copyright">{{ __('Copyright') }} ( &copy; ) <span class="text-danger">*</span></label>
                                    <input type="text" id="copyright" class="form-control" name="copyright" value="{{ $get_generel_settings_data->copyright }}" />
                                    @error('copyright')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
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
@endsection
