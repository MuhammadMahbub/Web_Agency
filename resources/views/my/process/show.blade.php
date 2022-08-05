@extends('layouts.dashboard')

{{-- title --}}
@section('title')
     {{ __('Process') }}
@endsection

@section('homeSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('processSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('processSpinnerList')
    spinner-border text-info
@endsection


{{-- content --}}
@section('content')
<section class="banner-main-section py-5 all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">{{ __('Admin Dashboard') }} | <span class="dash-span-title">{{ __('Show Process') }}</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Process </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table  class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                             {{ __('Title') }}
                                                        </th>
                                                        <td>
                                                            {{ $process->title }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                             {{ __('Description') }}
                                                        </th>
                                                        <td>
                                                            {{ $process->description }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                             {{ __('Button Text') }}
                                                        </th>
                                                        <td>
                                                            {{ $process->button_text }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            {{ __("Button URl") }}
                                                        </th>
                                                        <td>
                                                            <a href="{{ $process->button_url }}">
                                                            {{ $process->button_url }}</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                             {{ __('Process photo') }}
                                                        </th>
                                                        <td>

                                                            <img src="{{ asset('uploads/process_photo') }}/{{ $process->process_photo }}" alt="not found" width="70" height="70">
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <a class="btn mt-1 btn-success" href="{{ route('process.index') }}">{{ __('Return Back') }}</a>
                                            <a class="btn edit-btn mt-1 btn-primary" href="{{ route('process.edit', $process->id) }}">{{ __('Edit') }}</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
