@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ __('Services') }}
@endsection

{{-- Active Menu --}}
@section('add_services')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">{{ __("Admin Dashboard") }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item ">
                <a href="{{ route('dashboard') }}">{{ __('View Service') }}</a>
            </li>
            <li class="breadcrumb-item active">{{ __('Edit Services') }}</li>
        </ol>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-8 col-12 m-auto">
        <div class="card">
            @if (session('success'))
                    <br>
                    <div class="alert alert-success m-0">{{ session('success') }}</div>
            @endif
            <div class="card-header">
                <h4 class="card-title">{{ __('Edit Services') }}</h4>
            </div>
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('service_edit_insert', $single_service_data->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">{{ __('Service Icon') }}</label>
                                <input type="file" name="service_icon" class="form-controll">
                                <br>
                                @error('service_icon')
                                  <span style="color:red">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">{{ __('Prview Icon') }}</label>

                                <img width="50" height="50" src="{{ asset('uploads/images/service') }}/{{ $single_service_data->service_icon }}" alt="">
                                <br>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">{{ __('Service Title') }}</label>
                                <input type="text" id="email" class="form-control" name="service_title" value="{{ $single_service_data->service_title }}" />
                                @error('service_title')
                                  <span style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="password">{{ __('Service Details') }}</label>
                                <textarea type="text" name="service_details" class="form-control" id="" cols="20" rows="5">
                                    {{ $single_service_data->service_details }}
                                </textarea>
                                @error('service_details')
                                  <span style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        @foreach ($single_service_data->get_gallery as $gallery)
                           <img src="{{ asset('uploads/gallery_photos') }}/{{ $gallery->gallery_photo }}"
                                alt="No Photo" width="100">
                        @endforeach
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1">{{ __('Edit Services') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
