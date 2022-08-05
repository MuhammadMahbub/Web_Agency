@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ __('Company') }}
@endsection

{{-- Active Menu --}}
@section('usersCreate')
    active
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">{{ __('Admin Dashboard') }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item ">{{ __('Test') }}</li>
            <li class="breadcrumb-item active">{{ __('Create') }}</li>
        </ol>
    </div>
@endsection

@section('content')
   <div class="row">
        <div class="col-md-8 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('Create Test') }}</h4>
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('tests.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input type="text" id="name" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" />
                                    @error('name')
                                      <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">{{ __("Image") }}</label>
                                    <input type="file" id="email" class="form-control" name="image" />
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
