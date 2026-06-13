<section class="expertise-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4 class="sub-title">What we do</h4>
                    <h2 class="title split-text" style="color: #fff !important;">
                        Techincal solutions that <br> helps Tech business.
                    </h2>
                    <div class="devider"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-4">

            @foreach ($services as $service)

                <div class="col-lg-3 col-md-6">
                    <div class="expertise-card">

                        <img
                            src="{{ asset($service->image ?? 'assets/img/default.jpg') }}"
                            class="expertise-img"
                            alt="{{ $service->title }}"
                        >

                        <div class="expertise-overlay">

                            <h3>{{ $service->title }}</h3>

                            <div class="expertise-content">
                                <p>
                                    {{ $service->short_description }}
                                </p>

                                <a href="{{ route('service-detail', $service->slug) }}"
                                   class="expertise-link">
                                    Read More
                                </a>

                            </div>

                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</section>
