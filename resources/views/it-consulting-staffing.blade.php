@extends('layout')
@section('title', $seo->title ?? 'IT Support & Consulting')
@section('content')
    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area bg-cover shadow theme-hard text-center text-light"
        style="background-image: url(assets/img/banner/8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>IT Support &amp; Consulting</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li>IT Support &amp; Consulting</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


    <section class="web-dev-section">
        <div class="container">

            <!-- Heading -->
            <h1 class="main-title">
                IT Support &amp; Consulting: Architecting<br />
                Cloud-Ready, Secure Growth
            </h1>

            <!-- Description -->
            <p class="main-desc mb-5">
                Your technology infrastructure should never be a bottleneck; it should be your strongest
                competitive advantage. Too many businesses treat IT as a reactive "break-fix" department,
                constantly putting out fires instead of planning for the future.
            </p>

            <p class="main-desc mb-5">
                At <span>Stackveda Technologies</span>, we approach IT consulting from a business-first
                perspective. We engineer resilient, scalable, and highly secure digital environments that
                protect your proprietary data and empower your workforce to operate at peak performance,
                no matter where they are located.
            </p>

            <!-- Strategic IT Capabilities Section -->
            <h2 class="main-title" style="font-size: 1.8rem; margin-top: 40px; margin-bottom: 30px;">
                Our Strategic IT Capabilities
            </h2>

            <!-- Service Row: Cloud Strategy -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M382.56 233.376C379.968 141.632 305.28 68 214 68c-84 0-154.496 61.344-166.24 144.416C20.352 219.392 0 244.8 0 275c0 36.544 29.456 66 66 66h100v-42.24l-38.848 38.848a14.994 14.994 0 0 1-21.216 0 14.994 14.994 0 0 1 0-21.216l64.576-64.576a14.994 14.994 0 0 1 21.216 0l64.576 64.576a14.994 14.994 0 0 1 0 21.216 14.966 14.966 0 0 1-10.608 4.4 14.966 14.966 0 0 1-10.608-4.4L196 298.752V341h162c46.144 0 84-37.856 84-84 0-12.416-2.848-24.128-7.616-34.752l-51.824 51.824z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Cloud Strategy<br />&amp; Architecture
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        The modern enterprise runs on the cloud. We design, execute, and optimize seamless
                        migrations to leading platforms like AWS. We ensure your infrastructure is built for
                        maximum uptime, operational cost-efficiency, and effortless global scalability.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Cybersecurity -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Enterprise Cybersecurity<br />&amp; Data Protection
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        The digital threat landscape is evolving daily. We implement proactive, uncompromising
                        security measures — from advanced endpoint protection and threat detection to comprehensive
                        disaster recovery planning — ensuring your critical business assets are never left vulnerable.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: 24/7 Managed IT Support -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        24/7 Managed<br />IT Support
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        Stop waiting for systems to fail. Our proactive monitoring and dedicated technical support
                        teams maintain the health of your network around the clock. We identify and resolve
                        potential bottlenecks before they ever impact your daily operations or your bottom line.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

        </div>
    </section>

@endsection
