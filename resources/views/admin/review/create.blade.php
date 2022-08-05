@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ __("Reviews") }}
@endsection

{{-- Active Menu --}}
@section('reviewCreate')
    active
@endsection


@section('homeSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('reviewSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('reviewSpinnerCreate')
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
            <li class="breadcrumb-item">{{ __('Review') }}</li>
            <li class="breadcrumb-item active">{{ __('Create Review') }}</li>
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
                <h4 class="card-title">{{ __('Create Review') }}</h4>
            </div>
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('review.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">{{ __('Customer Image') }}</label>
                                <input type="file" name="image" class="form-control">
                                <br>
                                @error('image')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">{{ __("Company Name") }} </label>
                                <input type="text" id="email" class="form-control" name="company_name" value="{{ old('company_name') }}"/>
                                @error('company_name')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="password">{{ __("Customer Name") }} <span class="text-danger"> *</span></label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                @error('name')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="password">{{ __('Customer Comment') }} <span class="text-danger"> *</span></label>
                                <textarea type="text" name="comment" class="form-control" id="" cols="20" rows="5" value="{{ old('comment') }}"></textarea>
                                @error('comment')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1">{{ __('Add Review') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
