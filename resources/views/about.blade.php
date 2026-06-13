@extends('layout')
@section('title', $seo->title ?? 'About Us')

@section('content')
    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area contact-abstract-hero shadow text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>About Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About -->
    <div class="about-style-two-area default-padding overflow-hidden bg-gray">
        <div class="container">
            <div class="row align-center">

                <!-- Image Section -->
                <div class="col-lg-6">
                    <div class="about-style-two-thumb">
                        <img class="wow fadeInUp" src="{{ asset('assets/img/about/5.jpg') }}" alt="Image Not Found">
                        <img class="wow fadeInDown" data-wow-delay="100ms" src="{{ asset('assets/img/about/6.jpg') }}" alt="Image Not Found">

                    </div>
                </div>

                <!-- Content Section -->
                <div class="col-lg-6 pl-50 pl-md-15 pl-xs-15">
                    <div class="about-style-two-info">

                        <h4 class="sub-title">About StackVeda Technologies</h4>

                        <h2 class="title split-text">
                            Architects of Digital Transformation
                        </h2>

                        <h3 class="heading-about">
                            At StackVeda Technologies, we are more than just an IT service provider, We are architects of
                            digital transformation.
                        </h3>

                        <p class="wow fadeInUp">
                            Our name embodies our philosophy: mastering the modern technology “stack” with the deep
                            engineering wisdom “Veda”
                            required to build lasting solutions.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="200ms">
                            We serve as a link between strategic corporate objectives and intricate technical issues.
                            We are a one-stop growth partner for businesses all over the world, offering a wide range of
                            services
                            from digital marketing to strategic staffing to high-end software engineering.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="300ms">
                            StackVeda offers accuracy, scalability, and innovation in everything—from simplifying business
                            processes
                            through our BPO services to designing serverless cloud infrastructures on AWS/Azure to creating
                            user-friendly mobile experiences in Flutter and Swift.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="400ms">
                            We engineer value, not just code, under the direction of a group of talented engineers and
                            innovative strategists.
                            StackVeda Technologies is the intersection of vision and execution for startups searching for
                            their MVP
                            and established businesses seeking digital modernization.
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End About -->

    <section class="mv-section">
        <div class="container">

            <!-- Heading -->
            <div class="text-center mb-5">
                <h2 class="mv-title">Our Purpose & Direction</h2>
                <p class="mv-subtitle">Driving growth through intelligent technology and human excellence</p>
            </div>

            <div class="row">

                <!-- Mission -->
                <div class="col-md-6 mb-4">
                    <div class="mv-card h-100">
                        <div class="mv-icon bg-mission">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h4 class="mv-heading">Our Mission</h4>
                        <p class="mv-text">
                            To provide intelligent, scalable, and secure technology solutions that enable multinational
                            corporations to spur real growth.
                        </p>

                        <ul class="mv-list">
                            <li><strong>Innovation:</strong> Using modern frameworks like React, Python & Node.js to solve
                                tomorrow’s challenges today.</li>
                            <li><strong>Excellence:</strong> Delivering outstanding employment solutions by matching the
                                right talent with the right opportunity.</li>
                            <li><strong>Impact:</strong> Leveraging data-driven digital marketing and BPO services to
                                enhance brand visibility and operational efficiency.</li>
                        </ul>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-md-6 mb-4">
                    <div class="mv-card h-100">
                        <div class="mv-icon bg-vision">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h4 class="mv-heading">Our Vision</h4>
                        <p class="mv-text">
                            To become the world’s most trusted technology partner by blending cutting-edge digital
                            innovation with timeless expertise.
                        </p>
                        <p class="mv-text">
                            Our goal is to build a seamless digital ecosystem empowering businesses of all sizes to harness
                            online, mobile, and cloud technologies without barriers.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Core Values -->
            <div class="text-center mt-5 mb-4">
                <h3 class="values-title">Our Core Values – The Stack “VEDA” Way</h3>
            </div>

            <div class="row text-center">

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="value-card">
                        <div class="value-icon">V</div>
                        <h5>Versatility</h5>
                        <p>Expertise from frontend to DevOps, SEO to BPO.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="value-card">
                        <div class="value-icon">E</div>
                        <h5>Engineering First</h5>
                        <p>Clean architecture using Terraform, Docker & Kubernetes.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="value-card">
                        <div class="value-icon">D</div>
                        <h5>Dedication</h5>
                        <p>Your growth is our primary measure of success.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="value-card">
                        <div class="value-icon">A</div>
                        <h5>Agility</h5>
                        <p>Rapid adaptation with agile development and deployment.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- @include('includes.partner') --}}

@endsection
