


    <div class="header_absolute s-pb-30">
        <header class="page_header ds">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-3 col-11">
                        <a href="./" class="logo text-center">
                            <img src="{{ asset('uploads/images/generalSetting') }}/{{ generalsettings()->site_logo }}" alt="">
                        </a>
                    </div>
                    <div class="col-xl-8 col-lg-6 col-1 text-sm-center">
                        <!-- main nav start -->
                        <nav class="top-nav">
                            <ul class="nav sf-menu">

                                <li class="@yield('HomeActive')">
                                    <a href="{{ route('root') }}">Home</a>
                                </li>
                                <li class="@yield('AboutActive')">
                                    <a href="{{ route('about') }}">About</a>
                                </li>
                                <li class="@yield('ServiceActive')">
                                    <a href="{{ route('service') }}">Services</a>
                                </li>

                                <!-- blog -->
                                <li class="@yield('BlogActive')">
                                    <a href="{{ route('blog') }}">Blog</a>
                                </li>
                                <!-- eof blog -->

                                {{-- team  --}}
                                <li class="@yield('TeamActive')">
                                    <a href="{{ route('team') }}">Team</a>
                                </li>
                                {{-- endof team --}}

                                {{-- testimonial --}}
                                <li class="@yield('TestimonialActive')">
                                    <a href="{{ route('testimonial') }}">Testimonials</a>
                                </li>
                                {{-- end of testimonial --}}

                                {{-- start of contacts --}}

                                <li class="@yield('ContactActive')">
                                    <a href="{{ route('contact/us') }}">Contacts</a>
                                </li>
                                <!-- eof contacts -->


                                {{-- faq --}}
                                <li class="@yield('FaqActive')">
                                    <a href="{{ route('faq.view') }}">FAQ</a>

                                </li>
                                {{-- endfaq --}}

                                

                                <li class="@yield('FeatureActive')">
                                    <a href="{{ route('features') }}">features</a>
                                </li>

                                

                            </ul>
                        </nav>
                        <!-- eof main nav -->
                    </div>
                    <div class="col-xl-2 col-lg-3 text-lg-left text-xl-right d-none d-lg-block">
                        <div class="header_phone">

                            <a href="tel:{{ generalsettings()->phone }}">
                                <h6 style="font-size:17px">

                                    {{-- <span>1-800</span>-123-4567 --}}
                                    @php
                                        $phone = generalsettings()->phone;
                                        $phone_one = substr($phone, 0,5);
                                        $phone_two = substr($phone, 5);
                                    @endphp
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    <span>{{ $phone_one }}</span>{{ $phone_two }}
    
                                </h6>
                            </a>
                            
                        </div>
                    </div>
                    @yield('search_box')
                </div>
            </div>
            <!-- header toggler -->
            <span class="toggle_menu">
                <span></span>
            </span>
        </header>
    </div>
