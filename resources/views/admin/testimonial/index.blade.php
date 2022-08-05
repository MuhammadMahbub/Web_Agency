@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ __('Testimonials') }}
@endsection

{{-- Active Menu --}}
@section('TestimonialList')
    active
@endsection

@section('testimonialSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('testimonialSpinnerList')
    spinner-border text-info
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">{{ __('Admin Dashboard') }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item ">{{ __('Testimonials') }}</li>
            <li class="breadcrumb-item active">{{ __("Testimonial List") }}</li>
        </ol>
    </div>
@endsection

{{-- Main Content --}}
@section('content')
<div class="row" id="basic-table">
    <div class="col-md-12 col-12 m-auto">
        <div class="card">
            <div class="card-header">
                <div class="col-md-6">
                    <h4 class="card-title">{{ __('Testimonial List') }}</h4>
                </div>

                <div class="col-md-6 text-right">
                    <a class="btn btn-info" href="{{ route('testimonial.create') }}">{{ __('Create Testimonial') }}</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="data_table">
                        <thead>
                            <tr>
                                <th>{{ __('Sl') }}</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Review') }}</th>
                                <th>{{ __('Photo') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_tetimonials_data as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>


                                <td>
                                    <a href="{{ route('testimonial.show', $item->id) }}">{{ $item->user_name }}</a>
                                </td>
                                <td>{{ $item->user_review }}</td>
                                <td>
                                    <img src="{{ asset('uploads/images/testimonial') }}/{{ $item->user_photo }}" alt="not found" width="70" height="70">
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>

                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('testimonial.show', $item->id) }}">
                                                <i data-feather='eye'></i>
                                                <span>{{ __("Show") }}</span>
                                            </a>
                                            <a class="dropdown-item" href="{{ route('testimonial.edit', $item->id) }}">
                                                <i data-feather='edit'></i>
                                                <span>{{ __("Edit") }}</span>
                                            </a>

                                            <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter{{ $item->id }}" title="Delete">
                                                <i data-feather="trash" class="mr-50"></i>
                                                <span>{{ __('Delete') }}</span>
                                            </a>

                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Delete Modal -->
                            <div class="modal fade" id="exampleModalCenter{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{ __("Testimonial") }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        {{ __('Are You Sure Delete Data?') }}
                                      </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form action="{{ route('testimonial.destroy', $item->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-primary">{{ __('Delete') }}</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
