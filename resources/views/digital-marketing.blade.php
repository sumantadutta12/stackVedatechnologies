@extends('layout')
@section('title', $seo->title ?? 'Digital Marketing - SEO')
@section('content')
    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area bg-cover shadow theme-hard text-center text-light"
        style="background-image: url(assets/img/banner/8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Digital Marketing - SEO</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li>Digital Marketing - SEO</li>
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
                SEO Services: Turn Searches<br />
                into Handshakes
            </h1>

            <!-- Description -->
            <p class="main-desc mb-5">
                Let's be honest: having a beautiful website doesn't mean much if your ideal clients can't actually
                find it. When a decision-maker sits down and searches for the exact solution you offer, your business
                needs to be the first thing they see. If you aren't showing up, you are handing revenue directly
                to your competitors.
            </p>

            <p class="main-desc mb-5">
                At <span>Stackveda Technologies</span>, we don't just chase vanity metrics or obsess over ranking
                for random words. We care about driving high-intent, qualified traffic to your site that actually
                converts into real business. We treat Search Engine Optimization (SEO) like a digital sales pipeline.
                Here is how we build it:
            </p>

            <!-- Stack Section Heading -->
            <h2 class="main-title" style="font-size: 1.8rem; margin-top: 40px; margin-bottom: 30px;">
                Our Approach to SEO
            </h2>

            <!-- Service Row: Audits -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="M505.749 475.587 378.413 348.25c28.365-34.79 45.417-79.276 45.417-127.837C423.83 99.983 323.847 0 201.416 0 78.979 0 0 99.984 0 220.413c0 120.43 99.984 220.413 222.413 220.413 48.568 0 93.058-17.051 127.848-45.416l127.328 127.319c4.165 4.165 9.623 6.251 15.081 6.251s10.916-2.086 15.081-6.251c8.332-8.33 8.332-21.833-.002-30.142zM201.416 399.826C101.034 399.826 21 319.793 21 219.413S101.034 39 201.416 39c100.38 0 180.413 80.033 180.413 180.413S301.796 399.826 201.416 399.826z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        The Blueprint<br />(Deep-Dive Audits)
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        We don't guess. We start by looking under the hood of your current website, figuring out
                        exactly what's holding you back, and identifying where your competitors are currently
                        stealing your traffic.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Technical SEO -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="M496 240h-16V96c0-26.51-21.49-48-48-48H80c-26.51 0-48 21.49-48 48v144H16c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h16v128c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V288h16c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16zM416 448H96c-8.837 0-16-7.163-16-16V96c0-8.837 7.163-16 16-16h320c8.837 0 16 7.163 16 16v336c0 8.837-7.163 16-16 16zm-48-292v24c0 6.627-5.373 12-12 12H156c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm0 80v24c0 6.627-5.373 12-12 12H156c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm0 80v24c0 6.627-5.373 12-12 12H156c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        The Foundation<br />(Technical SEO)
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        If search engines can't read your site, nothing else matters. We fix the backend —
                        improving site speed, mobile experience, and digital architecture — so Google can
                        easily crawl and trust your website.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Content & Keyword -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="M416 0H96C60.65 0 32 28.65 32 64v384c0 35.35 28.65 64 64 64h320c35.35 0 64-28.65 64-64V64c0-35.35-28.65-64-64-64zm32 448c0 17.64-14.36 32-32 32H96c-17.64 0-32-14.36-32-32V64c0-17.64 14.36-32 32-32h320c17.64 0 32 14.36 32 32v384zM144 192h224c8.836 0 16-7.164 16-16s-7.164-16-16-16H144c-8.836 0-16 7.164-16 16s7.164 16 16 16zm224 64H144c-8.836 0-16 7.164-16 16s7.164 16 16 16h224c8.836 0 16-7.164 16-16s-7.164-16-16-16zm0 96H144c-8.836 0-16 7.164-16 16s7.164 16 16 16h224c8.836 0 16-7.164 16-16s-7.164-16-16-16z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        The Conversation<br />(Content &amp; Keyword Strategy)
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        We find out exactly what phrases your buyers are typing into the search bar. Then, we
                        optimize your pages to answer their specific questions, positioning your brand as the
                        undeniable expert in your field.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Link Building -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="M326.612 185.391c-33.599-33.595-88.171-33.592-121.767 0l-67.876 67.876c-33.596 33.596-33.596 88.17 0 121.765 33.596 33.595 88.171 33.592 121.767 0l45.024-45.023c-7.072 2.434-14.378 3.817-21.74 4.144l-34.044 34.044c-22.402 22.403-58.595 22.401-80.996 0-22.403-22.402-22.403-58.594 0-80.996l67.876-67.876c22.402-22.402 58.595-22.401 80.996 0 9.309 9.308 14.933 21.173 16.36 33.487l16.67-16.67c-4.326-16.18-12.813-31.148-24.27-50.751zM185.388 326.613c33.599 33.594 88.171 33.592 121.767 0l67.876-67.876c33.596-33.596 33.596-88.17 0-121.766-33.596-33.595-88.171-33.592-121.767 0l-45.024 45.023c7.072-2.434 14.378-3.817 21.74-4.144l34.044-34.044c22.402-22.402 58.595-22.401 80.996 0 22.403 22.402 22.403 58.594 0 80.997l-67.876 67.876c-22.401 22.402-58.595 22.4-80.996 0-9.308-9.308-14.932-21.173-16.36-33.487l-16.67 16.67c4.326 16.18 12.814 31.148 24.27 50.751z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        The Reputation<br />(Link Building)
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        Trust is everything online. We help build your website's authority by securing
                        high-quality backlinks from respected voices in your industry, signaling to search
                        engines that you are a top-tier resource.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Why Work With Us -->
            <h2 class="main-title" style="font-size: 1.8rem; margin-top: 50px; margin-bottom: 20px;">
                Why Work With Stackveda Technologies?
            </h2>

            <p class="main-desc mb-5">
                We cut through the confusing marketing jargon. When you partner with us, you won't get messy
                spreadsheets filled with metrics that don't matter to your business.
            </p>

            <!-- Service Row: Focus on the Close -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="M256 0C114.833 0 0 114.833 0 256s114.833 256 256 256 256-114.833 256-256S397.167 0 256 0zm0 490.667C126.604 490.667 21.333 385.396 21.333 256S126.604 21.333 256 21.333 490.667 126.604 490.667 256 385.396 490.667 256 490.667zm114.919-313.481-160 160a10.66 10.66 0 0 1-7.552 3.125 10.66 10.66 0 0 1-7.552-3.125l-74.667-74.667c-4.167-4.167-4.167-10.917 0-15.083s10.917-4.167 15.083 0l67.135 67.136 152.469-152.469c4.167-4.167 10.917-4.167 15.083 0 4.167 4.166 4.167 10.916.001 15.083z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Focus on<br />the Close
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        We measure our success by the quality of the leads we bring to your door,
                        not just raw page views.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Complete Transparency -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="M256 0C114.615 0 0 114.615 0 256s114.615 256 256 256 256-114.615 256-256S397.385 0 256 0zm0 490.667C126.604 490.667 21.333 385.396 21.333 256S126.604 21.333 256 21.333 490.667 126.604 490.667 256 385.396 490.667 256 490.667zm21.333-149.334H256c-5.896 0-10.667-4.771-10.667-10.667V224c0-5.896 4.771-10.667 10.667-10.667h21.333c5.896 0 10.667 4.771 10.667 10.667v106.667c0 5.895-4.771 10.666-10.667 10.666zM256 170.667c-17.646 0-32-14.354-32-32s14.354-32 32-32 32 14.354 32 32-14.354 32-32 32z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Complete<br />Transparency
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        You will always know exactly what we are doing, why we are doing it, and how it is
                        impacting your bottom line.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

        </div>
    </section>

@endsection
