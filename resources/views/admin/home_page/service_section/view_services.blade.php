@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ __('Services') }}
@endsection

{{-- Active Menu --}}
@section('view_services')
    active
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">{{ __('Admin Dashboard') }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item active">
                {{ __("View Services") }}
            </li>
        </ol>
    </div>
@endsection

{{-- Main Content --}}
@section('content')
<div class="row" id="basic-table">
    <div class="col-md-10 col-12 m-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ __("Services List") }}</h4>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">{{ session('warning') }}</div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="data_table">
                        <thead>
                            <tr>
                                <th>{{ __('Sl') }}</th>
                                <th>{{ __('Service Icon') }}</th>
                                <th>{{ __("Service Title") }}</th>
                                <th>{{ __('Service Details') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_service_data as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>

                                <td>
                                    <img src="{{ asset('uploads/images/service') }}/{{ $item->service_icon }}" alt="not found" width="70" height="70">
                                </td>
                                <td>{{ $item->service_title }}</span></td>
                                <td>{{ $item->service_details }}</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>

                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('service_edit', $item->id) }}">
                                                <i data-feather="trash" class="mr-50"></i>
                                                <span>{{ __('Edit') }}</span>
                                            </a>
                                            <a class="dropdown-item" href="{{ route('service_delete', $item->id) }}">
                                                <i data-feather="trash" class="mr-50"></i>
                                                <span>{{ __("Delete") }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
