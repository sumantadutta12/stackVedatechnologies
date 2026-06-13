@extends('layout')
@section('title', $seo->title ?? 'Live project training')
@section('content')
    <!-- Start Banner Area
        ============================================= -->
    <div class="banner-style-four-area bg-cover" style="background-image: url({{ asset('assets/img/shape/banner-3.jpg') }});">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-10">
                    <div class="banner-four-top-info">
                        <h4>Live project training</h4>
                        <h2>Innovation of <strong>Tech Solution</strong></h2>
                        <img src="{{ asset('assets/img/about/8.jpg') }}" alt="Image Not Found">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="banner-four-bottom-info">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/illustration/1.png') }}" alt="Image Not Found">
                        </div>
                        <div class="info">
                            <p>
                                We provide the most responsive and effective IT design for companies and businesses
                                worldwide. Get the most out of your team's operations that create amazing UI/UX experiences.
                            </p>
                        </div>
                        <div class="button">
                            <a class="btn-circle" href="javascript:void(0)"><i class="fas fa-long-arrow-right"></i> Let's talk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main -->


    <!-- Start Project
        ============================================= -->
    <div class="project-style-three-area default-padding bg-gray bg-cover"
        style="background-image: url(assets/img/shape/banner-7.jpg);">
        <div class="container">
            <div class="project-style-three-items">
                <!-- Single Item -->
                <div class="project-style-three-item">
                    <div class="row">
                        <div class="col-xl-8 col-lg-6">
                            <img src="https://imgs.search.brave.com/I91h2pEQjQua8HwFkgdFeI0OVUU5H3fh9oh3DLjhHF4/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMjE1/MTkwNDUwMi9waG90/by9jbG9zZXVwLXlv/dW5nLW1hbi1zb2Z0/d2FyZS1kZXZlbG9w/ZXJzLXVzaW5nLWNv/bXB1dGVyLXRvLXdy/aXRlLWNvZGUtYXBw/bGljYXRpb24tcHJv/Z3JhbS1mb3ItYWku/d2VicD9hPTEmYj0x/JnM9NjEyeDYxMiZ3/PTAmaz0yMCZjPUE3/WEVFU1ZsNDdET3Ro/dmZ1WXFZaFVHcDdp/UmY4Rm1QalI4Y2Ro/NEhlSVE9"
                                alt="Image Not Found">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="project-style-three-info">
                                <span>01 / </span>
                                <h4><a href="javascript:void(0)">CodeSphere Academy</a></h4>
                                <p>
                                    If you've built your IT systems over a period of time, you probably have a mix of
                                    different hardware and software.
                                </p>
                                <ul class="pf-tags">
                                    <li>Technology</li>
                                    <li>Software</li>
                                </ul>
                                <div class="bottom">
                                    <span>Client Name:</span>
                                    <h5>Aleesha Brown</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="project-style-three-item">
                    <div class="row">
                        <div class="col-xl-8 col-lg-6">
                            <img src="{{ asset('assets/img/projects/4.jpg') }}" alt="Image Not Found">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="project-style-three-info">
                                <span>02 / </span>
                                <h4><a href="javascript:void(0)">ProjectX Coding Lab</a></h4>
                                <p>
                                    If you've built your IT systems over a period of time, you probably have a mix of
                                    different hardware and software.
                                </p>
                                <ul class="pf-tags">
                                    <li>Technology</li>
                                    <li>Software</li>
                                </ul>
                                <div class="bottom">
                                    <span>Client Name:</span>
                                    <h5>Sarah Albert</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="project-style-three-item">
                    <div class="row">
                        <div class="col-xl-8 col-lg-6">
                            <img src="{{ asset('assets/img/projects/5.jpg') }}" alt="Image Not Found">
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="project-style-three-info">
                                <span>03 / </span>
                                <h4><a href="javascript:void(0)">NextGen Coders Hub</a></h4>
                                <p>
                                    If you've built your IT systems over a period of time, you probably have a mix of
                                    different hardware and software.
                                </p>
                                <ul class="pf-tags">
                                    <li>Technology</li>
                                    <li>Software</li>
                                </ul>
                                <div class="bottom">
                                    <span>Client Name:</span>
                                    <h5>Kevin Martin</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Project -->

    {{-- @include('includes.partner'); --}}
@endsection
