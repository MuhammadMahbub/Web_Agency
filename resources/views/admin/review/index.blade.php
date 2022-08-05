@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
     {{ __('Review') }}
@endsection

{{-- Active Menu --}}
@section('reviewList')
    active
@endsection

@section('homeSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('reviewSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('reviewSpinnerList')
    spinner-border text-info
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">{{ __('Admin Dashboard') }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __("Home") }}</a>
            </li>
            <li class="breadcrumb-item active">
               {{ __(' View Review') }}
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
                    <h4 class="card-title">{{ __('Review List') }}</h4>
                </div>

                <div class="col-md-6 text-right">
                    <a class="btn btn-info" href="{{ route('review.create') }}">{{ __("Create Review") }}</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="data_table">
                        <thead>
                            <tr>
                                <th>{{ __('Sl') }}</th>
                                <th>{{ ('Image') }}</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Company') }}</th>
                                <th>{{ __('Review') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>

                                <td>
                                    <img src="{{ asset('uploads/review') }}/{{ $item->image }}" alt="image not found !" width="70" height="70">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->company_name }}</td>
                                <td>{{ $item->comment }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>

                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('review.edit', $item->id) }}">
                                                <i data-feather="edit" class="mr-50"></i>
                                                <span>{{ __('Edit') }}</span>
                                            </a>
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#reviewdelete{{ $item->id }}">
                                                <i data-feather="trash" class="mr-50"></i>
                                                <span>{{ __('Delete') }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{-- old --}}
                            <div class="modal fade" id="reviewdelete{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"> {{ __('Review') }} </h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                    <div class="modal-body">
                                      {{ __("Are you sure?") }}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('review.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i data-feather="trash" class="mr-50"></i>
                                                <span>{{ __("Delete") }}</span>
                                            </button>
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
@section('js')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

@endsection
