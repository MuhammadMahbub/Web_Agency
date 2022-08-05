
@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
   {{ __('Gallery') }}
@endsection

{{-- Active Menu --}}
@section('gallery_name')
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
            <li class="breadcrumb-item active">
                {{ __('Gallery') }}
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
            <h4 class="card-title">{{ __('Create Gallery') }}</h4>
          </div>
          <div class="card-body">
            <div class="row">
                <div class="col-12">
            <form method="POST" action="{{ route('gallery_name.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="gallery_name">{{ __('Gallery Name') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="gallery_name" name="gallery_name">
                </div>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</section>
@endsection
