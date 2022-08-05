@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ __('Home') }}
@endsection

{{-- Active Menu --}}
@section('startProjectList')
    active
@endsection
@section('homeSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('projectSpinner')
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
            <li class="breadcrumb-item ">{{ __('Start project') }}</li>
            <li class="breadcrumb-item active">{{ __('Update') }}</li>
        </ol>
    </div>
@endsection

@section('content')
   <div class="row">
        <div class="col-md-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <!-- <h4 class="card-title">Update Section</h4> -->
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('startProject.update', $data->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">{{ __('Title') }} <span class="text-danger">  *</span></label>
                                    <input type="text" id="title" class="form-control" name="title" value="{{ $data->title }}" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_title"> {{ __('Short Description') }} <span class="text-danger">  *</span></label>
                                    <textarea type="text" name="meta_title" id="" cols="30" rows="5" class="form-control">{{ $data->meta_title }}</textarea>
                            </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="button_text">{{ __('Button') }}<span class="text-danger"> *</span></label>
                                    <input type="text" id="title" class="form-control" name="button_text" value="{{ $data->button_text }}" />
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="button_text">{{ __('Button Text') }} <span class="text-danger"> *</span></label>
                                    <input type="text" name="button_text" class="form-control"  value="{{ $data->button_text }}">
                                    @error('button_text')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-12">
                                <label for="button_url">{{ __('Button URL') }}</label>
                                    <input type="text" name="button_url" class="form-control"  value="{{ $data->button_url }}">
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mr-1">{{ __('Update') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   </div>
@endsection
