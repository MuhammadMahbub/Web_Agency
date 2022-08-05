@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ __('Feature') }}
@endsection

@section('featuresSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection


{{-- content --}}
@section('content')
<section class="banner-main-section py-5 all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">{{ __('Admin Dashboard') }} | <span class="dash-span-title">{{ __('Show Feature Single Data') }}</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> {{ __('Feature') }} </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table  class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            {{ __("Feature Title") }}
                                                        </th>
                                                        <td>
                                                            {{ $feature->title }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            {{ __("Feature Desc") }}
                                                        </th>
                                                        <td>
                                                            {{ $feature->description }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <a class="btn mt-1 btn-success" href="{{ route('feature.index') }}">{{ __('Return Back') }}</a>
                                            <a class="btn edit-btn mt-1 btn-primary" href="{{ route('feature.edit', $feature->id) }}">Edit</a>
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
