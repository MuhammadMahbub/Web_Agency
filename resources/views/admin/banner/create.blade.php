@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
   {{ __('Banners') }}
@endsection

{{-- Active Menu --}}
@section('bannerCreate')
    active
@endsection

@section('homeSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('bannerSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('bannerSpinnerCreate')
    spinner-border text-info
@endsection



{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">x{{ __('Admin Dashboard') }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item">{{ __('Banner') }}</li>
            <li class="breadcrumb-item active">{{ __('Create Banner') }}</li>
        </ol>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12 col-12 m-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ __('Create Banner') }}</h4>
            </div>
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('banner.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group" id="image">
                                <label for="image">{{ __('Image') }} <span class="text-danger"> *</span></label>
                                <input type="file" class="form-control" name="image"/>
                                @error('image')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">{{ __('Title One') }} <span class="text-danger"> *</span></label>
                                <input type="text" name="title_one" class="form-control" value="{{ old('title_one') }}">
                                @error('title_one')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title_two">{{ __('Title Two') }} <span class="text-danger"> *</span></label>
                                <input type="text" name="title_two" class="form-control" value="{{ old('title_two') }}">
                                @error('title_two')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="title_three">{{ __('Title Three') }} <span class="text-danger"> *</span></label>
                                <input type="text" name="title_three" class="form-control" value="{{ old('title_three') }}">
                                @error('title_three')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="button_text">{{ __('Button Text') }} <span class="text-danger"> *</span></label>
                                <input type="text" name="button_text" class="form-control" value="{{ old('button_text') }}">
                                @error('button_text')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="button_url">{{ __('Button URL') }} </label>
                                <input type="text" name="button_url" class="form-control" value="{{ old('button_url') }}">
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1">{{ __('Add Banner') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

{{-- <script>

    $('document').ready(function(){
            $('#image').hide();
            $('#video').hide();
        $('#videobtn').on('click', function(){
            $('#video').show();
            $('#videobtn').show();
            $('#image').hide();
            $('#imagebtn').hide();
        });
        $('#imagebtn').on('click', function(){
            $('#image').show();
            $('#imagebtn').show();
            $('#video').hide();
            $('#videobtn').hide();
        });
    });

</script> --}}

@endsection
