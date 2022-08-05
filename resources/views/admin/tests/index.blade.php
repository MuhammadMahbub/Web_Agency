@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ __('Users') }}
@endsection

{{-- Active Menu --}}
@section('usersList')
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
                {{ __('Test') }}
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
                <h4 class="card-title">User List</h4>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('danger'))
                    <div class="alert alert-danger">{{ session('danger') }}</div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="data_table">
                        <thead>
                            <tr>
                                <th>{{ __('Sl') }}</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Image') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($data as $test)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $test->name }}</td>
                                <td>
                                    <img width="50" height="50"  src="{{ asset('uploads/test') }}/{{ $test->image }}" alt="no image found">
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter{{ $test->id }}">
                                                <i data-feather="trash" class="mr-50"></i>
                                                <span>{{ __('Edit') }}</span>
                                            </a>

                                            <form action="{{ route('tests.destroy', $test->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="dropdown-item">
                                                    <i data-feather="trash" class="mr-50"></i>
                                                    <span>{{ __('Delete') }}</span>
                                                </button><br>
                                            </form>
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

   @foreach ($data as $test)


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter{{ $test->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">{{ __('Modal title') }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <form class="form form-vertical" action="{{ route('tests.update', $test->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- {{ method_field('PUT') }} --}}
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" id="name" class="form-control" name="name" placeholder="Name" value="{{ $test->name }}" />
                                @error('name')
                                  <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">{{ __('Image') }}</label>
                                <input type="file" id="email" class="form-control" name="image" />
                            </div>
                            <div class="mt-">
                                <p>{{ __("Existing Image") }} : </p>
                                <img width="50" height="50" src="{{ asset('uploads/test') }}/{{ $test->image }}" alt="no image found">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                <button type="submit" class="btn btn-primary">{{ __('Save changes') }}</button>
                </form>
        </div>
      </div>
    </div>
  </div>

   @endforeach


@endsection
