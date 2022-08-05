@extends('layouts.dashboard')

{{-- title --}}
@section('title')
   {{ __('Testimonials') }}
@endsection

@section('testimonialSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection


{{-- content --}}
@section('content')
<section class="banner-main-section py-5 all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">{{ __('Admin Dashboard') }} | <span class="dash-span-title">{{ __('Show Testimonial') }}</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('Testimonial') }} </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table  class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                             {{ __('User Name') }}
                                                        </th>
                                                        <td>
                                                            {{ $testimonial->user_name }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                             {{ __('User Review') }}
                                                        </th>
                                                        <td>
                                                            {{ $testimonial->user_review }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                             {{ __('User photo') }}
                                                        </th>
                                                        <td>

                                                            <img src="{{ asset('uploads/images/testimonial') }}/{{ $testimonial->user_photo }}" alt="not found" width="70" height="70">
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <a class="btn mt-1 btn-success" href="{{ route('testimonial.index') }}">{{ __("Return Back") }}</a>
                                            <a class="btn edit-btn mt-1 btn-primary" href="{{ route('testimonial.edit', $testimonial->id) }}">{{ __('Edit') }}</a>

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
