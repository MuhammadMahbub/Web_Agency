@extends('frontend_master.frontend_master')

@section('frontend_title', 'service')

@section('frontend_content')

@section('FeatureActive')
active
@endsection

<section class="page_title ls s-py-50 corner-title  s-py-25 overflow-visible">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" style="margin-top:120px">
                <h1>{{ titlesettings()->feature_title }}</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('root') }}">Home</a>
                    </li>

                    <li class="breadcrumb-item active">
                        {{ titlesettings()->feature_title }}
                    </li>
                </ol>
                <div class="divider-15 d-none d-xl-block"></div>
            </div>
        </div>
    </div>
</section>

@if ($all_features_data->count()>0)

<section class="ls s-pt-10 s-pb-130 s-pt-lg-0 s-pb-lg-75 s-pt-xl-20 s-pb-xl-100 c-gutter-60">
    <div class="container c-mt-30">
        <div class="row">

            <div class="d-none d-lg-block divider-55"></div>

            <main class="col-lg-12 col-xl-12">


                <div class="row">

                    @foreach ($all_features_data as $item)

                        <div class="col-md-4">
                            <h3>{{ $item->title }}</h3>
                            <p>
                                {{ $item->description }}
                            </p>
                        </div>
                    @endforeach

                </div>

            </main>
            <!--eof .col-md-* (main content)-->

            <div class="d-none d-lg-block divider-100"></div>
        </div>

    </div>
</section>
@endif
@endsection
