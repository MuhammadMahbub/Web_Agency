@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
 {{ __('Services') }}
@endsection

{{-- Active Menu --}}
@section('serviceList')
    active
@endsection

@section('serviceSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('serviceSpinnerList')
    spinner-border text-info
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">{{ __('Admin Dashboard') }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">x{{ __('Admin Dashboard') }}</a>
                <li class="breadcrumb-item ">{{ __("Service") }}</li>
                <li class="breadcrumb-item active">{{ __('Service List') }}</li>
            </li>
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
                    <h4 class="card-title">{{ __('Service List') }}</h4>
                </div>

                <div class="col-md-6 text-right">
                    <a class="btn btn-info" href="{{ route('service.create') }}">{{ __('Create Service') }}</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="data_table">
                        <thead>
                            <tr>
                                <th>{{ __('Sl') }}</th>
                                <th>{{ __("Name") }}</th>
                                <th>{{ __('Short Desc') }}</th>
                                <th>{{ __('Icon') }}</th>
                                <th>{{ __("Image") }}</th>
                                <th>{{ __("Action") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_service_data as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>
                                    <a href="{{ route('service.show', $item->id) }}">{{ $item->service_name }}</a>
                                </td>
                                <td>
                                    {{ \Str::limit($item->service_short_description, 50) }}
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/images/service') }}/{{ $item->service_icon }}" alt="not found" width="70" height="70">
                                </td>

                                <td>
                                    <img src="{{ asset('uploads/images/service') }}/{{ $item->service_image }}" alt="not found" width="70" height="70">
                                </td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>

                                        <div class="dropdown-menu">

                                            <a class="dropdown-item" href="{{ route('service.show', $item->id) }}">
                                                <i data-feather='eye'></i>

                                                <span>{{ __('Show') }}</span>
                                            </a>
                                            <a class="dropdown-item" href="{{ route('service.edit', $item->id) }}">
                                                <i data-feather='edit'></i>
                                                <span>{{ __('Edit') }}</span>
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
                                        <h5 class="modal-title" id="exampleModalLabel"> {{ __('Service') }} </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        {{ __("Are You Sure Delete Data?") }}
                                      </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __("Close") }}</button>
                                    <form action="{{ route('service.delete', $item->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">{{ __("Delete") }}</button>
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
