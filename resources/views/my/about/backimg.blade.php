@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
 {{ __('About') }}
@endsection

{{-- Active Menu --}}
@section('about_back_img')
    active
@endsection

@section('aboutSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('aboutFooter')
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
                {{ __('About') }}
            </li>

            <li class="breadcrumb-item active">
                {{ __('About Back Image Update') }}
            </li>
        </ol>
    </div>
@endsection

@section('content')


        <div class="col-12 m-auto">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach ($about_img as $item)
                    <li class="nav-item" role="presentation">
                        <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="home-tab-{{ $item->id }}"
                            data-toggle="tab" href="#hello-{{ $item->id }}" role="tab" aria-controls="home"
                            aria-selected="{{ $loop->first ? true : false }}">{{ $item->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <section class="banner-main-section" id="main">
            <div class="row">
              <div class="col-lg-12">
                <div class="card shadow col-12">
                    <div class="card-header">
                        <div class="col-6">
                            <h4 class="card-title">{{ __('About Team Update') }}</h4>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-info" href="{{ route('button.index') }}">{{ __('Update Button') }}</a>
                        </div>
                    </div>
                  <div class="card-body col-12">
                    <div class="tab-content" id="myTabContent">
                        @foreach ($about_img as $item)
                            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="hello-{{ $item->id }}"
                                role="tabpane" aria-labelledby="home-tab-{{ $item->id }}">
                                <form method="POST" action="{{ route('about_back_img_update', $item->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name">{{ __('Name') }} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $item->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="post">{{ __('Designation') }} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="post" name="post"
                                            value="{{ $item->post }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Photo</label>
                                        <input type="file" id="back_img" class="form-control" name="back_img">
                                    </div>
                                    <div>
                                        <label for="">{{ __('Preview Photo') }}</label>
                                        <img src="{{ asset('uploads/aboutus') }}/{{ $item->back_img }}" alt="" width="80" height="70">
                                    </div>

                                    {{-- <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="fb_url">Fb Url</label>
                                                <input type="text" name="fb_url" value="{{ $item->fb_url }}" id="fb_url"
                                                    class="form-control" />
                                                @error('fb_url')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="instagram_url">Instagram Url</label>
                                                <input type="text" name="instagram_url" value="{{ $item->instagram_url }}"
                                                    id="instagram_url" class="form-control" />
                                                @error('instagram_url')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="youtube_url">Youtube Url</label>
                                                <input type="text" name="youtube_url" value="{{ $item->youtube_url }}"
                                                    id="youtube_url" class="form-control" />
                                                @error('youtube_url')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="linkedin_url">LinkedIn Url</label>
                                                <input type="text" name="linkedin_url" value="{{ $item->linkedin_url }}"
                                                    id="linkedin_url" class="form-control" />
                                                @error('linkedin_url')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="twitter_url">Twitter Url</label>
                                                <input type="text" name="twitter_url" value="{{ $item->twitter_url }}"
                                                    id="twitter_url" class="form-control" />
                                                @error('twitter_url')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div> --}}


                                        {{-- <div class="form-group">
                                            <label for="button_text">Button Text <span class="text-danger"> *</span></label>
                                            <input type="text" name="button_text" class="form-control"  value="{{ $item->button_text }}">
                                            @error('button_text')
                                              <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    <div class="form-group">
                                        <label for="button_url">Button URL</label>
                                            <input type="text" name="button_url" class="form-control"  value="{{ $item->button_url }}">
                                    </div> --}}

                                    <button type="submit" class="btn btn-primary mt-2 mb-4">{{ __('Update') }}</button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                  </div>
               </div>
              </div>
           </div>

</section>

@endsection
