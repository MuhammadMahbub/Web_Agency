@extends('layouts.dashboard')

@section('dashboardIndex')
active
@endsection

@section('title')
    {{ __('Dashboard') }}
@endsection

@section('dashboardActive')
    active
@endsection

@section('dashboardSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('content')
  <section class="main-section py-5" id="main">
    <div class="row">
      <div class="col-12">
        <h2 class="dash-ad-title m-0 mb-3">{{ __('Admin Dashboard') }}</h2>
      </div>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-6 col-12">
            <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count($message) }}</h2>
                        <p class="card-text"><a href="{{ route('contact_us.index') }}">{{ __('Total Messages') }}</a></p>

                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                          {{-- <i class="fas fa-sms sidenav-main__icon"></i> --}}
                          <a href="{{ route('contact_us.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12">
          <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count($service) }}</h2>
                        <p class="card-text"><a href="{{ route('service.index') }}">{{ __('Total Services') }}</a></p>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                            <a href="{{ route('service.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag sidenav-main__icon"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-3 col-sm-6 col-12">
          <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count($skill) }}</h2>
                        <p class="card-text">Total Skills</p>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                          <i class="fas fa-fill-drip sidenav-main__icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-lg-4 col-sm-6 col-12">
          <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count($testimonial) }}</h2>

                        <a href="{{ route('testimonial.index') }}">{{ __('Total Testimonials') }}</a>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                            <a href="{{ route('testimonial.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-film sidenav-main__icon"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17" x2="7" y2="17"></line><line x1="17" y1="17" x2="22" y2="17"></line><line x1="17" y1="7" x2="22" y2="7"></line></svg></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 col-12">
          <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count($team) }}</h2>
                        <a href="{{ route('team.index') }}">{{ __('Total Team') }}</a>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                            <a href="{{ route('team.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 col-12">
          <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count($blog) }}</h2>
                        <a href="{{ route('blog.index') }}">{{ __('Total Blog') }}</a>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                            <a href="{{ route('blog.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 col-12">
          <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ $gallery->count() }}</h2>
                        <a href="{{ route('gallery.index') }}">{{ __('Total Gallery') }}</a>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                            <a href="{{ route('gallery.index') }}">
                                <i data-feather='music'></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row pb-50">
                        <div class="col-sm-6 col-12 d-flex justify-content-between flex-column order-sm-1 order-2 mt-1 mt-sm-0">
                            <div id="testChart"></div>
                            <button type="button" class="btn btn-primary"><a style="color: #fff" href="{{ route('blog.index') }}">Voir les détails</a></button>
                        </div>
                        <div class="col-sm-6 col-12 d-flex justify-content-between flex-column text-left order-sm-2 order-1">
                            <h3>Total des blogs</h3>
                            <div class="dropdown chart-dropdown text-right">
                                <button class="dropdown_btn_text btn btn-sm border-0 dropdown-toggle p-50" type="button"
                                    id="dropdownItem5" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Cette année
                                </button>

                                <div class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="dropdownItem5">
                                    {{-- <a class="dropdown-item day_change_admin" href="javascript:void(0);" data-id="week">Last Week</a> --}}
                                    <a class="dropdown-item day_change_admin" href="javascript:void(0);" data-id="month">Ce mois-ci</a>
                                    <a class="dropdown-item day_change_admin" href="javascript:void(0);" data-id="year">Cette année</a>
                                </div>
                            </div>
                            <div id="avg-sessions-chart">
                                {{-- <svg id="SvgjsSvg1084" width="216" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1086" class="apexcharts-inner apexcharts-graphical" transform="translate(19.799999999999997, 0)"><defs id="SvgjsDefs1085"><linearGradient id="SvgjsLinearGradient1089" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1090" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1091" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1092" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMasknihy6ein"><rect id="SvgjsRect1094" width="220.00000000000003" height="200" x="-17.799999999999997" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasknihy6ein"><rect id="SvgjsRect1095" width="188.4" height="204" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1093" width="13.83" height="200" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1089)" class="apexcharts-xcrosshairs" y2="200" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1106" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1107" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1109" class="apexcharts-grid"><g id="SvgjsG1110" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1112" x1="-15.799999999999999" y1="0" x2="200.20000000000002" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1113" x1="-15.799999999999999" y1="50" x2="200.20000000000002" y2="50" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1114" x1="-15.799999999999999" y1="100" x2="200.20000000000002" y2="100" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1115" x1="-15.799999999999999" y1="150" x2="200.20000000000002" y2="150" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1116" x1="-15.799999999999999" y1="200" x2="200.20000000000002" y2="200" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1111" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1118" x1="0" y1="200" x2="184.4" y2="200" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1117" x1="0" y1="1" x2="0" y2="200" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1096" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1097" class="apexcharts-series" rel="1" seriesName="Sessions" data:realIndex="0"><path id="SvgjsPath1099" d="M-6.915 200L-6.915 140.9575C-2.3050000000000006 136.34750000000003 2.3050000000000006 136.34750000000003 6.915 140.9575L6.915 140.9575L6.915 200L6.915 200C6.915 200 -6.915 200 -6.915 200 " fill="rgba(235,240,247,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknihy6ein)" pathTo="M -6.915 200L -6.915 140.9575Q 0 134.04250000000002 6.915 140.9575L 6.915 140.9575L 6.915 200L 6.915 200z" pathFrom="M -6.915 200L -6.915 200L 6.915 200L 6.915 200L 6.915 200L -6.915 200" cy="137.5" cx="6.915" j="0" val="75" barHeight="62.5" barWidth="13.83"></path><path id="SvgjsPath1100" d="M23.818333333333335 200L23.818333333333335 99.29083333333332C28.428333333333335 94.68083333333331 33.038333333333334 94.68083333333331 37.64833333333333 99.29083333333332L37.64833333333333 99.29083333333332L37.64833333333333 200L37.64833333333333 200C37.64833333333333 200 23.818333333333335 200 23.818333333333335 200 " fill="rgba(235,240,247,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknihy6ein)" pathTo="M 23.818333333333335 200L 23.818333333333335 99.29083333333332Q 30.733333333333334 92.37583333333332 37.64833333333333 99.29083333333332L 37.64833333333333 99.29083333333332L 37.64833333333333 200L 37.64833333333333 200z" pathFrom="M 23.818333333333335 200L 23.818333333333335 200L 37.64833333333333 200L 37.64833333333333 200L 37.64833333333333 200L 23.818333333333335 200" cy="95.83333333333333" cx="37.64833333333333" j="1" val="125" barHeight="104.16666666666667" barWidth="13.83"></path><path id="SvgjsPath1101" d="M54.55166666666667 200L54.55166666666667 15.95750000000001C59.161666666666676 11.347499999999997 63.771666666666675 11.347499999999997 68.38166666666667 15.95750000000001L68.38166666666667 15.95750000000001L68.38166666666667 200L68.38166666666667 200C68.38166666666667 200 54.55166666666667 200 54.55166666666667 200 " fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknihy6ein)" pathTo="M 54.55166666666667 200L 54.55166666666667 15.9575Q 61.46666666666667 9.0425 68.38166666666667 15.9575L 68.38166666666667 15.9575L 68.38166666666667 200L 68.38166666666667 200z" pathFrom="M 54.55166666666667 200L 54.55166666666667 200L 68.38166666666667 200L 68.38166666666667 200L 68.38166666666667 200L 54.55166666666667 200" cy="12.5" cx="68.38166666666667" j="2" val="225" barHeight="187.5" barWidth="13.83"></path><path id="SvgjsPath1102" d="M85.285 200L85.285 57.62416666666667C89.895 53.014166666666654 94.505 53.014166666666654 99.115 57.62416666666667L99.115 57.62416666666667L99.115 200L99.115 200C99.115 200 85.285 200 85.285 200 " fill="rgba(235,240,247,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknihy6ein)" pathTo="M 85.285 200L 85.285 57.62416666666666Q 92.2 50.70916666666666 99.115 57.62416666666666L 99.115 57.62416666666666L 99.115 200L 99.115 200z" pathFrom="M 85.285 200L 85.285 200L 99.115 200L 99.115 200L 99.115 200L 85.285 200" cy="54.16666666666666" cx="99.115" j="3" val="175" barHeight="145.83333333333334" barWidth="13.83"></path><path id="SvgjsPath1103" d="M116.01833333333333 200L116.01833333333333 99.29083333333332C120.62833333333333 94.68083333333331 125.23833333333334 94.68083333333331 129.84833333333333 99.29083333333332L129.84833333333333 99.29083333333332L129.84833333333333 200L129.84833333333333 200C129.84833333333333 200 116.01833333333333 200 116.01833333333333 200 " fill="rgba(235,240,247,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknihy6ein)" pathTo="M 116.01833333333333 200L 116.01833333333333 99.29083333333332Q 122.93333333333334 92.37583333333332 129.84833333333333 99.29083333333332L 129.84833333333333 99.29083333333332L 129.84833333333333 200L 129.84833333333333 200z" pathFrom="M 116.01833333333333 200L 116.01833333333333 200L 129.84833333333333 200L 129.84833333333333 200L 129.84833333333333 200L 116.01833333333333 200" cy="95.83333333333333" cx="129.84833333333333" j="4" val="125" barHeight="104.16666666666667" barWidth="13.83"></path><path id="SvgjsPath1104" d="M146.7516666666667 200L146.7516666666667 140.9575C151.36166666666668 136.34750000000003 155.9716666666667 136.34750000000003 160.5816666666667 140.9575L160.5816666666667 140.9575L160.5816666666667 200L160.5816666666667 200C160.5816666666667 200 146.7516666666667 200 146.7516666666667 200 " fill="rgba(235,240,247,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknihy6ein)" pathTo="M 146.7516666666667 200L 146.7516666666667 140.9575Q 153.66666666666669 134.04250000000002 160.5816666666667 140.9575L 160.5816666666667 140.9575L 160.5816666666667 200L 160.5816666666667 200z" pathFrom="M 146.7516666666667 200L 146.7516666666667 200L 160.5816666666667 200L 160.5816666666667 200L 160.5816666666667 200L 146.7516666666667 200" cy="137.5" cx="160.5816666666667" j="5" val="75" barHeight="62.5" barWidth="13.83"></path><path id="SvgjsPath1105" d="M177.485 200L177.485 182.62416666666667C182.095 178.01416666666668 186.705 178.01416666666668 191.31500000000003 182.62416666666667L191.31500000000003 182.62416666666667L191.31500000000003 200L191.31500000000003 200C191.31500000000003 200 177.485 200 177.485 200 " fill="rgba(235,240,247,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknihy6ein)" pathTo="M 177.485 200L 177.485 182.62416666666667Q 184.4 175.70916666666668 191.31500000000003 182.62416666666667L 191.31500000000003 182.62416666666667L 191.31500000000003 200L 191.31500000000003 200z" pathFrom="M 177.485 200L 177.485 200L 191.31500000000003 200L 191.31500000000003 200L 191.31500000000003 200L 177.485 200" cy="179.16666666666666" cx="191.31500000000003" j="6" val="25" barHeight="20.833333333333336" barWidth="13.83"></path></g><g id="SvgjsG1098" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1119" x1="-15.799999999999999" y1="0" x2="200.20000000000002" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1120" x1="-15.799999999999999" y1="0" x2="200.20000000000002" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1121" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1122" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1123" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1108" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1087" class="apexcharts-annotations"></g></svg> --}}
                                <div id="chart"></div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row avg-sessions pt-50">
                        <div class="col-6 mb-2">
                            <p class="mb-50">Total Blog: {{ count($blog) }}</p>
                            <div class="progress progress-bar-primary" style="height: 6px">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="{{ count($blog) }}" aria-valuemax="100" style="width: {{ count($blog) }}%"></div>
                            </div>
                        </div>
                        <div class="col-6 mb-2">
                            <p class="mb-50">Total des utilisateurs: {{ count($users) }}</p>
                            <div class="progress progress-bar-warning" style="height: 6px">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ count($users) }}"
                                    aria-valuemin="{{ count($users) }}" aria-valuemax="100" style="width: {{ count($users) }}%"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <p class="mb-50">Services: {{ count($service) }}</p>
                            <div class="progress progress-bar-danger" style="height: 6px">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ count($service) }}"
                                    aria-valuemin="{{ count($service) }}" aria-valuemax="100" style="width: {{ count($service) }}%"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <p class="mb-50">Galerie: {{ $gallery->count() }}</p>
                            <div class="progress progress-bar-success" style="height: 6px">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $gallery->count() }}"
                                    aria-valuemin="{{ $gallery->count() }}" aria-valuemax="100" style="width: {{ $gallery->count() }}%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('.day_change_admin').on('click',function () {
                $('.dropdown_btn_text').text($(this).text())

                let data = $(this).attr('data-id');
                // alert(data);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('day.change.admin') }}",
                    type: "post",
                    data:{
                        data:data,
                    },
                    success: function(data)
                    {
                        $('#chart').html(data.data);
                    }
                })
            });
        });
    </script>

    <script>
        var options = {
        series: [{
          name: 'Total Blogs',
          data: @json($total_blogs)
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct','Nov','Dec'],
        },
        fill: {
          opacity: 1
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>

    <script>
        var options = {
          series: [{
          data: [{{ count($blog) }},{{ count($users) }},{{ count($service) }},{{ count($gallery) }},{{ count($team) }},{{ count($testimonial) }}]
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
            horizontal: true,
          }
        },
        dataLabels: {
          enabled: false
        },
        xaxis: {
          categories: ['Blog', "Utilisateurs", "Services", "Galeries", "Équipes", "Témoignages"],
        }
        };

        var chart = new ApexCharts(document.querySelector("#testChart"), options);
        chart.render();
    </script>

@endsection

@section('css')

<style>
  .apexcharts-zoomin-icon, .apexcharts-zoomout-icon, .apexcharts-zoom-icon, .apexcharts-pan-icon, .apexcharts-reset-icon{
      display: none;
  }
</style>

@endsection
