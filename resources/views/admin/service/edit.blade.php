@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ __('Services') }}
@endsection

@section('serviceList')
    active
@endsection

@section('serviceSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('serviceSpinnerList')
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
            <li class="breadcrumb-item ">{{ __('Service') }}</li>
            <li class="breadcrumb-item active">
                <a href="{{ route('service.index') }}">{{ __('Service List') }}</a>
            </li>
            <li class="breadcrumb-item active">{{ _('Update Service') }}</li>
        </ol>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12 col-12 m-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ __('Update Service') }}</h4>
            </div>
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('service.update', $single_service_data->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-12">
                            <div class="form-group">
                                <label for="service_name">{{ __("Name") }} <span class="text-danger">*</span></label>
                                <input type="text" id="service_name" class="form-control" name="service_name" value="{{ $single_service_data->service_name }}" />
                                @error('service_name')
                                  <span style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="service_short_description">{{ __('Short Description') }} <span class="text-danger">*</span></label>
                                <textarea type="text" name="service_short_description" class="form-control" id="service_short_description" cols="20" rows="3">{{ $single_service_data->service_short_description }}</textarea>
                                @error('service_short_description')
                                  <span style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="service_long_description">{{ __('Long Description') }}</label>
                                <input type="hidden" class="form-controll" name="service_long_description" id="service_long_description" value="{{ $single_service_data->service_long_description }}">
                                <trix-editor input="service_long_description" style="min-height:12rem"></trix-editor>
                                @error('service_long_description')
                                  <span style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">

                                <div class="form-group">
                                    <label for="service_image">{{ __('Icon') }}</label>
                                    <div class="custom-file">
                                        <input type="file" id="service_icon" class="custom-file-input" name="service_icon" style="cursor:pointer">
                                        <label for="service_icon" class="custom-file-label"> Choose icon </label>

                                        @error('service_icon')
                                        <span style="color:red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            <div class="form-group">
                                <label for="name">{{ __('Prview Icon') }} </label>
                                <img width="70" height="70" src="{{ asset('uploads/images/service') }}/{{ $single_service_data->service_icon }}" alt="">
                                <br>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="service_image">{{ __('Image') }} </label>
                                <div class="custom-file">
                                    <input type="file" id="service_image" class="custom-file-input" name="service_image" style="cursor:pointer">
                                    <label for="service_image" class="custom-file-label"> {{ __('Choose Image') }} </label>

                                    @error('service_image')
                                    <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">{{ __('Prview Image') }}</label>

                                <img width="100" height="70" src="{{ asset('uploads/images/service') }}/{{ $single_service_data->service_image }}" alt="">
                                <br>

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
