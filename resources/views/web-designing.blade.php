@extends('layout')
@section('title', $seo->title ?? 'Website Development')

@section('content')
    <main class="sv-webdev-page">
        <section class="sv-webdev-hero">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <span class="sv-webdev-kicker">Website Development</span>
                        <h1>Premium websites built for speed, clarity, and business growth.</h1>
                        <p>
                            We design and develop modern business websites that look sharp, load fast,
                            convert visitors, and stay easy to manage as your company grows.
                        </p>
                        <div class="sv-webdev-actions">
                            <a href="{{ route('request-quote') }}" class="sv-webdev-primary">
                                Start a project <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="{{ route('our-works') }}" class="sv-webdev-secondary">
                                View work
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sv-webdev-hero-media">
                            <img src="{{ asset('assets/img/web-devlopment.jpg') }}" alt="Website development team working on digital product">
                            <div class="sv-webdev-metric sv-webdev-metric-one">
                                <strong>90+</strong>
                                <span>Performance score target</span>
                            </div>
                            <div class="sv-webdev-metric sv-webdev-metric-two">
                                <strong>SEO</strong>
                                <span>Ready structure</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sv-webdev-section sv-webdev-overview">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <span class="sv-webdev-kicker">What we build</span>
                        <h2>Websites that feel polished on the front and dependable underneath.</h2>
                    </div>
                    <div class="col-lg-5">
                        <p>
                            From corporate websites to conversion-focused landing pages, service portals,
                            CMS builds, and eCommerce storefronts, every page is planned around usability,
                            maintainability, and measurable outcomes.
                        </p>
                    </div>
                </div>

                <div class="sv-webdev-card-grid">
                    <article class="sv-webdev-service-card">
                        <i class="fas fa-layer-group"></i>
                        <h3>Custom Website Design</h3>
                        <p>Brand-aligned layouts, responsive UI, visual hierarchy, and smooth content flow for every device.</p>
                    </article>
                    <article class="sv-webdev-service-card">
                        <i class="fas fa-code"></i>
                        <h3>Frontend Development</h3>
                        <p>Clean HTML, CSS, JavaScript, and component-driven implementation focused on speed and accessibility.</p>
                    </article>
                    <article class="sv-webdev-service-card">
                        <i class="fas fa-cogs"></i>
                        <h3>CMS Development</h3>
                        <p>WordPress, Laravel, and custom admin workflows that make content updates practical for your team.</p>
                    </article>
                    <article class="sv-webdev-service-card">
                        <i class="fas fa-shopping-cart"></i>
                        <h3>eCommerce Websites</h3>
                        <p>Product catalogs, checkout flows, payment integrations, and storefronts built for conversion.</p>
                    </article>
                    <article class="sv-webdev-service-card">
                        <i class="fas fa-search"></i>
                        <h3>SEO Foundation</h3>
                        <p>Technical structure, metadata, schema-ready markup, fast pages, and crawl-friendly architecture.</p>
                    </article>
                    <article class="sv-webdev-service-card">
                        <i class="fas fa-shield-alt"></i>
                        <h3>Maintenance & Support</h3>
                        <p>Updates, monitoring, bug fixes, performance tuning, and reliable support after launch.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="sv-webdev-section sv-webdev-process">
            <div class="container">
                <div class="sv-webdev-center-head">
                    <span class="sv-webdev-kicker">Delivery process</span>
                    <h2>A clear build process from discovery to launch.</h2>
                    <p>Every website moves through practical checkpoints so design, content, development, and quality stay aligned.</p>
                </div>

                <div class="sv-webdev-process-grid">
                    <div class="sv-webdev-step">
                        <span>01</span>
                        <h3>Discovery</h3>
                        <p>We define goals, users, pages, conversion paths, integrations, and the content structure.</p>
                    </div>
                    <div class="sv-webdev-step">
                        <span>02</span>
                        <h3>UX & Visual Design</h3>
                        <p>We create layouts, page flows, responsive states, and a polished interface system.</p>
                    </div>
                    <div class="sv-webdev-step">
                        <span>03</span>
                        <h3>Development</h3>
                        <p>We build fast, maintainable pages with clean code, reusable sections, and CMS-ready content.</p>
                    </div>
                    <div class="sv-webdev-step">
                        <span>04</span>
                        <h3>QA & Launch</h3>
                        <p>We test performance, forms, mobile behavior, SEO basics, analytics, and deployment readiness.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="sv-webdev-section sv-webdev-platforms">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <span class="sv-webdev-kicker">Platforms</span>
                        <h2>Built on the right foundation for your team.</h2>
                        <p>
                            We choose the stack based on your content workflow, growth plans, integrations,
                            budget, and maintenance needs.
                        </p>
                        <a href="{{ route('contact-us') }}" class="sv-webdev-primary">
                            Talk to us <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-7">
                        <div class="sv-webdev-platform-grid">
                            <div class="sv-webdev-platform-card">
                                <i class="fab fa-wordpress-simple"></i>
                                <h3>WordPress</h3>
                                <p>Flexible CMS websites for marketing teams, blogs, service pages, and landing pages.</p>
                            </div>
                            <div class="sv-webdev-platform-card">
                                <i class="fab fa-laravel"></i>
                                <h3>Laravel</h3>
                                <p>Custom web platforms, business portals, dashboards, and backend-driven websites.</p>
                            </div>
                            <div class="sv-webdev-platform-card">
                                <i class="fas fa-store"></i>
                                <h3>Shopify</h3>
                                <p>Modern online stores with product management, checkout, and growth integrations.</p>
                            </div>
                            <div class="sv-webdev-platform-card">
                                <i class="fas fa-rocket"></i>
                                <h3>Static & Headless</h3>
                                <p>Fast, secure, scalable sites for teams that need speed and content flexibility.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sv-webdev-section sv-webdev-proof">
            <div class="container">
                <div class="sv-webdev-proof-panel">
                    <div>
                        <span class="sv-webdev-kicker">Launch ready</span>
                        <h2>Designed to perform after the first impression.</h2>
                    </div>
                    <div class="sv-webdev-proof-list">
                        <span><i class="fas fa-check"></i> Responsive across devices</span>
                        <span><i class="fas fa-check"></i> Optimized page speed</span>
                        <span><i class="fas fa-check"></i> Conversion-focused sections</span>
                        <span><i class="fas fa-check"></i> Analytics and form tracking ready</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="sv-webdev-section sv-webdev-faq">
            <div class="container">
                <div class="sv-webdev-center-head">
                    <span class="sv-webdev-kicker">FAQ</span>
                    <h2>Website development questions we hear often.</h2>
                </div>

                <div class="accordion sv-webdev-accordion" id="webDevFaq">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="webDevFaqOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#webDevFaqCollapseOne" aria-expanded="true" aria-controls="webDevFaqCollapseOne">
                                How long does a website development project take?
                            </button>
                        </h3>
                        <div id="webDevFaqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="webDevFaqOne" data-bs-parent="#webDevFaq">
                            <div class="accordion-body">
                                Most business websites take 3 to 8 weeks depending on page count, content readiness, integrations, design depth, and review cycles.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="webDevFaqTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#webDevFaqCollapseTwo" aria-expanded="false" aria-controls="webDevFaqCollapseTwo">
                                Can you redesign an existing website?
                            </button>
                        </h3>
                        <div id="webDevFaqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="webDevFaqTwo" data-bs-parent="#webDevFaq">
                            <div class="accordion-body">
                                Yes. We can audit the current site, preserve what works, improve UX and performance, migrate content, and relaunch with stronger structure.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="webDevFaqThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#webDevFaqCollapseThree" aria-expanded="false" aria-controls="webDevFaqCollapseThree">
                                Do you provide support after launch?
                            </button>
                        </h3>
                        <div id="webDevFaqCollapseThree" class="accordion-collapse collapse" aria-labelledby="webDevFaqThree" data-bs-parent="#webDevFaq">
                            <div class="accordion-body">
                                Yes. We provide maintenance, updates, bug fixes, performance improvements, tracking setup, and feature enhancements after launch.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
