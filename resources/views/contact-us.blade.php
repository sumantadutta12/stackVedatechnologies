@extends('layout')
@section('title', $seo->title ?? 'Contact Us')
@push('style')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endpush
@section('content')
    <div class="breadcrumb-area contact-abstract-hero shadow text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Contact Us -->
    <div class="contact-style-one-area overflow-hidden default-padding">

        <div class="contact-shape">
            <img src="{{ asset('assets/img/shape/37.png') }}" alt="Image Not Found">
        </div>

        <div class="container">
            <div class="row align-center">

                <!-- LEFT INFO PANEL -->
                <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-20">

                    <div class="contact-style-one-info">
                        <h2 class="split-text">Contact Information</h2>

                        <p class="wow fadeInUp" data-wow-delay="100ms">
                            Ready to transform your business? Connect with us via phone, email, or visit our office.
                        </p>

                        <ul>

                            @if($setting->mobile)
                                <li class="wow fadeInUp">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Hotline</h5>
                                        <a href="tel:{{ $setting->mobile }}">{{ $setting->mobile }}</a>
                                    </div>
                                </li>
                            @endif


                            @if($setting->location)
                                <li class="wow fadeInUp" data-wow-delay="300ms">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <h5 class="title">Our Location</h5>
                                        <p>{{ $setting->location }}</p>
                                    </div>
                                </li>
                            @endif


                            @if($setting->email)
                                <li class="wow fadeInUp" data-wow-delay="500ms">
                                    <div class="icon">
                                        <i class="fas fa-envelope-open-text"></i>
                                    </div>
                                    <div class="info">
                                        <h5 class="title">Official Email</h5>
                                        <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                                    </div>
                                </li>
                            @endif

                        </ul>
                    </div>
                </div>


                <!-- RIGHT FORM PANEL -->
                <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">

                    @include('admin.includes.alert-message')

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif


                    <div class="contact-form-style-one">
                        <h5 class="sub-title">Have Questions?</h5>
                        <h2 class="title">Send us a Massage</h2>

                        <form action="{{ route('contact-us.submit') }}" method="POST" class="contact-submit-form">
                            @csrf

                            <div class="row">

                                <!-- NAME -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="name" placeholder="Name *" type="text" required>

                                        <span class="alert-error">
                                            @error('name') {{ $message }} @enderror
                                        </span>
                                    </div>
                                </div>

                                <!-- EMAIL -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" placeholder="Email*" type="email" required>

                                        <span class="alert-error">
                                            @error('email') {{ $message }} @enderror
                                        </span>
                                    </div>
                                </div>

                                <!-- PHONE -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" name="mobile" placeholder="Phone" type="text" required>

                                        <span class="alert-error">
                                            @error('mobile') {{ $message }} @enderror
                                        </span>
                                    </div>
                                </div>


                                <!-- WEBSITE -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="website_url" placeholder="Website (optional)"
                                            type="url">

                                        <span class="alert-error">
                                            @error('website_url') {{ $message }} @enderror
                                        </span>
                                    </div>
                                </div>


                                <!-- MESSAGE -->
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" name="message"
                                            placeholder="Tell Us About Project *"></textarea>

                                        <span class="alert-error">
                                            @error('message') {{ $message }} @enderror
                                        </span>
                                    </div>
                                </div>


                                <!-- CAPTCHA -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Enter Captcha *</label>

                                        <div class="d-flex align-items-center mb-2">
                                            <img src="{{ captcha_src('flat') }}" id="captcha_img" class="border rounded mr-2" alt="Captcha Image" style="height: 40px; cursor: pointer;">

                                            <button type="button" class="btn btn-sm btn-secondary" id="reload" title="Refresh Captcha" style="height: 40px;">
                                                <i class="fas fa-sync-alt"></i>
                                            </button>
                                        </div>

                                        <input type="text" class="form-control" name="captcha" placeholder="Enter Captcha code" required>

                                        <span class="alert-error">
                                            @error('captcha') {{ $message }} @enderror
                                        </span>
                                    </div>
                                </div>


                                <!-- SUBMIT -->
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Get in Touch
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Contact -->

@endsection
@push('script')
    <script>
        document.getElementById('reload').addEventListener('click', function () {
            var captchaImage = document.getElementById('captcha_img');
            // Get the base URL without query parameters
            var baseUrl = captchaImage.getAttribute('src').split('?')[0];
            // Update src with a new timestamp to force reload
            captchaImage.src = baseUrl + '?' + new Date().getTime();

            // Optional: Clear the input field
            document.querySelector('input[name="captcha"]').value = '';
        });
    </script>
@endpush
