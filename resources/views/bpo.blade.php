@extends('layout')
@section('title', $seo->title ?? 'Business Process Outsourcing')
@section('content')
    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area bg-cover shadow theme-hard text-center text-light"
        style="background-image: url(assets/img/banner/8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Business Process Outsourcing</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li>Business Process Outsourcing</li>
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
                Business Process Outsourcing (BPO):<br />
                Accelerating Revenue and Scaling Operations
            </h1>

            <!-- Description -->
            <p class="main-desc mb-5">
                When you are focused on closing major deals and expanding your market share, getting bogged down
                in routine operational tasks kills your momentum. Offloading work shouldn't mean sacrificing
                quality; it should mean empowering your enterprise to move faster.
            </p>

            <p class="main-desc mb-5">
                At <span>Stackveda Technologies</span>, our BPO services are designed to act as a seamless,
                high-performing extension of your own team. We don't just handle tasks — we optimize your
                workflows so your core leadership can focus exclusively on high-impact growth and strategy.
            </p>

            <!-- How We Optimize Section -->
            <h2 class="main-title" style="font-size: 1.8rem; margin-top: 40px; margin-bottom: 30px;">
                How We Optimize Your Operations
            </h2>

            <!-- Service Row: B2B Sales Support -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61L14.9 28.91C6.61 30.91 0 39.81 0 48.01a481.67 481.67 0 0 0 482 482c8.2 0 17.1-6.61 19.1-14.9l28.3-107.7a24.16 24.16 0 0 0-32.01-15.61z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        B2B Sales Support<br />&amp; Lead Generation
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        We understand the complex anatomy of the modern sales cycle. Our teams handle
                        top-of-funnel prospecting, intelligent lead qualification, and pipeline management,
                        ensuring your senior closers are only spending time with high-intent decision-makers.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Customer Experience -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M256 32C114.615 32 0 125.119 0 240c0 57.262 27.577 109.261 72.686 147.03C68.718 423.405 44.509 461.731 0 480c55.518 0 109.731-16.399 152.156-43.886C185.452 447.237 220.217 448 256 448c141.385 0 256-93.119 256-208S397.385 32 256 32z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Customer Experience<br />&amp; Success
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        Client retention is just as critical as acquisition. We provide top-tier, context-aware
                        customer support that resolves issues quickly and turns routine inquiries into opportunities
                        for upselling and long-term brand loyalty.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Back-Office -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zm-6 400H54a6 6 0 0 1-6-6V86a6 6 0 0 1 6-6h404a6 6 0 0 1 6 6v340a6 6 0 0 1-6 6zm-42-92v24c0 6.627-5.373 12-12 12H108c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h296c6.627 0 12 5.373 12 12zm0-96v24c0 6.627-5.373 12-12 12H108c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h296c6.627 0 12 5.373 12 12zm0-96v24c0 6.627-5.373 12-12 12H108c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h296c6.627 0 12 5.373 12 12z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Back-Office &amp;<br />Administrative Scaling
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        From secure data management to compliance tracking, we streamline the invisible
                        administrative gears of your business. We ensure your back office runs with strict,
                        corporate-level efficiency, reducing overhead costs without cutting corners.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

        </div>
    </section>

@endsection
