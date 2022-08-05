@extends('layouts.dashboard')

{{-- title --}}
@section('title')
 {{ __('All Contact Messages') }}
@endsection

@section('ContactMessageList')
    active
@endsection

@section('contactMessageSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

{{-- content --}}
@section('content')
<section class="banner-main-section py-5 all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">{{ __("Admin Dashboard") }} | <span class="dash-span-title">{{ __('Contact Messages') }}</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('Contact Messages') }} </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table  class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                             {{ __('Name') }}
                                                        </th>
                                                        <td>
                                                            {{ $message_details->client_name }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                             {{ __('Email') }}
                                                        </th>
                                                        <td>

                                                            {{ $message_details->client_email }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                             {{ __('Subject') }}
                                                        </th>
                                                        <td>
                                                            {{ $message_details->message_subject }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                             {{ __('Message') }}
                                                        </th>
                                                        <td>
                                                            {{ $message_details->client_message }}
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <a class="btn mt-1 btn-success" href="{{ route('contact_us.index') }}">{{ __('Return Back') }}</a>
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
