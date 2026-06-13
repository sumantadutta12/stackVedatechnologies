@extends('layout')
@section('title', $seo->title ?? 'Our Works')
@section('content')
    <div class="breadcrumb-area bg-cover shadow theme-hard text-center text-light"
        style="background-image: url({{ asset('assets/img/banner/8.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Our work</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li>Our work</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="portfolio-section">
        <div class="container">
            <div class="row g-4">

                @forelse ($portfolios as $portfolio)

                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-card">
                            @php
                                $portfolioVideo = $portfolio->video ?? null;
                            @endphp

                            <figure class="portfolio-img {{ $portfolioVideo ? 'has-portfolio-video' : '' }}">
                                <div class="portfolio-media-slider">
                                    <div class="portfolio-media-slide">
                                        <img src="{{ asset($portfolio->image) }}" alt="{{ $portfolio->title }}">
                                    </div>

                                    @if ($portfolioVideo)
                                        <div class="portfolio-media-slide">
                                            <video src="{{ asset($portfolioVideo) }}" muted autoplay loop playsinline preload="metadata"></video>
                                        </div>
                                    @endif
                                </div>

                                @if ($portfolioVideo)
                                    <div class="portfolio-media-dots" aria-hidden="true">
                                        <span></span>
                                        <span></span>
                                    </div>

                                    <span class="portfolio-media-type">Image + Video</span>
                                @endif

                                <span class="portfolio-image-shine"></span>
                            </figure>

                            <div class="portfolio-content">
                                <div class="portfolio-meta">
                                    <span>Project</span>
                                    @if ($portfolio->link)
                                        <span class="portfolio-live-status">Live</span>
                                    @endif
                                </div>

                                <h4 class="portfolio-title">
                                    {{ $portfolio->title }}
                                </h4>

                                <p class="portfolio-desc">
                                    {{ $portfolio->description }}
                                </p>

                                <div class="portfolio-tags">
                                    <span class="tag">Strategy</span>
                                    <span class="tag">Design</span>
                                    <span class="tag">Development</span>
                                </div>

                                @if ($portfolio->link)
                                    <a class="gradient-btn" href="{{ $portfolio->link }}" target="_blank" rel="noopener">
                                        <span>View project</span>
                                        <i class="fas fa-arrow-up"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="col-12">
                        <div class="portfolio-empty">
                            <span>Portfolio</span>
                            <h3>New work is being prepared for showcase.</h3>
                            <p>Check back soon for our latest client projects and product launches.</p>
                        </div>
                    </div>
                @endforelse

            </div>
        </div>
    </section>
@endsection
