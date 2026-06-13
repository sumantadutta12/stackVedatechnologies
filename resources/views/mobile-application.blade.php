@extends('layout')
@section('title', $seo->title ?? 'Mobile App Development')
@section('content')
    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area bg-cover shadow theme-hard text-center text-light"
        style="background-image: url(assets/img/banner/8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Mobile App Development</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li>Mobile App Development</li>
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
                Mobile App Development<br />
                at Stackveda Technologies
            </h1>

            <!-- Description -->
            <p class="main-desc mb-5">
                At <span>Stackveda Technologies</span>, we don't just write code; we build digital experiences
                that your customers will genuinely love interacting with. Whether you are aiming for a highly
                polished, platform-specific experience or a smart, cost-effective app that works everywhere,
                our team has the technical chops to bring it to life.
            </p>

            <!-- Tech Stack Section Heading -->
            <h2 class="main-title" style="font-size: 1.8rem; margin-top: 40px; margin-bottom: 20px;">
                The Tech We Use to Build Your App
            </h2>

            <p class="main-desc mb-5">
                We keep our toolkit sharp so we can recommend the exact right technology for your specific
                business goals:
            </p>

            <!-- Service Row: iOS -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M407.944 295.811c-.555-55.595 45.354-82.373 47.411-83.695-25.836-37.79-66.007-42.952-80.276-43.518-34.183-3.462-66.9 20.204-84.224 20.204-17.34 0-44.008-19.726-72.384-19.196-37.226.531-71.679 21.674-90.929 54.925-38.814 67.297-9.948 166.985 27.87 221.631 18.543 26.67 40.623 56.636 69.53 55.566 27.974-1.07 38.517-18.02 72.342-18.02 33.809 0 43.29 18.02 72.893 17.43 30.104-.557 49.12-27.199 67.481-53.975 21.406-30.883 30.163-60.895 30.68-62.408-.663-.29-58.727-22.527-59.394-89.944zM352.679 112.56c15.327-18.674 25.695-44.38 22.854-70.143-22.106.944-49.3 14.814-65.24 33.2-14.236 16.54-26.77 43.259-23.402 68.71 24.7 1.894 49.918-12.537 65.788-31.767z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        iOS Development<br />(Swift)
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        Want to give Apple users that premium, incredibly smooth feel? We use Swift to build
                        native iOS apps that look gorgeous, prioritize security, and feel like a natural
                        extension of the iPhone or iPad.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Android -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M80.746 322.467c0 22.458 18.214 40.68 40.663 40.68h20.349v69.532c0 18.849 15.274 34.131 34.117 34.131 18.852 0 34.13-15.282 34.13-34.131V363.147h52.977v69.532c0 18.849 15.274 34.131 34.126 34.131 18.842 0 34.117-15.282 34.117-34.131V363.147h20.349c22.449 0 40.663-18.222 40.663-40.68V159.275H80.746zM34.123 159.275C15.271 159.275 0 174.557 0 193.406v150.724c0 18.849 15.271 34.131 34.123 34.131 18.852 0 34.126-15.282 34.126-34.131V193.406c0-18.849-15.274-34.131-34.126-34.131zM477.877 159.275c-18.852 0-34.126 15.282-34.126 34.131v150.724c0 18.849 15.274 34.131 34.126 34.131C496.729 378.261 512 362.979 512 344.13V193.406c0-18.849-15.271-34.131-34.123-34.131zM333.977 33.473l30.47-30.47c3.88-3.88 3.88-10.163 0-14.042-3.879-3.879-10.162-3.879-14.042 0l-34.378 34.378C304.404 19.7 280.614 16.948 256 16.948c-24.614 0-48.404 2.752-60.027 6.391L161.595-11.039c-3.879-3.879-10.162-3.879-14.042 0-3.88 3.879-3.88 10.162 0 14.042l30.47 30.47C134.145 52.085 83.789 101.667 80.877 159.275h350.245c-2.912-57.608-53.268-107.19-97.145-125.802zM198.656 109.275h-20v-20h20zm134.688 0h-20v-20h20z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Android Development<br />(Java &amp; Kotlin)
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        Ready to reach the massive, global Android market? Our developers use Java and Kotlin
                        to build rock-solid native apps that perform flawlessly across the huge variety of
                        Android devices out there.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Cross-Platform -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M505.749 475.587 378.413 348.25c28.365-34.79 45.417-79.276 45.417-127.837C423.83 99.983 323.847 0 201.416 0 78.979 0 0 99.984 0 220.413c0 120.43 99.984 220.413 222.413 220.413 48.568 0 93.058-17.051 127.848-45.416l127.328 127.319c4.165 4.165 9.623 6.251 15.081 6.251s10.916-2.086 15.081-6.251c8.332-8.33 8.332-21.833-.002-30.142zM201.416 399.826C101.034 399.826 21 319.793 21 219.413S101.034 39 201.416 39c100.38 0 180.413 80.033 180.413 180.413S301.796 399.826 201.416 399.826z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Cross-Platform<br />(Flutter &amp; React Native)
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        Need to launch on both Apple and Android quickly without doubling your development budget?
                        We love using Flutter and React Native. These frameworks allow us to build one beautiful,
                        high-performing app that works perfectly on both platforms — saving you serious time and money.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Why Build With Us Section -->
            <h2 class="main-title" style="font-size: 1.8rem; margin-top: 50px; margin-bottom: 30px;">
                Why Build With Stackveda?
            </h2>

            <!-- Service Row: We Listen -->
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
                        We Listen<br />Before We Code
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        We don't just jump in and start typing. We take the time to deeply understand your
                        business, your market, and what your users actually need.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Heavy Lifting -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M487.083 104.703 405.986 23.606C394.416 12.036 378.948 5.6 362.785 5.6H149.215c-16.163 0-31.63 6.436-43.201 18.006L24.917 104.703C13.347 116.273 6.911 131.74 6.911 147.904V470.4c0 19.882 16.118 36 36 36h426.178c19.882 0 36-16.118 36-36V147.904c0-16.163-6.436-31.631-18.006-43.201zM256 448.6c-79.257 0-143.6-64.343-143.6-143.6S176.743 161.4 256 161.4 399.6 225.743 399.6 305 335.257 448.6 256 448.6zM176 63.6h160v72H176v-72zm153.6 241.4c0 40.579-33.021 73.6-73.6 73.6s-73.6-33.021-73.6-73.6S215.421 231.4 256 231.4s73.6 33.021 73.6 73.6z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        We Handle the<br />Heavy Lifting
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        From the first wireframe sketch to the exciting day your app finally goes live in the
                        App Store and Google Play, we manage the entire process for you.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Built for Tomorrow -->
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
                        Built for<br />Tomorrow
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        If your app takes off, the last thing you want is for it to crash under the pressure.
                        We build scalable architecture designed to grow right alongside your business.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

        </div>
    </section>

@endsection
