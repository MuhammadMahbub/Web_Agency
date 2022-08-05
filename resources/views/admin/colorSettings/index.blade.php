@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
   {{ __("Color Settings") }}
@endsection

{{-- Active Menu --}}
@section('colorSettings')
    active
@endsection

@section('ColorSettingSpinner')
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
                {{ __('Color Settings') }}
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
                        <h4 class="card-title">{{ __('Color Settings') }}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('colorSettings.update', $colorSettings->id) }}" method="POST" class="form form-vertical">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="primary_color">{{ __("Theme Color") }}</label>
                                        <input type="color" name="theme_color" value="{{ colorSettings()->theme_color }}" id="theme_color" class="form-control"/>
                                        @error('theme_color')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="primary_color">{{ __('Menu Text Color') }}</label>
                                        <input type="color" name="theme_menu_text_color" value="{{ colorSettings()->theme_menu_text_color }}" id="theme_menu_text_color" class="form-control"/>
                                        @error('theme_menu_text_color')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="primary_color">{{ __('Header Background') }}</label>
                                        <input type="color" name="theme_header_background" value="{{ colorSettings()->theme_header_background }}" id="theme_header_background" class="form-control"/>
                                        @error('theme_header_background')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="primary_color">{{ __('Footer Background') }}</label>
                                        <input type="color" name="theme_footer_background" value="{{ colorSettings()->theme_footer_background }}" id="theme_footer_background" class="form-control"/>
                                        @error('theme_footer_background')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1">{{ __('Submit') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
