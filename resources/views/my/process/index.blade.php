@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ __('Market Planning') }}
@endsection

{{-- Active Menu --}}
@section('processList')
    active
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


{{-- Breadcrumb --}}
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">{{ __('Admin Dashboard') }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item active">
                {{ __('Market Planning') }}
            </li>
        </ol>
    </div>
@endsection


{{-- Main Content --}}
@section('content')
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-6">
                        <h4 class="card-title">{{ __('Planning List') }}</h4>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-info" href="{{ route('process.create') }}">{{ __('Create M.Planning') }}</a>
                        <a class="btn btn-info" href="{{ route('button.index') }}">{{ __('Update Button') }}</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="data_table">
                            <thead>
                                <tr>
                                    <th>{{ __('Sl') }}</th>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Description') }}</th>
                                    <th>{{ __('Photo') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($processes as $process)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $process->title }}</td>
                                        <td>{{ \Str::limit($process->description, 80) }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/process_photo') }}/{{ $process->process_photo }}"
                                                alt="No Photo" width="100">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                    data-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('process.show', $process->id) }}"><i
                                                            data-feather="edit" class="mr-50"></i>{{ __('Show') }}</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('process.edit', $process->id) }}"><i
                                                            data-feather="edit" class="mr-50"></i>{{ __('Edit') }}</a>
                                                        <a class="dropdown-item"data-toggle="modal" data-target="#exampleModal{{$process->id}}">
                                                            <i data-feather="trash" class="mr-50"></i>
                                                            <span>{{ __('Delete') }}</span>
                                                        </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- modal -->
                                    <div class="modal fade" id="exampleModal{{$process->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">{{ $process->title }} {{ __('Delete') }} </h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                            {{ __('Are you sure?') }}
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                            <form action="{{ route('process.destroy', $process->id) }}" method="POST">
                                                @csrf
                                                @method("delete")
                                                <button type="submit" class="btn btn-danger">{{ __('Yes Delete') }}</button>
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
