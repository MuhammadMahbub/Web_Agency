@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ __('Gallery') }}
@endsection

{{-- Active Menu --}}
@section('gallery_name')
    active
@endsection

@section('gallerySpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('gallery_nameSpinnerCreate')
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
                {{ __('Gallery') }}
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
                        <h4 class="card-title">{{ __('Gallery List') }}</h4>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-info" href="{{ route('gallery_name.create') }}">{{ __('Create Gallery Name') }}</a
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="data_table">
                            <thead>
                                <tr>
                                    <th>{{ __('Sl') }}</th>
                                    <th>{{ __('Gallery Name') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gallery_name as $gallery)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $gallery->gallery_name }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                    data-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editModal{{$gallery->id}}">
                                                        <i data-feather="edit" class="mr-50"></i>
                                                        <span>{{ __("Edit") }}</span>
                                                    </a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal{{$gallery->id}}">
                                                        <i data-feather="trash" class="mr-50"></i>
                                                        <span>{{ __("Delete") }}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="editModal{{$gallery->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLabel"> {{ __('Edit') }} </h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('gallery_name.update', $gallery->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="gallery_name">{{ __('Gallery Name') }} <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" value="{{ $gallery->gallery_name }}" id="gallery_name" name="gallery_name">
                                                        </div>
                                                        @error('name')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                        <button type="submit" class="btn btn-secondary">{{ __('Update') }}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                     <!-- Delete Modal -->
                                     <div class="modal fade" id="exampleModal{{$gallery->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel"> {{ __('Delete') }} </h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                {{ __('Are you sure?') }}
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('No') }}</button>
                                                <form action="{{ route('gallery_name.destroy', $gallery->id) }}" method="POST">
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
