@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ __("Testimonials") }}
@endsection

@section('testimonialSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">{{ __('Admin Dashboard') }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item">{{ __('Testimonials') }}</li>
            <li class="breadcrumb-item">
                <a href="{{ route('testimonial.index') }}">{{ __('Testimonial List') }}</a>
            </li>
            <li class="breadcrumb-item active">{{ __('Update Testimonial') }}</li>
        </ol>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12 col-12 m-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ __('Edit Testimonial') }}</h4>
            </div>
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('testimonial.update', $testimonial->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-12">

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">{{ __('User Name') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="email" class="form-control" name="user_name" value="{{ $testimonial->user_name }}" />
                                    @error('user_name')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">{{ __('User Review') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="email" class="form-control" name="user_review" value="{{ $testimonial->user_review }}" />
                                    @error('user_review')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">{{ __('User Photo') }} <span class="text-danger">*</span></label>
                                    <input type="file" name="user_photo" class="form-control">
                                    <br>
                                    @error('user_photo')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">{{ __('Preview Photo') }}</label>

                                    <img width="100" height="70" src="{{ asset('uploads/images/testimonial') }}/{{ $testimonial->user_photo }}" alt="">
                                    <br>

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
