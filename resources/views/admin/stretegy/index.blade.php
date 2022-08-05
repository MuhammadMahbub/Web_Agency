@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ __('Stretegy') }}
@endsection

{{-- Active Menu --}}
@section('marketList')
    active
@endsection

@section('homeSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection
@section('marketSpinner')
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
            <li class="breadcrumb-item ">{{ __('B2B Marketing') }}</li>
            <li class="breadcrumb-item active">{{ __('Update') }}</li>
        </ol>
    </div>
@endsection

@section('content')
   <div class="row">
        <div class="col-md-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <!-- <h4 class="card-title">Update [ Home-> Section 6 ]</h4> -->
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('m_stretegy.update',$data->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">{{ __('Title') }} <span class="text-danger">  *</span></label>
                                    <input type="text" id="title" class="form-control" name="title" value="{{ $data->title }}" />
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">{{ __('Description') }} <span class="text-danger">  *</span></label>
                                    <textarea  type="text" id="description" class="form-control" name="description" col="30" rows="3">{{ $data->description }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
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
