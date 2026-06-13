@extends('layout')
@section('title', $seo->title ?? 'AI Integration Services')
@section('content')
    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area bg-cover shadow theme-hard text-center text-light"
        style="background-image: url(assets/img/banner/8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>AI Integration Services</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li>AI Integration Services</li>
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
                AI Integration Services: Turning Hype<br />
                into High-Yield Performance
            </h1>

            <!-- Description -->
            <p class="main-desc mb-5">
                Right now, everyone is talking about Artificial Intelligence. But there is a massive difference
                between playing around with off-the-shelf AI tools and actually integrating intelligent, secure
                machine learning models into your core business infrastructure.
            </p>

            <p class="main-desc mb-5">
                At <span>Stackveda Technologies</span>, we don't just add AI for the sake of a buzzword. We
                integrate practical, scalable AI solutions designed to automate your heavy lifting, secure your
                operations, and give your team the predictive insights they need to outmaneuver the competition.
                We bridge the gap between cutting-edge data science and your bottom line.
            </p>

            <!-- How We Bring AI Section -->
            <h2 class="main-title" style="font-size: 1.8rem; margin-top: 40px; margin-bottom: 20px;">
                How We Bring AI into Your Business
            </h2>

            <p class="main-desc mb-5">
                We take a highly strategic approach to AI, ensuring it works seamlessly with your existing
                technology stack rather than disrupting it.
            </p>

            <!-- Service Row: Smart Process Automation -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M288 167.2v-28.5c14.9-7.7 25-23.3 25-41.2 0-25.9-21-46.9-46.9-46.9S219 71.6 219 97.5c0 17.9 10.1 33.5 25 41.2v28.5c-29.2 4.4-55.2 17.6-75.3 36.8L99.2 156.4c2.6-7.5 1.7-16-3.3-22.9-8.5-11.6-24.8-14-36.4-5.5s-14 24.8-5.5 36.4 24.8 14 36.4 5.5c.7-.5 1.3-1.1 2-1.6l69.3 47.6C150.9 231 143 254.1 143 279c0 71.7 58.3 130 130 130s130-58.3 130-130c0-57.6-37.5-106.4-89-124.1l-26 12.3zM273 97.5c0 8.5-6.9 15.4-15.4 15.4S242.2 106 242.2 97.5s6.9-15.4 15.4-15.4S273 89 273 97.5zM207 327.7c-5.2-5.2-5.2-13.7 0-18.9l34-34c5.2-5.2 13.7-5.2 18.9 0s5.2 13.7 0 18.9l-34 34c-5.3 5.2-13.7 5.2-18.9 0zm18.9-75.3 58.6-58.6c5.2-5.2 13.7-5.2 18.9 0s5.2 13.7 0 18.9l-58.6 58.6c-5.2 5.2-13.7 5.2-18.9 0s-5.2-13.6 0-18.9z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Smart Process<br />Automation
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        We help you identify the repetitive, time-consuming tasks that are draining your resources.
                        By integrating AI-driven automation, we free up your human capital to focus on what they
                        do best: building relationships, closing deals, and driving growth.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Predictive Analytics -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M500 400H112V12c0-6.627-5.373-12-12-12H12C5.373 0 0 5.373 0 12v488c0 6.627 5.373 12 12 12h488c6.627 0 12-5.373 12-12v-88c0-6.627-5.373-12-12-12zm-325.465-67.2 61.626-137.85c3.496-7.818 14.18-8.635 18.84-1.428l51.552 79.731 44.857-67.285c4.051-6.076 12.741-6.62 17.496-.992l62.498 73.517c4.425 5.205 3.794 12.98-1.411 17.406-5.2 4.425-12.978 3.795-17.406-1.411l-52.678-61.963-44.64 66.96c-4.014 6.021-12.625 6.608-17.4 1.088l-51.265-79.305-52.49 117.312c-3.2 7.153-11.657 10.338-18.81 7.137-7.152-3.199-10.337-11.657-7.137-18.809l-1.232-.908z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Predictive Analytics<br />&amp; Forecasting
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        Stop guessing what your market will do next. We build intelligent models that analyze your
                        historical data to forecast trends, anticipate customer needs, and help you make proactive,
                        data-backed decisions.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Cloud-Native AI -->
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
                        Cloud-Native<br />AI Deployment
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        AI requires serious computing power. We engineer and deploy your AI solutions directly
                        into robust cloud environments like AWS, ensuring your intelligent systems are highly
                        scalable, incredibly fast, and cost-effective to run.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Conversational AI -->
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
                        Conversational AI &amp;<br />Customer Experience
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        We build sophisticated, context-aware chatbots and virtual assistants that go far beyond
                        basic scripted answers. These tools provide 24/7, high-quality support, triage complex
                        queries, and seamlessly route high-value leads to your sales teams.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Security & Compliance -->
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
                        Enterprise-Grade Security<br />&amp; Compliance
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        When you feed your business data into an AI model, security isn't optional — it's
                        everything. We build AI integrations with a security-first mindset, ensuring your
                        proprietary data remains locked down, isolated, and strictly compliant with industry
                        regulations.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Why Partner Section -->
            <h2 class="main-title" style="font-size: 1.8rem; margin-top: 50px; margin-bottom: 20px;">
                Why Partner with Stackveda for AI?
            </h2>

            <p class="main-desc mb-5">
                Implementing Artificial Intelligence shouldn't feel like a science experiment. You need a partner
                who understands how technology impacts enterprise workflows and revenue.
            </p>

            <!-- Service Row: Business-First -->
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
                        Business-First<br />Architecture
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        We don't start with the technology; we start with your business problem. Every AI model
                        we integrate is directly tied to a specific operational goal or revenue target.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Seamless Integration -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M326.612 185.391c-33.599-33.595-88.171-33.592-121.767 0l-67.876 67.876c-33.596 33.596-33.596 88.17 0 121.765 33.596 33.595 88.171 33.592 121.767 0l45.024-45.023c-7.072 2.434-14.378 3.817-21.74 4.144l-34.044 34.044c-22.402 22.403-58.595 22.401-80.996 0-22.403-22.402-22.403-58.594 0-80.996l67.876-67.876c22.402-22.402 58.595-22.401 80.996 0 9.309 9.308 14.933 21.173 16.36 33.487l16.67-16.67c-4.326-16.18-12.813-31.148-24.27-50.751zM185.388 326.613c33.599 33.594 88.171 33.592 121.767 0l67.876-67.876c33.596-33.596 33.596-88.17 0-121.766-33.596-33.595-88.171-33.592-121.767 0l-45.024 45.023c7.072-2.434 14.378-3.817 21.74-4.144l34.044-34.044c22.402-22.402 58.595-22.401 80.996 0 22.403 22.402 22.403 58.594 0 80.997l-67.876 67.876c-22.401 22.402-58.595 22.4-80.996 0-9.308-9.308-14.932-21.173-16.36-33.487l-16.67 16.67c4.326 16.18 12.814 31.148 24.27 50.751z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Seamless Tech<br />Stack Integration
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        You shouldn't have to rip out your current systems to make room for AI. Our engineers
                        ensure that your new intelligent tools communicate flawlessly with your existing CRM,
                        ERP, and internal databases.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Scalable & Future-Proof -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256zm72 20v-40c0-6.6 5.4-12 12-12h116v-67c0-10.7 12.9-16 20.5-8.5l99 99c4.7 4.7 4.7 12.3 0 17l-99 99c-7.6 7.6-20.5 2.2-20.5-8.5v-67H140c-6.6 0-12-5.4-12-12z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Scalable and<br />Future-Proof
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        As your business grows, your AI needs to grow with it. We build modular, cloud-ready
                        solutions that can scale up instantly without breaking your architecture.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

        </div>
    </section>

@endsection
