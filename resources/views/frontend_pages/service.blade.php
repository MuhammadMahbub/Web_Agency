@extends('frontend_master.frontend_master')

@section('frontend_title', 'service')

@section('ServiceActive')
active
@endsection

@include('frontend_pages.reuse_pages.frontend_toster_message')

@section('frontend_content')
<section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" style="margin-top: 120px">
                <h1>{{ titlesettings()->service_title }}</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('root') }}">Home</a>
                    </li>

                    <li class="breadcrumb-item active">
                        {{ titlesettings()->service_title }}
                    </li>
                </ol>
                <div class="divider-15 d-none d-xl-block"></div>
            </div>
        </div>
    </div>
</section>


<section class="ls s-pt-30 s-pb-20 s-pb-lg-50 s-pt-lg-50 c-gutter-60 c-mb-40 c-mb-md-60 service-item2">
    <div class="d-none d-lg-block divider-65"></div>
    <div class="container">
        <div class="row">

            @include('frontend_pages.reuse_pages.services');

            <div class="d-none d-lg-block divider-10"></div>
        </div>
    </div>
</section>

    @include('frontend_pages.reuse_pages.contact_form')

@endsection
