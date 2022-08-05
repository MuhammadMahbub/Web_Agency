@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
     {{ __('Comments') }}
@endsection

{{-- Active Menu --}}
@section('blogcomment')
    active
@endsection

@section('blogSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('blogCommentList')
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
                {{ __('Comments') }}
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
                        <h4 class="card-title">{{ __('Comments List') }}</h4>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="data_table">
                            <thead>
                                <tr>
                                    <th>{{ __('Sl') }}</th>
                                    <th> {{ __('Name') }}</th>
                                    <th> {{ __('Email') }}</th>
                                    <th> {{ __('Phone') }}</th>
                                    <th> {{ __('Comments') }}</th>
                                    <th>{{ __("Action") }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allcomments as $comment)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $comment->name }}</td>
                                        <td>{{ $comment->email }}</td>
                                        <td>{{ $comment->phone }}</td>
                                        <td>{{ $comment->comment }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                    data-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                        <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal{{$comment->id}}">
                                                            <i data-feather="trash" class="mr-50"></i>
                                                            <span>{{ __('Delete') }}</span>
                                                        </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> {{ __('Delete') }} </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                            {{ __('Are You Sure Delete Comment?') }}
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __("No") }}</button>
                                            <form action="{{ route('blogcomment.destroy', $comment->id) }}" method="POST">
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
