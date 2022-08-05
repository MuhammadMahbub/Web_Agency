@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
     {{ __('Review') }}
@endsection

{{-- Active Menu --}}


@section('homeSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('reviewSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">{{ __('Admin Dashboard') }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item ">{{ __('Review') }}</li>
            <li class="breadcrumb-item active">{{ __('Update Review') }}</li>
        </ol>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12 col-12 m-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Review</h4>
            </div>
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('review.update', $review->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-10">
                            <div class="form-group">
                                <label>{{ __('Customer Image') }} </label>
                                <input type="file" name="image" class="form-control">
                                <br>
                                @error('image')
                                  <span style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">{{ __('Preview Image') }}</label>

                                <img width="70" height="70" src="{{ asset('uploads/review') }}/{{ $review->image }}" alt="">
                                <br>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>{{ __("Company Name") }}</label>
                                <input type="text" class="form-control" value="{{ $review->company_name }}" name="company_name"/>
                                @error('company_name')
                                  <span style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>{{ __("Customer Name") }} <span class="text-danger">  *</span></label>
                                <input type="text" value="{{ $review->name }}" name="name" class="form-control">
                                @error('name')
                                  <span style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label">{{ __('Customer Comment') }} <span class="text-danger"> *</span></label>
                                <textarea type="text" name="comment" class="form-control" cols="20" rows="5">{{ $review->comment }}</textarea>
                                @error('comment')
                                  <span style="color:red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1">{{ __('Update Review') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
