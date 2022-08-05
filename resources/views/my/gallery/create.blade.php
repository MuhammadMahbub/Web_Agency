@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ __('Gallery') }}
@endsection

{{-- Active Menu --}}
@section('gallery')
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
                    <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>{{ __('Gallery Name') }} <span class="text-danger">*</span> </label>
                            <select name="gallery_name_id" class="form-control">
                                <option value>{{ __('Gallery Name') }}</option>
                                @foreach ($gallery_names as $names)
                                    <option value="{{ $names->id }}">{{ $names->gallery_name }}</option>
                                @endforeach
                            </select>
                            @error('gallery_title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gallery_title">{{ __('Title') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="gallery_title" name="gallery_title">
                        </div>
                        @error('gallery_title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label>{{ __('Gallery Photos') }} <span class="text-danger">*</span></label>
                            <input type="file" class="form-control"
                                name="gallery_photo[]" value="{{ old('gallery_photo') }}" multiple>

                        </div>
                        @error('gallery_photo[]')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                    </form>
                </div>
            </div>
          </div>
         </div>
        </div>
</div>
@endsection
