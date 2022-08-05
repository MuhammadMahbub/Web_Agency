@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
 {{ __('Faq') }}
@endsection

@section('faqSpinner')
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
            <li class="breadcrumb-item active">{{ __("Faq") }}</li>
            <li class="breadcrumb-item ">
                <a href="{{ route('faq.index') }}">{{ __('Faq List') }}</a>
            </li>
            <li class="breadcrumb-item active">{{ __("Update Faq") }}</li>

        </ol>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12 col-12 m-auto">
        <div class="card">
            @if (session('success'))
                    <br>
                    <div class="alert alert-success m-0">{{ session('success') }}</div>
            @endif
            <div class="card-header">
                <h4 class="card-title">{{ __('Update Faq') }}</h4>
            </div>
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('faq.update', $faq->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-12">

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">{{ __("Question") }} <span class="text-danger">*</span></label>
                                    <input type="text" id="email" class="form-control" name="faq_question" value="{{ $faq->faq_question }}" />
                                    @error('faq_question')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">{{ __('Answer') }} <span class="text-danger">*</span></label>
                                    <input type="hidden" id="faq_answer" class="form-control" name="faq_answer" value="{{ $faq->faq_answer }}" />
                                    <trix-editor input="faq_answer" style="min-height: 12rem"></trix-editor>
                                    @error('faq_answer')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
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
