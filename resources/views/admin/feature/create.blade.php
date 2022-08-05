@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ __('Features') }}
@endsection

{{-- Active Menu --}}
@section('featureCreate')
    active
@endsection

@section('featuresSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('featuresSpinnerCreate')
    spinner-border text-info
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">{{ __('Admin Dashboard') }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __("Home") }}</a>
            </li>
            <li class="breadcrumb-item">{{ __("Features") }}</li>
            <li class="breadcrumb-item active">{{ __("Create Feature") }}</li>
        </ol>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12 col-12 m-auto">
        <div class="card">
            @if (session('success'))
                    <br>
                    <div class="alert alert-success m-0">{{ session('success') }}</div>
            @endif
            <div class="card-header">
                <h4 class="card-title">{{ __('Create Feature') }}</h4>
            </div>
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('feature.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">{{ __("Title") }} <span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                                @error('title')
                                  <span style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="description">{{ __("Description") }} <span class="text-danger">*</span></label>
                                <textarea type="text" name="description" class="form-control" cols="30" rows="3" value="{{ old('description') }}"></textarea>
                                @error('description')
                                  <span style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1">{{ __('Add Feature') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
