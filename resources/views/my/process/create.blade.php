@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
   {{ __('Market Planning') }}
@endsection

{{-- Active Menu --}}
@section('processCreate')
    active
@endsection


@section('homeSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('processSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('processSpinnerCreate')
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
                {{ __('Market Planning') }}
            </li>
            <li class="breadcrumb-item active">
                {{ __('Create Market Planning') }}
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
            <!-- <h4 class="card-title">Create M.Planning</h4> -->
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('process.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">{{ __("Title") }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="description">{{ __("Description") }} <span class="text-danger">*</span></label>
                    <textarea rows="5" type="text" id="descriptioin" class="form-control" name="description" >{{ old('description') }}</textarea>
                </div>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label>{{ __('Photo') }} <span class="text-danger">*</span></label>
                    <input type="file" id="process_photo" class="form-control" name="process_photo">
                </div>
                <div>
                    <img width="200" id="output">
                </div>
                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</section>
@endsection
