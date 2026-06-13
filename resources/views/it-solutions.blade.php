@extends('layout')
@section('title', $seo->title ?? 'Services')
@section('content')
    <section class="page-title page-title-layout1 bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/page-titles/about-us1.webp" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h1 class="pagetitle__heading">It solutions</h1>
            <p class="pagetitle__desc">We are experienced professionals who understand that It services is changing, and
              are true partners who care about your success. Our team provides a consultative approach on emerging
              technology.
            </p>
          </div>
        </div>
      </div>
    </section>

    @include('includes.service-card')

    <section class="features-layout1 pt-130">
      <div class="bg-img"><img src="assets/images/backgrounds/10.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="heading heading-layout2 mb-40">
              <h2 class="heading__subtitle color-body">Ensure High Availability of Your Services</h2>
              <h3 class="heading__title color-white">Easy solutions for all difficult IT problems, keep business safe &
                ensure high availability.</h3>
            </div>
            <a href="{{ route('contact-us') }}" class="btn btn__white btn__bordered btn__xl btn__icon minwidth-170">
              <span>Get Started</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="row features-wrapper mt-40">
              <!-- Feature item #1 -->
              <div class="col-sm-6 feature-item">
                <div class="feature-item__icon">
                  <i class="icon-statistic"></i>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <h4 class="feature-item__title mb-0">Software Asset Management</h4>
                  <a href="javascript:void(0)"><i class="icon-arrow-right icon-outlined"></i></a>
                </div>
              </div><!-- /.feature-item -->
              <!-- Feature item #2 -->
              <div class="col-sm-6 feature-item">
                <div class="feature-item__icon">
                  <i class="icon-management"></i>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <h4 class="feature-item__title mb-0">Privileged Access Management</h4>
                  <a href="javascript:void(0)"><i class="icon-arrow-right icon-outlined"></i></a>
                </div>
              </div><!-- /.feature-item -->
              <!-- Feature item #3 -->
              <div class="col-sm-6 feature-item">
                <div class="feature-item__icon">
                  <i class="icon-software"></i>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <h4 class="feature-item__title mb-0">Software License Management</h4>
                  <a href="javascript:void(0)"><i class="icon-arrow-right icon-outlined"></i></a>
                </div>
              </div><!-- /.feature-item -->
              <!-- Feature item #4 -->
              <div class="col-sm-6 feature-item">
                <div class="feature-item__icon">
                  <i class="icon-relational"></i>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <h4 class="feature-item__title mb-0">Enterprise Service Management</h4>
                  <a href="javascript:void(0)"><i class="icon-arrow-right icon-outlined"></i></a>
                </div>
              </div><!-- /.feature-item -->
            </div><!-- /.row -->
            <div class="row mt-50 contact-text">
              <div class="col-sm-9 px-0">
                <strong class="color-white">If you have any questions or need help, feel free to contact with our team,
                  or call
                  <a href="tel:{{ @$setting->mobile }}">{{ @$setting->mobile }}</a></strong>
              </div><!-- /.col-sm-9 -->
              <div class="col-sm-3 px-0 d-flex justify-content-end">
                <a href="{{ route('contact-us') }}" class="btn btn__primary btn__primary-style2 minwidth-120">Contact Us</a>
              </div><!-- /.col-sm-3 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

    @include('includes.tech-logos')
@endsection
