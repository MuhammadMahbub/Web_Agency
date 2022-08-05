@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
  {{ __('About') }}
@endsection

{{-- Active Menu --}}
@section('about_header')
    active
@endsection


@section('aboutSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('aboutHeader')
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
            <li class="breadcrumb-item active">
                {{ __('About') }}
            </li>
            <li class="breadcrumb-item active">
                {{ __('Create About Header') }}
            </li>
        </ol>
    </div>
@endsection

@section('content')
<section class="banner-main-section" id="main">
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow">
          <div class="card-header">
            <h4 class="card-title">{{ __('Create About Header') }}</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('about_header_update', $about_header->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="heading">{{ __('Title') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="heading" name="heading"
                        value="{{ $about_header->heading }}">
                    @error('heading')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">{{ __('Name') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $about_header->name }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="post">{{ __('Designation') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="post" name="post" value="{{ $about_header->post }}">
                    @error('post')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-4">{{ __('Update') }}</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</section>
@endsection
