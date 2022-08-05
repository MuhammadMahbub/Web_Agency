@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ __('Home') }}
@endsection

{{-- Active Menu --}}
@section('buyNowList')
    active
@endsection

@section('buySpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('homeSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">{{ __('Admin Dashboard') }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __("Home") }}</a>
            </li>
            <li class="breadcrumb-item">{{ __('Modern Marketing') }}</li>
            <li class="breadcrumb-item active">{{ __('Update') }}</li>
        </ol>
    </div>
@endsection

@section('content')

<div class="row justify-content-center">
    <div class="col-9">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            @foreach ($datas as $data)
                    <li class="nav-item">
                        <a class="nav-link {{ $loop->first ? "active" : "" }}" id="pills-tab-{{ $data->id }}" data-toggle="pill" href="#pills-{{ $data->id }}" role="tab" aria-controls="pills-{{ $data->id }}" aria-selected="{{ $loop->first ? "true" : "false" }}">{{__('Block')}} {{ $data->id }}</a>
                    </li>
            @endforeach
        </ul>
    </div>
    <div class="col-3 text-right">
        <a class="btn btn-info" href="{{ route('button.index') }}">{{ __('Update Common Button') }}</a>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="tab-content" id="pills-tabContent">
            @foreach ($datas as $data)
                <div class="tab-pane fade {{ $loop->first ? "show active" : "" }}" id="pills-{{ $data->id }}" role="tabpanel" aria-labelledby="pills-tab-{{ $data->id }}">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form class="form form-vertical" action="{{ route('buyNow.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="image">{{ __('Background Icon') }}<span class="text-danger">  *</span></label>
                                            <input type="file" class="form-control" name="image"/>
                                            @error('image')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <img src="{{ asset('uploads/buyNow') }}/{{ $data->image }}" alt="image not found !" width="70" height="70">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="title">{{ __('Title') }}<span class="text-danger">  *</span></label>
                                            <input type="text" id="title" class="form-control" name="title" value="{{ $data->title }}" />
                                            @error('title')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">{{ __("Description") }} <span class="text-danger">  *</span></label>
                                            <textarea id="description" class="form-control" name="description" cols="10" rows="3">{{ $data->description }}</textarea>
                                            @error('description')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="buy_now_link">{{ __('Buy Now Link') }}<span class="text-danger">  *</span></label>
                                            <input type="text" id="buy_now_link" class="form-control" name="buy_now_link" value="{{ $data->buy_now_link }}" />
                                            @error('buy_now_link')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="buy_now_url">{{ __('Buy Now Url') }}</label>
                                            <input type="text" id="buy_now_url" class="form-control" name="buy_now_url" value="{{ $data->buy_now_url }}" />
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
            @endforeach
        </div>
    </div>
</div>
@endsection


