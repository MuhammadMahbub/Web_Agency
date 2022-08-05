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


{{-- Breadcrumb --}}
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">{{ __('Admin Dashboard') }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item active">
                {{ __("Blog") }}
            </li>
            <li class="breadcrumb-item active">
                {{ __('Blog Update') }}
            </li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
      <div class="card shadow">
        <div class="card-header">
          <h4 class="card-title">{{ __("Update Blog") }}</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>{{ __('Category Name') }} <span class="text-danger">*</span></label>
                    <select name="category_id" class="form-control">
                        <option disabled> {{ __("Select Category") }}</option>
                        @foreach ($category as $cat)
                            <option value="{{ $cat->id }}" {{ $cat->id == $blog->category_id ? 'selected' : '' }}>
                                {{ $cat->category_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="title">{{ __('Title') }} <span class="text-danger"> *</span></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}">
                </div>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="s_description">{{ __('Short Description') }} <span class="text-danger"> *</span></label>
                    <textarea name="s_description" id="s_description" cols="30" rows="4"
                        class="form-control">{{ $blog->s_description }}</textarea>
                </div>
                @error('s_description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="description"> {{ __('Long Description') }}</label>
                    <input type="hidden" name="description" id="description" class="form-control" value="{!! $blog->description !!}">
                    <trix-editor input="description" style="min-height: 12rem"></trix-editor>
                </div>

                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label>{{ __('Blog Photo') }} <span class="text-danger"> *</span></label>
                    <input type="file" id="blog_photo" class="form-control" name="blog_photo">
                </div>
                <div>
                    <label for="">{{ __("Preview Photo") }}</label>
                    <img src="{{ asset('uploads/blog_photos') }}/{{ $blog->blog_photo }}" alt="" width="100">
                </div>

                <div class="form-group">
                    <label for="editors_comment">{{ __('Editors Comment') }}</label>
                    <textarea name="editors_comment" id="editors_comment" cols="30" rows="4"
                        class="form-control">{{ $blog->editors_comment }}</textarea>
                </div>
                <div class="form-group">
                    <label>{{ __('Editors Photo') }}</label>
                    <input type="file" id="editors_photo" class="form-control" name="editors_photo">
                </div>
                <div>
                    <label for="">{{ __('Preview Photo') }}</label>
                    <img src="{{ asset('uploads/editors_photos') }}/{{ $blog->editors_photo }}" alt="" width="100">
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('Update') }}</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</section>
@endsection
