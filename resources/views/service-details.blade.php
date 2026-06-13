@extends('layout')
@section('content')
    <!-- ========================
                   page title
                =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-parallax">
        <div class="bg-img"><img src="{{ asset('assets/images/page-titles/about-us1.webp') }}" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <h1 class="pagetitle__heading">{{ @$service->title }}</h1>
                    <p class="pagetitle__desc">{{ @$service->short_description }}</p>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
                   service description
                =========================== -->
    <section class="pt-60 pb-60">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column: Description -->
                <div class="col-md-6">
                    <div class="service-description">
                        {!! @$service->description !!}
                    </div>
                </div>

                <!-- Right Column: Image -->
                <div class="col-md-6">
                    @if (!empty($service->description_image))
                        <img src="{{ asset($service->description_image) }}" alt="{{ $service->title }}"
                            class="img-fluid rounded shadow">
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="banner-layout1 pt-90 pb-90 mt-70 mb-70 bg-overlay bg-overlay-primary">
        <div class="bg-img"><img src="{{ asset('assets/images/banners/3.jpg') }}" alt="background"></div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    @include('admin.includes.alert-message')

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="contact-panel">
                        <form action="{{ route('request-quote.submit') }}" method="POST" class="enquiry-form">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <h4 class="contact-panel__title">Request A Quote</h4>
                                </div> <!-- /.col-lg-12 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-name">Name (required)</label>
                                        <input type="text" class="form-control" placeholder="Name" id="name"
                                            name="name" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-email">Email (required)</label>
                                        <input type="email" class="form-control" placeholder="Email" id="email"
                                            name="email" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-Phone">Inquiry (required)</label>
                                        <select name="service_id" id="service_id" class="form-control" required>
                                            <option value="{{ $service->id }}" selected>
                                                {{ $service->title }}
                                            </option>
                                        </select>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-Phone">Phone</label>
                                        <input type="text" class="form-control" placeholder="Phone" id="Phone"
                                            name="phone" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-message">Additional Details (optional)</label>
                                        <textarea class="form-control" placeholder="Describe your inquirey!" id="message" name="message"></textarea>
                                    </div>

                                    {{-- Custom Captcha --}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="captcha">Enter the code shown*</label>
                                                <div class="d-flex align-items-center">
                                                    <span>{!! captcha_img('flat') !!}</span>
                                                    <button type="button" class="btn btn-outline-secondary btn-sm"
                                                        id="reload">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                </div>
                                                <input id="captcha" type="text" class="form-control mt-2"
                                                    placeholder="Enter Captcha" name="captcha" required>
                                                <span class="alert-error">
                                                    @error('captcha')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn__secondary btn__xl btn__block">Submit
                                        Request</button>
                                    <div class="contact-result"></div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection
