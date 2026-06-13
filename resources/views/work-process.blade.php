@extends('layout')
@section('title', $seo->title ?? 'Our Works')
@section('content')
    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area bg-cover shadow theme-hard text-center text-light"
        style="background-image: url({{ asset('assets/img/banner/8.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Work Process</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li>Work Process</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


    <!-- Start Process Area
        ============================================= -->
    <div class="process-style-two-area amnim default-padding bottom-less text-light">
        <div class="shape">
            <img src="{{ asset('assets/img/shape/46.png') }}" alt="Image Not Found">
        </div>

        <div class="container">
            <div class="row">
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="process-style-two">
                        <span>01</span>
                        <h4>Choose A Service</h4>
                        <p>
                            Join us in a replay of this webinar to see how to go from the first line of code to the first
                            message.
                        </p>
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/24.png') }}" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="process-style-two">
                        <span>02</span>
                        <h4>Project Analysis</h4>
                        <p>
                            Join us in a replay of this webinar to see how to go from the first line of code to the first
                            message.
                        </p>
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/25.png') }}" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="process-style-two">
                        <span>03</span>
                        <h4>Deliver Result</h4>
                        <p>
                            Join us in a replay of this webinar to see how to go from the first line of code to the first
                            message.
                        </p>
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/26.png') }}" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="process-style-two">
                        <span>04</span>
                        <h4>Choose A Service</h4>
                        <p>
                            Join us in a replay of this webinar to see how to go from the first line of code to the first
                            message.
                        </p>
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/24.png') }}" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="process-style-two">
                        <span>05</span>
                        <h4>Project Analysis</h4>
                        <p>
                            Join us in a replay of this webinar to see how to go from the first line of code to the first
                            message.
                        </p>
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/25.png') }}" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="process-style-two">
                        <span>06</span>
                        <h4>Deliver Result</h4>
                        <p>
                            Join us in a replay of this webinar to see how to go from the first line of code to the first
                            message.
                        </p>
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/26.png') }}" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Process Area -->

    {{-- @include('includes.partner'); --}}
@endsection
