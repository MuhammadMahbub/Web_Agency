
@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    {{ __('Blog') }}
@endsection

{{-- menu active --}}
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
            <li class="breadcrumb-item ">{{ __('Blog') }}</li>
            <li class="breadcrumb-item active">{{ __('Create Blog') }}</li>
        </ol>
    </div>
@endsection

@section('content')
<section class="banner-main-section" id="main">
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow">
          <div class="card-header">
            <h4 class="card-title">{{ __('Create Blog') }}</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>{{ __('Category Name') }} <span class="text-danger">*</span></label>
                    <select name="category_id" class="form-control">
                        <option value>{{ __('Select Category') }}</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">{{ __('Title') }}<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title" name="title">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="s_description">{{ __('Short Description') }} <span class="text-danger">*</span></label>
                    <textarea name="s_description" id="s_description" cols="30" rows="3" class="form-control"></textarea>
                    @error('s_description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">{{ __('Long Description') }} </label>
                    <input type="hidden" name="description" id="description" class="form-control">
                    <trix-editor input="description" style="min-height: 12rem !important"></trix-editor>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>{{ __('Blog Photo') }} <span class="text-danger">*</span></label>
                    <input type="file" id="blog_photo" class="form-control" name="blog_photo">
                </div>

                <div class="form-group">
                    <label for="editors_comment ">{{ __('Editors Comment') }} <span class="text-danger">*</span></label>
                    <textarea name="editors_comment" id="editors_comment" cols="30" rows="4" class="form-control"></textarea>
                    @error('editors_comment')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>{{ __('Editors Photo') }}</label>
                    <input type="file" id="editors_photo" class="form-control" name="editors_photo">
                </div>

                {{-- <div class="form-group">
                    <label  for="icon">Tag</label>
                    <input type="text" class="" name="tags" value='{{ old('tags') }}'>
                    @error('tag')
                        <span class="text-danger"> {{ $message }} *</span>
                    @enderror
                </div> --}}

                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
            </form>
        </div>
    </div>
  </div>
</div>
</section>


@endsection


{{-- @section('js')
<script>
    var tagInput = document.querySelector('input[name=tags]');
    new Tagify(tagInput);
</script>
@endsection --}}
