@extends('frontend_master.frontend_master')

@section('frontend_title', 'faq')

@section('FaqActive')
active
@endsection

@section('frontend_content')
    <section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top: 120px">
                    <h1>{{ titlesettings()->faq_title }}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('root') }}">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            {{ titlesettings()->faq_title }}
                        </li>
                    </ol>
                    <div class="divider-15 d-none d-xl-block"></div>
                </div>
            </div>
        </div>
    </section>

    @if ($faq_top_section_data->count() > 0)


    <section class="ls s-pt-30 s-pt-lg-75">
        <div class="divider-35 d-none d-xl-block"></div>
        <div class="container">
            <div class="row text-center c-mb-30 c-mb-lg-0">
                <div class="col-12 col-md-4">
                    <h6>{{ $faq_top_section_data->title_one }}</h6>
                    <p>
                        {{ \Str::limit($faq_top_section_data->description_one, 500) }}
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <h6>{{ $faq_top_section_data->title_two }}</h6>
                    <p>
                        {{ $faq_top_section_data->description_two }}
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <h6>{{ $faq_top_section_data->title_three }}</h6>
                    <p>
                        {{ $faq_top_section_data->description_three }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if ($faq_all_datas->count() > 0)


    <section class=" ls s-pt-20 s-pb-50 s-py-lg-50 faq1">
        <div class="container">
            <div class="row">
                <div class="divider-55 d-none d-xl-block"></div>

                <div class="col-lg-12 m-auto ds-collapse">

                    <div id="accordion_parent" role="tablist">

                        @foreach ($faq_all_datas as $item)
                            <div class="card">
                                <div class="card-header" role="tab" id="collapse{{ $item->id }}_header">
                                    <h5>
                                        <a class="collapsed" data-toggle="collapse" data-target="#accordion-{{ $item->id }}" href="#accordion-{{ $item->id }}" aria-expanded="false" aria-controls="accordion-{{ $item->id }}">
                                            {{ $item->faq_question }}
                                        </a>
                                    </h5>
                                </div>

                                <div id="accordion-{{ $item->id }}" class="collapse" role="tabpanel" data-parent="#accordion_parent">
                                    <div class="card-body">

                                        {!! $item->faq_answer !!}

                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>
                    <!-- collapse -->
                </div>
                <div class="divider-90 d-none d-xl-block"></div>
            </div>
        </div>
    </section>
    @endif

    <section class="s-py-130 ls faq1-icon ls s-overlay" style="background: url('{{ asset('uploads/images/faq_bottom_bg') }}/{{ $get_faq_bottom_data->background_img }}')">

        <div class="divider-50 d-none d-xl-block"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="main-content text-center">
                        <div class="divider-40 d-none d-xl-block"></div>
                        <h4>
                            {{ $get_faq_bottom_data->title }}
                        </h4>
                        <div class="divider-40 d-none d-xl-block"> </div>
                        <a href="{{ route('contact/us') }}" class="btn btn-maincolor">{{ $get_faq_bottom_data->button }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider-15 d-none d-xl-block"></div>
    </section>
@endsection
