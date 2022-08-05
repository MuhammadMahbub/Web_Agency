@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
   {{ __('Feature') }}
@endsection

{{-- Active Menu --}}
@section('featureList')
    active
@endsection

@section('featuresSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('featuresSpinnerList')
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
            <li class="breadcrumb-item">{{ __('Features') }}</li>
            <li class="breadcrumb-item active">{{ __('Feature List') }}</li>
        </ol>
    </div>
@endsection

{{-- Main Content --}}
@section('content')
<div class="row" id="basic-table">
    <div class="col-md-12 m-auto">
        <div class="card">
            <div class="card-header">
                <div class="col-6">
                    <h4 class="card-title">{{ __('Feature List') }}</h4>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-info" href="{{ route('feature.create') }}">{{ __('Create Feature') }}</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="data_table">
                        <thead>
                            <tr>
                                <th>{{ __('Sl') }}</th>
                                <th>{{ __('Title') }}</th>
                                <th>{{ __('Description') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>
                                    <a href="{{ route('feature.show', $item->id) }}">{{ $item->title }}</a>

                                </td>
                                <td>{{ \Str::limit($item->description, 100) }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('feature.show', $item->id) }}">
                                                <i data-feather='eye'></i>
                                                <span>{{ __('Show') }}</span>
                                            </a>
                                            <a class="dropdown-item" href="{{ route('feature.edit', $item->id) }}">
                                                <i data-feather="edit" class="mr-50"></i>
                                                <span>{{ __('Edit') }}</span>
                                            </a>
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                                                <i data-feather="trash" class="mr-50"></i>
                                                <span>{{ __('Delete') }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Delete') }} </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    {{ __('Are You Sure Delete Data?') }}
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <form action="{{ route('feature.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                                    </form>
                                    </div>
                                </div>
                                </div>
                                </div>

                            {{-- fvgbhnjkm, --}}

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('js')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

@endsection
