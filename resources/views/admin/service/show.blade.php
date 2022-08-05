@extends('layouts.dashboard')

{{-- title --}}
@section('title')
 {{ __('Service') }}
@endsection


{{-- content --}}
@section('content')
<section class="banner-main-section py-5 all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">{{ __("Admin Dashboard") }} | <span class="dash-span-title">{{ __("View Service") }}</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> {{ __(('Service')) }} </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table  class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                             {{ __("Name") }}
                                                        </th>
                                                        <td>
                                                            {{ $get_single_service_data->service_name }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                             {{ __("Short Description") }}
                                                        </th>
                                                        <td>
                                                            {{ $get_single_service_data->service_short_description }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                             {{ __('Long Description') }}
                                                        </th>
                                                        <td>
                                                            {!! $get_single_service_data->service_long_description !!}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                             {{ __('Icon') }}
                                                        </th>
                                                        <td>
                                                            <img src="{{ asset('uploads/images/service') }}/{{ $get_single_service_data->service_icon }}" alt="not found" width="70" height="70">
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                             {{ __("Image") }}
                                                        </th>
                                                        <td>
                                                            <img src="{{ asset('uploads/images/service') }}/{{ $get_single_service_data->service_image }}" alt="not found" width="70" height="70">
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                             {{ __("Created at") }}
                                                        </th>
                                                        <td>
                                                            {!! $get_single_service_data->created_at->format('d-m-Y') !!}
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <a class="btn mt-1 btn-success" href="{{ route('service.index') }}">{{ __("Return Back") }}</a>
                                            <a class="btn edit-btn mt-1 btn-primary" href="{{ route('service.edit', $get_single_service_data->id) }}">{{ __("Edit") }}</a>

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
