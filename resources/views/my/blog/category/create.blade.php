@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
     {{ __('Blog Category') }}
@endsection

{{-- Active Menu --}}
@section('blogcategory')
    active
@endsection

@section('blogSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('blogCategoryList')
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
                {{ __("Blog") }}
            </li>
            <li class="breadcrumb-item active">
                {{ __("Blog Category") }}
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
            <h4 class="card-title">{{ __('Create Category') }}</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('blogcategory.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="category_name">{{ __('Category Name') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="category_name" name="category_name">
                </div>
                @error('category_name')
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
