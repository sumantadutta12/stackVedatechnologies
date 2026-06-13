@extends('layout')
@section('title', $seo->title ?? 'Website Development')
@section('body_class', 'sv-inner-page sv-website-development-page')

@section('content')
    <main class="sv-webdev-page">
        <nav class="sv-webdev-subnav" aria-label="Website Development sections">
            <div class="container">
                <a href="{{ route('website-development') }}" class="sv-webdev-subnav-brand">Website Development</a>
                <div class="sv-webdev-subnav-links">
                    <a href="#what-to-do" class="is-active">What to do</a>
                    <a href="#services">Services</a>
                    <a href="#build-system">Build system</a>
                    <a href="#process">Process</a>
                    <a href="#technology-stack">Technology stack</a>
                    <a href="#faq">FAQ</a>
                </div>
            </div>
        </nav>

        <section class="sv-webdev-hero">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="sv-webdev-hero-slider" aria-label="Website development project visuals">
                            <div class="sv-webdev-hero-slide is-slide-one">
                                <img src="{{ asset('assets/img/web-devlopment.jpg') }}" alt="Website development planning session">
                            </div>
                            <div class="sv-webdev-hero-slide is-slide-two">
                                <img src="{{ asset('assets/img/software-applications.jpg') }}" alt="Software dashboard design and development">
                            </div>
                            <div class="sv-webdev-hero-slide is-slide-three">
                                <img src="{{ asset('assets/img/it-consulting.jpg') }}" alt="Technology team reviewing website strategy">
                            </div>
                            <div class="sv-webdev-slider-dots" aria-hidden="true">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sv-webdev-hero-copy">
                            <span class="sv-webdev-hero-eyebrow">Website Development</span>
                            <h1>Website development for modern digital growth</h1>
                            <p>
                                Turn your business presence into a fast, polished, conversion-ready website.
                                We combine strategy, design, clean development, SEO foundations, and scalable
                                content workflows to help your brand grow online.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sv-webdev-section sv-webdev-overview" id="what-to-do">
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

                <div class="sv-webdev-card-grid" id="services">
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

        <section class="sv-webdev-section sv-webdev-showcase" id="build-system">
            <div class="container">
                <div class="sv-webdev-center-head">
                    <span class="sv-webdev-kicker">Website build system</span>
                    <h2>Click through the key parts of a stronger website build.</h2>
                    <p>Each part focuses on one layer of the website: strategy, interface, performance, content, and post-launch growth.</p>
                </div>

                <div class="sv-webdev-showcase-board" aria-label="Website build system accordion">
                    <input type="radio" name="webdev-showcase" id="webdev-showcase-1" checked>
                    <input type="radio" name="webdev-showcase" id="webdev-showcase-2">
                    <input type="radio" name="webdev-showcase" id="webdev-showcase-3">
                    <input type="radio" name="webdev-showcase" id="webdev-showcase-4">
                    <input type="radio" name="webdev-showcase" id="webdev-showcase-5">

                    <div class="sv-webdev-showcase-track">
                        <div class="sv-webdev-showcase-item is-item-one" data-title="Strategy">
                            <label class="sv-webdev-showcase-tab" for="webdev-showcase-1">
                                <span>01</span>
                                <strong>Strategy</strong>
                            </label>
                            <article class="sv-webdev-showcase-panel">
                                <div class="sv-webdev-showcase-copy">
                                    <span>01</span>
                                    <h3>Strategy-first page planning</h3>
                                    <p class="sv-webdev-showcase-lead">We map pages around audience intent, service clarity, trust signals, and conversion goals before layout work begins.</p>
                                </div>
                                <div class="sv-webdev-showcase-visual">
                                    <img src="{{ asset('assets/img/web-devlopment.jpg') }}" alt="Website strategy planning">
                                </div>
                                <div class="sv-webdev-showcase-footer">
                                    <p>Clear sitemap, page hierarchy, CTA flow, content blocks, and measurable goals for every important page.</p>
                                    <a href="{{ route('request-quote') }}">Plan a project <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>

                        <div class="sv-webdev-showcase-item is-item-two" data-title="Design">
                            <label class="sv-webdev-showcase-tab" for="webdev-showcase-2">
                                <span>02</span>
                                <strong>Design</strong>
                            </label>
                            <article class="sv-webdev-showcase-panel">
                                <div class="sv-webdev-showcase-copy">
                                    <span>02</span>
                                    <h3>Premium UI and responsive layouts</h3>
                                    <p class="sv-webdev-showcase-lead">Every section is designed to feel polished, readable, and easy to scan across desktop, tablet, and mobile.</p>
                                </div>
                                <div class="sv-webdev-showcase-visual">
                                    <img src="{{ asset('assets/img/software-applications.jpg') }}" alt="Responsive website interface design">
                                </div>
                                <div class="sv-webdev-showcase-footer">
                                    <p>Visual hierarchy, brand colors, reusable sections, form states, mobile spacing, and conversion-focused component design.</p>
                                    <a href="{{ route('web-designing') }}">View design service <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>

                        <div class="sv-webdev-showcase-item is-item-three" data-title="Build">
                            <label class="sv-webdev-showcase-tab" for="webdev-showcase-3">
                                <span>03</span>
                                <strong>Build</strong>
                            </label>
                            <article class="sv-webdev-showcase-panel">
                                <div class="sv-webdev-showcase-copy">
                                    <span>03</span>
                                    <h3>Clean development for scale</h3>
                                    <p class="sv-webdev-showcase-lead">We build fast, maintainable pages with structured code, CMS-ready content areas, and practical integrations.</p>
                                </div>
                                <div class="sv-webdev-showcase-visual">
                                    <img src="{{ asset('assets/img/it-consulting.jpg') }}" alt="Website development workspace">
                                </div>
                                <div class="sv-webdev-showcase-footer">
                                    <p>Reusable templates, Laravel or WordPress workflows, forms, admin controls, analytics, and deployment-friendly structure.</p>
                                    <a href="{{ route('web-application') }}">Explore development <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>

                        <div class="sv-webdev-showcase-item is-item-four" data-title="Speed">
                            <label class="sv-webdev-showcase-tab" for="webdev-showcase-4">
                                <span>04</span>
                                <strong>Speed</strong>
                            </label>
                            <article class="sv-webdev-showcase-panel">
                                <div class="sv-webdev-showcase-copy">
                                    <span>04</span>
                                    <h3>Performance and SEO foundation</h3>
                                    <p class="sv-webdev-showcase-lead">Speed, crawlability, metadata, and technical structure are considered during the build, not added as an afterthought.</p>
                                </div>
                                <div class="sv-webdev-showcase-visual">
                                    <img src="{{ asset('assets/img/seo-1.jpg') }}" alt="Website SEO and performance planning">
                                </div>
                                <div class="sv-webdev-showcase-footer">
                                    <p>Optimized assets, clean headings, schema-ready markup, metadata support, tracking setup, and performance checks.</p>
                                    <a href="{{ route('seo') }}">Improve SEO <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>

                        <div class="sv-webdev-showcase-item is-item-five" data-title="Support">
                            <label class="sv-webdev-showcase-tab" for="webdev-showcase-5">
                                <span>05</span>
                                <strong>Support</strong>
                            </label>
                            <article class="sv-webdev-showcase-panel">
                                <div class="sv-webdev-showcase-copy">
                                    <span>05</span>
                                    <h3>Launch support and ongoing care</h3>
                                    <p class="sv-webdev-showcase-lead">After go-live, we help with updates, monitoring, improvements, fixes, and new sections as the business changes.</p>
                                </div>
                                <div class="sv-webdev-showcase-visual">
                                    <img src="{{ asset('assets/img/business-process.jpg') }}" alt="Website support and maintenance">
                                </div>
                                <div class="sv-webdev-showcase-footer">
                                    <p>Maintenance, bug fixing, content updates, reporting, speed tuning, and continuous improvement after launch.</p>
                                    <a href="{{ route('request-quote') }}">Start support <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sv-webdev-section sv-webdev-process" id="process">
            <div class="container">
                <div class="sv-webdev-center-head">
                    <span class="sv-webdev-kicker">Delivery process</span>
                    <h2>A clear build process from discovery to launch.</h2>
                    <p>Every website moves through practical checkpoints so design, content, development, and quality stay aligned.</p>
                </div>

                <div class="sv-webdev-process-grid">
                    <div class="sv-webdev-step">
                        <span><i class="fas fa-search"></i></span>
                        <h3>Discovery</h3>
                        <p>We define goals, users, pages, conversion paths, integrations, and the content structure.</p>
                    </div>
                    <div class="sv-webdev-step">
                        <span><i class="fas fa-pencil-ruler"></i></span>
                        <h3>UX & Visual Design</h3>
                        <p>We create layouts, page flows, responsive states, and a polished interface system.</p>
                    </div>
                    <div class="sv-webdev-step">
                        <span><i class="fas fa-code"></i></span>
                        <h3>Development</h3>
                        <p>We build fast, maintainable pages with clean code, reusable sections, and CMS-ready content.</p>
                    </div>
                    <div class="sv-webdev-step">
                        <span><i class="fas fa-rocket"></i></span>
                        <h3>QA & Launch</h3>
                        <p>We test performance, forms, mobile behavior, SEO basics, analytics, and deployment readiness.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="techstack-section" id="technology-stack">
            <div class="container">
                <div class="techstack-head text-center">
                    <span class="techstack-kicker">Technology stack</span>
                    <h2 class="techstack-title">Technology stack for fast, secure website development.</h2>
                    <p class="techstack-subtitle">
                        We use proven frontend, CMS, backend, analytics, hosting, and optimization tools
                        to build websites that are easy to manage and ready to scale.
                    </p>
                </div>

                <div class="techstack-panel">
                    <div class="techstack-tools-grid">
                        <div class="techstack-tool-card">
                            <span class="techstack-tool-icon is-html"><i class="fab fa-html5"></i></span>
                            <span>HTML5 Structure</span>
                        </div>
                        <div class="techstack-tool-card">
                            <span class="techstack-tool-icon is-css"><i class="fab fa-css3-alt"></i></span>
                            <span>CSS3 & Bootstrap</span>
                        </div>
                        <div class="techstack-tool-card">
                            <span class="techstack-tool-icon is-js"><i class="fab fa-js"></i></span>
                            <span>JavaScript UX</span>
                        </div>
                        <div class="techstack-tool-card">
                            <span class="techstack-tool-icon is-php"><i class="fab fa-php"></i></span>
                            <span>PHP & Laravel</span>
                        </div>
                        <div class="techstack-tool-card">
                            <span class="techstack-tool-icon is-wordpress"><i class="fab fa-wordpress-simple"></i></span>
                            <span>WordPress CMS</span>
                        </div>
                        <div class="techstack-tool-card">
                            <span class="techstack-tool-icon is-shop"><i class="fas fa-store"></i></span>
                            <span>Shopify Stores</span>
                        </div>
                        <div class="techstack-tool-card">
                            <span class="techstack-tool-icon is-db"><i class="fas fa-database"></i></span>
                            <span>MySQL Databases</span>
                        </div>
                        <div class="techstack-tool-card">
                            <span class="techstack-tool-icon is-speed"><i class="fas fa-tachometer-alt"></i></span>
                            <span>Speed Optimization</span>
                        </div>
                        <div class="techstack-tool-card">
                            <span class="techstack-tool-icon is-seo"><i class="fas fa-search"></i></span>
                            <span>Technical SEO</span>
                        </div>
                        <div class="techstack-tool-card">
                            <span class="techstack-tool-icon is-analytics"><i class="fas fa-chart-line"></i></span>
                            <span>Analytics Tracking</span>
                        </div>
                        <div class="techstack-tool-card">
                            <span class="techstack-tool-icon is-security"><i class="fas fa-shield-alt"></i></span>
                            <span>Security Basics</span>
                        </div>
                        <div class="techstack-tool-card">
                            <span class="techstack-tool-icon is-git"><i class="fab fa-git-alt"></i></span>
                            <span>Git Workflow</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="sv-webdev-section sv-webdev-faq" id="faq">
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
