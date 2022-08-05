@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ __('Users') }}
@endsection

{{-- Active Menu --}}
@section('usersCreate')
    active
@endsection

@section('userSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('userSpinnerCreate')
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
            <li class="breadcrumb-item ">{{ __('Users') }}</li>
            <li class="breadcrumb-item active">{{ __('Create') }}</li>
        </ol>
    </div>
@endsection

@section('content')
   <div class="row">
        <div class="col-md-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('Create User') }}</h4>
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">{{ __('Full Name') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name" />
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">{{ __('Email') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" />
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password">{{ __("Password") }} <span class="text-danger">*</span></label>
                                    <input type="password" id="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
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
@endsection
