@extends('layout')

@section('title', $seo->title ?? 'Request A Quote')

@section('content')

    <!-- BREADCRUMB (SAME AS CONTACT PAGE) -->
    <div class="breadcrumb-area bg-cover shadow theme-hard text-center text-light"
        style="background-image: url({{ asset('assets/img/banner/8.jpg') }});">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Request A Quote</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li>Request A Quote</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-- SAME CONTACT STYLE LAYOUT -->
    <div class="contact-style-one-area overflow-hidden default-padding">

        <div class="contact-shape">
            <img src="{{ asset('assets/img/shape/37.png') }}" alt="contact-img">
        </div>

        <div class="container">
            <div class="row align-center">



                <!-- LEFT INFO (SAME AS CONTACT PAGE) -->
                <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-20">

                    <div class="contact-style-one-info">

                        <h2 class="split-text">Contact Information</h2>

                        <p>
                            Need a custom solution? Tell us your requirements and we’ll prepare the best quote for you.
                        </p>

                        <ul>

                            @if($setting->mobile)
                                <li>
                                    <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                    <div class="content">
                                        <h5>Hotline</h5>
                                        <a href="tel:{{ $setting->mobile }}">{{ $setting->mobile }}</a>
                                    </div>
                                </li>
                            @endif



                            @if($setting->location)
                                <li>
                                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="info">
                                        <h5>Our Location</h5>
                                        <p>{{ $setting->location }}</p>
                                    </div>
                                </li>
                            @endif



                            @if($setting->email)
                                <li>
                                    <div class="icon"><i class="fas fa-envelope-open-text"></i></div>
                                    <div class="info">
                                        <h5>Official Email</h5>
                                        <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                                    </div>
                                </li>
                            @endif


                        </ul>
                    </div>
                </div>




                <!-- RIGHT FORM (SAME STYLE AS CONTACT PAGE) -->
                <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">


                    @include('admin.includes.alert-message')

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif



                    <div class="contact-form-style-one">

                        <h5 class="sub-title">Get Best Pricing</h5>

                        <h2 class="title">Request A Quote</h2>



                        <form action="{{ route('request-quote.submit') }}" method="POST" class="contact-submit-form">

                            @csrf


                            <div class="row">




                                <!-- NAME -->
                                <div class="col-lg-12">
                                    <div class="form-group">

                                        <input class="form-control" name="name" placeholder="Name *" required>

                                        <span class="alert-error">
                                            @error('name') {{ $message }} @enderror
                                        </span>

                                    </div>
                                </div>




                                <!-- EMAIL -->
                                <div class="col-lg-6">
                                    <div class="form-group">

                                        <input class="form-control" name="email" placeholder="Email *" required>

                                        <span class="alert-error">
                                            @error('email') {{ $message }} @enderror
                                        </span>

                                    </div>
                                </div>




                                <!-- PHONE -->
                                <div class="col-lg-6">
                                    <div class="form-group">

                                        <input class="form-control" name="phone" placeholder="Phone *" required>

                                        <span class="alert-error">
                                            @error('phone') {{ $message }} @enderror
                                        </span>

                                    </div>
                                </div>





                                <!-- SERVICE DROPDOWN (ONLY DIFFERENCE FROM CONTACT PAGE) -->
                                <div class="col-lg-12">
                                    <div class="form-group">

                                        <select name="service_id" class="form-control" required>

                                            <option value="">Select Service *</option>

                                            @foreach($services as $service)

                                                <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>

                                                    {{ $service->title }}

                                                </option>

                                            @endforeach

                                        </select>

                                        <span class="alert-error">
                                            @error('service_id') {{ $message }} @enderror
                                        </span>

                                    </div>
                                </div>





                                <!-- MESSAGE -->
                                <div class="col-lg-12">
                                    <div class="form-group comments">

                                        <textarea class="form-control" name="message"
                                            placeholder="Describe your requirements"></textarea>

                                        <span class="alert-error">
                                            @error('message') {{ $message }} @enderror
                                        </span>

                                    </div>
                                </div>





                                <!-- CAPTCHA (SAME AS CONTACT PAGE) -->
                                <div class="col-lg-12">
                                    <div class="form-group">

                                        <label>Enter Captcha *</label>

                                        <div class="d-flex align-items-center mb-2">

                                            <img src="{{ captcha_src('flat') }}" id="captcha_img" class="border rounded mr-2" alt="Captcha Image" style="height: 40px; cursor: pointer;">

                                            <button type="button" class="btn btn-sm btn-secondary" id="reload" title="Refresh Captcha" style="height: 40px;">
                                                <i class="fas fa-sync-alt"></i>
                                            </button>

                                        </div>

                                        <input type="text" id="captcha" class="form-control" name="captcha" placeholder="Enter Captcha code" required>

                                        <span class="alert-error">
                                            @error('captcha') {{ $message }} @enderror
                                        </span>

                                    </div>
                                </div>





                                <!-- SUBMIT -->
                                <div class="col-lg-12">

                                    <button type="submit">
                                        <i class="fa fa-paper-plane"></i>
                                        Submit Request
                                    </button>

                                </div>




                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </div>

@endsection




@push('script')

    <script>
        document.getElementById('reload').addEventListener('click', function () {
            var captchaImage = document.getElementById('captcha_img');
            // Get the base URL without query parameters
            var baseUrl = captchaImage.getAttribute('src').split('?')[0];
            // Update src with a new timestamp to force reload
            captchaImage.src = baseUrl + '?' + new Date().getTime();

            // Clear the input field
            document.getElementById('captcha').value = '';
        });
    </script>

@endpush
