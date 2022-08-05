@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
 {{ __('Blog') }}
@endsection

{{-- Active Menu --}}
@section('blog')
    active
@endsection

@section('blogSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('blogSpinnerList')
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
                {{ __('Blog') }}
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-6">
                        <h4 class="card-title">{{ __("Blogs List") }}</h4>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-info" href="{{ route('blogcategory.create') }}">{{ __('Create Category') }}</a>
                        <a class="btn btn-info" href="{{ route('blog.create') }}">{{ __('Write Blog') }}</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="data_table">
                            <thead>
                                <tr>
                                    <th>{{ __('Sl') }}</th>
                                    <th>{{ __('User') }}</th>
                                    <th>{{ __('Category') }}</th>
                                    <th>{{ __("Title") }}</th>
                                    <th>{{ __('Blog Photo') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody id="search">
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $blog->relationtouser->name }}</a></td>
                                        <td> {{ $blog->relationtoblogcategory->category_name }}</td>
                                        <td><a class="" href="{{ route('blog.details', $blog->slug) }}"><i class="mr-50"></i>{{ \Str::limit( $blog->title, 30) }}</a></td>

                                        <td>
                                            <img src="{{ asset('uploads/blog_photos') }}/{{ $blog->blog_photo }}"
                                                alt="No photo" width="100">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                    data-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('blog.details', $blog->slug) }}"><i data-feather="eye"
                                                            class="mr-50"></i>{{ __('Show') }}</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('blog.edit', $blog->id) }}"><i data-feather="edit"
                                                            class="mr-50"></i>{{ __('Edit') }}</a>
                                                    <a data-toggle="modal" data-target="#exampleModal{{$blog->id}}" class="dropdown-item" >
                                                        <i data-feather="trash" class="mr-50"></i>
                                                        <span>{{ __("Delete") }}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$blog->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{$blog->relationtoblogcategory->category_name}} {{ __('Delete') }} </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                            {{ __('Are You Sure Delete Data?') }}
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('No') }}</button>
                                            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
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


