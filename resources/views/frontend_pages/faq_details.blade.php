@extends('frontend_master.frontend_master')

@section('frontend_title', 'FAQ Details')

@section('frontend_content')
    <section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top: 100px">
                    <h1>FAQ Details</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            {{-- <a href="{{ route('root') }}">Home</a> --}}
                        </li>
                        <li class="breadcrumb-item">
                            Pages
                        </li>
                        <li class="breadcrumb-item active">
                            {{-- <a href="{{ route('faq') }}">FAQ</a> --}}
                        </li>
                        <li class="breadcrumb-item active">
                            Détails de la FAQ
                        </li>
                    </ol>
                    <div class="divider-15 d-none d-xl-block"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls s-pt-30 s-pt-lg-75">
        <div class="divider-35 d-none d-xl-block"></div>
        <div class="container">
            <div class="row text-center c-mb-30 c-mb-lg-0">
                <div class="col-12 col-md-12">
                    <h6>{{ $faq_top_section_data->title_one }}</h6>
                    <p>
                        {{ \Str::limit($faq_top_section_data->description_one, 100) }}
                    </p>
                </div>
                {{-- <div class="col-12 col-md-4">
                    <h6>{{ $faq_top_section_data->title_two }}</h6>
                    <p>
                        {{ \Str::limit($faq_top_section_data->description_two, 100) }}
                    </p>
                    <a href="{{ route('faq.details', $faq_top_section_data->id) }}" class="btn-link">{{ $faq_top_section_data->button_two }}</a>
                </div>
                <div class="col-12 col-md-4">
                    <h6>{{ $faq_top_section_data->title_three }}</h6>
                    <p>
                        {{ \Str::limit($faq_top_section_data->description_three, 100) }}
                    </p>
                    <a href="{{ route('faq.details', $faq_top_section_data->id) }}" class="btn-link">{{ $faq_top_section_data->button_three }}</a>
                </div> --}}
            </div>
        </div>
    </section>

    {{-- <section class=" ls s-pt-20 s-pb-50 s-py-lg-50 faq1">
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
                                            What does Your Company Consulting do?
                                        </a>
                                    </h5>
                                </div>

                                <div id="accordion-{{ $item->id }}" class="collapse" role="tabpanel" data-parent="#accordion_parent">
                                    <div class="card-body">

                                        <p>We help entrepreneurs get ready to raise capital. This usually consists of some or all of the following services:</p>

                                        <ul class="list1">
                                            <li>Business plan development</li>
                                            <li>Financial forecast development</li>
                                            <li>Pitch deck (investor presentation) preparation</li>
                                            <li>Strategy development</li>
                                            <li>Market research and analysis</li>
                                        </ul>

                                        <p>Please note that we cannot help our clients raise capital. This is a service that is heavily regulated. In general, only brokers licensed with the Financial Industry Regulatory Authority (FINRA) can legally offer this type of service. Please
                                            make sure that any "finder" you talk to is properly licensed with FINRA before you hire them.</p>

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
    </section> --}}

    <section class="s-py-130 ls faq1-icon ls s-overlay pb-4">

        <div class="divider-50 d-none d-xl-block"></div>

        <div class="divider-15 d-none d-xl-block"></div>
    </section>
@endsection
