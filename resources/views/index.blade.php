@extends('layout')
@section('title', $seo->title ?? 'Home')
@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
@endpush
@section('content')
    <section class="sv-video-hero text-light">
        <div class="sv-video-hero-panel">
            <video class="sv-video-hero-media" autoplay muted loop playsinline preload="auto"
                poster="{{ asset('assets/img/banner/1.jpg') }}">
                <source src="{{ asset('assets/img/banner/home-banner-video.mp4') }}" type="video/mp4">
            </video>
            <div class="sv-video-hero-overlay"></div>
            <div class="container">
                <div class="sv-video-hero-content">
                    <div class="sv-hero-text-slider">
                        <div class="sv-hero-text-slide is-active">
                            <h2 data-line-one="Smart technology for" data-line-two="future-ready business">
                                <span class="sv-typing-line sv-typing-line-one"></span>
                                <span class="sv-typing-line sv-typing-line-two"></span>
                            </h2>
                            <p>
                                We design and build scalable software, cloud, AI, and digital solutions that help teams move
                                faster, operate smarter, and grow with confidence.
                            </p>
                            <a class="sv-video-hero-btn" href="{{ route('request-quote') }}">
                                Request A Quote
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                        <div class="sv-hero-text-slide">
                            <h2 data-line-one="Build digital products" data-line-two="that scale with you">
                                <span class="sv-typing-line sv-typing-line-one"></span>
                                <span class="sv-typing-line sv-typing-line-two"></span>
                            </h2>
                            <p>
                                From websites and web apps to mobile experiences, we create reliable products shaped around
                                your users, workflows, and growth plans.
                            </p>
                            <a class="sv-video-hero-btn" href="{{ route('services') }}">
                                Explore Services
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                        <div class="sv-hero-text-slide">
                            <h2 data-line-one="Modernize operations with" data-line-two="cloud, data, and AI">
                                <span class="sv-typing-line sv-typing-line-one"></span>
                                <span class="sv-typing-line sv-typing-line-two"></span>
                            </h2>
                            <p>
                                Improve performance, automate routine work, and unlock better decisions with practical
                                technology built for measurable business outcomes.
                            </p>
                            <a class="sv-video-hero-btn" href="{{ route('contact-us') }}">
                                Let's Chat
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sv-trust-section">
        <div class="sv-trust-band">
            <div class="container">
                <div class="sv-trust-row">
                    <div class="sv-trust-copy">
                        <span class="sv-section-eyebrow">Trusted Clients</span>
                        <h2>Trusted by teams using world-class platforms.</h2>
                    </div>
                    <div class="sv-client-strip" aria-label="Trusted client names">
                        <div class="sv-client-track">
                            <span class="sv-client-logo">ADIKRISHI</span>
                            <span class="sv-client-logo">TITAN</span>
                            <span class="sv-client-logo">SUMERU</span>
                            <span class="sv-client-logo">BRINKER</span>
                            <span class="sv-client-logo">SVT</span>
                            <span class="sv-client-logo">CLOUDOPS</span>
                            <span class="sv-client-logo">DATAHUB</span>
                            <span class="sv-client-logo">FINTECH</span>
                            <span class="sv-client-logo">ADIKRISHI</span>
                            <span class="sv-client-logo">TITAN</span>
                            <span class="sv-client-logo">SUMERU</span>
                            <span class="sv-client-logo">BRINKER</span>
                            <span class="sv-client-logo">SVT</span>
                            <span class="sv-client-logo">CLOUDOPS</span>
                            <span class="sv-client-logo">DATAHUB</span>
                            <span class="sv-client-logo">FINTECH</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--
    <section class="sv-impact-showcase">
        <div class="container">
            <div class="sv-impact-head">
                <h2>The digital transformation partner for ambitious, growth-focused businesses</h2>
            </div>
        </div>
        <div class="sv-impact-rail-wrap">
            <button class="sv-impact-nav sv-impact-nav-prev" type="button" aria-label="Previous showcase">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="sv-impact-rail" aria-label="StackVeda solution highlights">
                <article class="sv-impact-card">
                    <img src="{{ asset('assets/img/software-applications.jpg') }}" alt="Custom software dashboard planning">
                    <div class="sv-impact-card-overlay"></div>
                    <div class="sv-impact-card-content">
                        <h3>Engineering scalable business software</h3>
                        <p>
                            We turn complex operations into reliable web apps, portals, and workflow systems that teams can use every day with confidence.
                        </p>
                        <a href="{{ route('software-applications') }}">
                            Learn more
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                <article class="sv-impact-card">
                    <img src="{{ asset('assets/img/Internetthings.jpg') }}" alt="Connected digital infrastructure">
                    <div class="sv-impact-card-overlay"></div>
                    <div class="sv-impact-card-content">
                        <h3>Connecting cloud, data, and AI into one smarter stack</h3>
                        <p>
                            From automation to analytics, we help businesses modernize processes, reduce manual effort, and make better decisions faster.
                        </p>
                        <a href="{{ route('ai-integration') }}">
                            Learn more
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                <article class="sv-impact-card">
                    <img src="{{ asset('assets/img/web-devlopment.jpg') }}" alt="Modern web application interface">
                    <div class="sv-impact-card-overlay"></div>
                    <div class="sv-impact-card-content">
                        <h3>Launching web experiences built for performance</h3>
                        <p>
                            We design and develop secure websites, web applications, and digital journeys that support conversion, usability, and growth.
                        </p>
                        <a href="{{ route('web-application') }}">
                            Learn more
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>
            <button class="sv-impact-nav sv-impact-nav-next" type="button" aria-label="Next showcase">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </section>
    --}}

    @push('script')
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const heroVideo = document.querySelector('.sv-video-hero-media');

                if (heroVideo) {
                    heroVideo.muted = true;
                    heroVideo.play().catch(function () {});
                }

                const videoHero = document.querySelector('.sv-video-hero');

                if (videoHero && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                    let heroParallaxTicking = false;

                    const updateHeroParallax = function () {
                        const rect = videoHero.getBoundingClientRect();
                        const viewportHeight = window.innerHeight || document.documentElement.clientHeight;
                        const visibleProgress = (viewportHeight - rect.top) / (viewportHeight + rect.height);
                        const parallaxProgress = Math.min(Math.max(visibleProgress, 0), 1);

                        videoHero.style.setProperty('--sv-video-parallax', parallaxProgress.toFixed(3));
                        heroParallaxTicking = false;
                    };

                    const requestHeroParallaxUpdate = function () {
                        if (!heroParallaxTicking) {
                            window.requestAnimationFrame(updateHeroParallax);
                            heroParallaxTicking = true;
                        }
                    };

                    updateHeroParallax();
                    window.addEventListener('scroll', requestHeroParallaxUpdate, { passive: true });
                    window.addEventListener('resize', requestHeroParallaxUpdate);
                }

                const impactRail = document.querySelector('.sv-impact-rail');
                const impactPrev = document.querySelector('.sv-impact-nav-prev');
                const impactNext = document.querySelector('.sv-impact-nav-next');
                const aboutCompany = document.querySelector('[data-about-company]');
                const aboutSlider = document.querySelector('.about-company-slider');

                if (aboutCompany && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                    aboutCompany.classList.add('about-scroll-animate');
                    let aboutTicking = false;

                    const updateAboutProgress = function () {
                        const rect = aboutCompany.getBoundingClientRect();
                        const viewportHeight = window.innerHeight || document.documentElement.clientHeight;
                        const sectionCenter = rect.top + (rect.height / 2);
                        const viewportCenter = viewportHeight / 2;
                        const activeDistance = Math.max(viewportHeight * 0.72, 1);
                        const distance = Math.abs(sectionCenter - viewportCenter);
                        const progress = Math.min(Math.max(1 - (distance / activeDistance), 0), 1);
                        const imageProgress = Math.min(Math.max((viewportHeight - rect.top) / (viewportHeight + rect.height), 0), 1);

                        aboutCompany.style.setProperty('--about-progress', progress.toFixed(3));
                        aboutCompany.style.setProperty('--about-image-progress', imageProgress.toFixed(3));
                        aboutTicking = false;
                    };

                    const requestAboutProgress = function () {
                        if (!aboutTicking) {
                            window.requestAnimationFrame(updateAboutProgress);
                            aboutTicking = true;
                        }
                    };

                    updateAboutProgress();
                    window.addEventListener('scroll', requestAboutProgress, { passive: true });
                    window.addEventListener('resize', requestAboutProgress);
                }

                if (impactRail && window.jQuery && jQuery.fn.slick) {
                    jQuery(impactRail).slick({
                        centerMode: true,
                        centerPadding: '112px',
                        slidesToShow: 1,
                        infinite: true,
                        speed: 520,
                        arrows: true,
                        prevArrow: impactPrev,
                        nextArrow: impactNext,
                        responsive: [
                            {
                                breakpoint: 1199,
                                settings: {
                                    centerPadding: '76px',
                                },
                            },
                            {
                                breakpoint: 767,
                                settings: {
                                    centerPadding: '28px',
                                },
                            },
                        ],
                    });
                } else if (impactRail && impactPrev && impactNext) {
                    impactPrev.addEventListener('click', function () {
                        impactRail.scrollBy({ left: -impactRail.clientWidth * 0.85, behavior: 'smooth' });
                    });

                    impactNext.addEventListener('click', function () {
                        impactRail.scrollBy({ left: impactRail.clientWidth * 0.85, behavior: 'smooth' });
                    });
                }

                if (aboutSlider && window.jQuery && jQuery.fn.slick) {
                    jQuery(aboutSlider).slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        arrows: false,
                        dots: false,
                        autoplay: true,
                        autoplaySpeed: 2400,
                        speed: 850,
                        fade: true,
                        cssEase: 'ease-in-out',
                        pauseOnHover: false,
                        pauseOnFocus: false,
                    });
                }

                const awardsTrack = document.querySelector('.home-awards-track');
                const awardsPrev = document.querySelector('.home-awards-prev');
                const awardsNext = document.querySelector('.home-awards-next');
                const awardsProgress = document.querySelector('.home-awards-progress span');

                if (awardsTrack && awardsPrev && awardsNext) {
                    const updateAwardsProgress = function () {
                        if (!awardsProgress) {
                            return;
                        }

                        const maxScroll = awardsTrack.scrollWidth - awardsTrack.clientWidth;
                        const progress = maxScroll > 0 ? awardsTrack.scrollLeft / maxScroll : 0;
                        const width = Math.max(18, progress * 100);
                        awardsProgress.style.width = width + '%';
                    };

                    const scrollAwards = function (direction) {
                        const start = awardsTrack.scrollLeft;
                        const distance = direction * awardsTrack.clientWidth * 0.72;
                        const duration = 820;
                        const startTime = performance.now();
                        const easeInOut = function (progress) {
                            return progress < 0.5
                                ? 2 * progress * progress
                                : 1 - Math.pow(-2 * progress + 2, 2) / 2;
                        };

                        const animate = function (currentTime) {
                            const elapsed = currentTime - startTime;
                            const progress = Math.min(elapsed / duration, 1);
                            awardsTrack.scrollLeft = start + distance * easeInOut(progress);

                            if (progress < 1) {
                                window.requestAnimationFrame(animate);
                            }
                        };

                        window.requestAnimationFrame(animate);
                    };

                    awardsPrev.addEventListener('click', function () {
                        scrollAwards(-1);
                    });

                    awardsNext.addEventListener('click', function () {
                        scrollAwards(1);
                    });

                    awardsTrack.addEventListener('scroll', updateAwardsProgress, { passive: true });
                    window.addEventListener('resize', updateAwardsProgress);
                    updateAwardsProgress();
                }

                const heroSlides = document.querySelectorAll('.sv-hero-text-slide');
                let activeHeroSlide = 0;
                let heroTypingTimer = null;

                const typeHeroHeading = function (slide) {
                    const heading = slide.querySelector('h2');

                    if (!heading) {
                        return;
                    }

                    const firstLine = heading.querySelector('.sv-typing-line-one');
                    const secondLine = heading.querySelector('.sv-typing-line-two');
                    const lines = [
                        { element: firstLine, text: heading.dataset.lineOne || '' },
                        { element: secondLine, text: heading.dataset.lineTwo || '' },
                    ];
                    let lineIndex = 0;
                    let characterIndex = 0;

                    clearTimeout(heroTypingTimer);
                    lines.forEach(function (line) {
                        if (line.element) {
                            line.element.textContent = '';
                        }
                    });

                    const typeNextCharacter = function () {
                        const currentLine = lines[lineIndex];

                        if (!currentLine || !currentLine.element) {
                            return;
                        }

                        currentLine.element.textContent = currentLine.text.slice(0, characterIndex + 1);
                        characterIndex += 1;

                        if (characterIndex < currentLine.text.length) {
                            heroTypingTimer = setTimeout(typeNextCharacter, 55);
                            return;
                        }

                        lineIndex += 1;
                        characterIndex = 0;

                        if (lineIndex < lines.length) {
                            heroTypingTimer = setTimeout(typeNextCharacter, 260);
                        }
                    };

                    typeNextCharacter();
                };

                if (heroSlides.length) {
                    typeHeroHeading(heroSlides[activeHeroSlide]);
                }

                if (heroSlides.length > 1) {
                    setInterval(function () {
                        heroSlides[activeHeroSlide].classList.remove('is-active');

                        activeHeroSlide = (activeHeroSlide + 1) % heroSlides.length;

                        heroSlides[activeHeroSlide].classList.add('is-active');
                        typeHeroHeading(heroSlides[activeHeroSlide]);
                    }, 5200);
                }

                const careerSection = document.querySelector('[data-career-scroll]');

                if (careerSection && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                    let careerTicking = false;

                    const updateCareerProgress = function () {
                        const rect = careerSection.getBoundingClientRect();
                        const scrollableDistance = careerSection.offsetHeight - window.innerHeight;
                        const animationDelay = Math.min(window.innerHeight * 0.22, 180);
                        const activeDistance = Math.max(scrollableDistance - animationDelay, 1);
                        const rawProgress = scrollableDistance > 0 ? (-rect.top - animationDelay) / activeDistance : 1;
                        const progress = Math.min(Math.max(rawProgress, 0), 1);

                        careerSection.style.setProperty('--career-progress', progress.toFixed(3));
                        careerTicking = false;
                    };

                    const requestCareerUpdate = function () {
                        if (!careerTicking) {
                            window.requestAnimationFrame(updateCareerProgress);
                            careerTicking = true;
                        }
                    };

                    updateCareerProgress();
                    window.addEventListener('scroll', requestCareerUpdate, { passive: true });
                    window.addEventListener('resize', requestCareerUpdate);
                }
            });
        </script>
    @endpush

    <!-- Start About============================================= -->
    <div class="about-style-one-area home-about-premium default-padding" data-about-company>
        <div class="shape-animated-left">
            <img src="{{ asset('assets/img/shape/3.png') }}" alt="Image Not Found">
            <img src="{{ asset('assets/img/shape/4.png') }}" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row align-center">
                <div class="about-style-one col-xl-5 col-lg-6">
                    <div class="about-thumb about-company-slider">
                        <div class="about-company-slide">
                            <img src="{{ asset('assets/img/about/11.jpg') }}" alt="IT team collaborating on digital strategy">
                        </div>
                        <div class="about-company-slide">
                            <img src="{{ asset('assets/img/it-consulting.jpg') }}" alt="Technology consultant reviewing business analytics">
                        </div>
                        <div class="about-company-slide">
                            <img src="{{ asset('assets/img/software-applications.jpg') }}" alt="Software team working on application dashboards">
                        </div>
                        <div class="about-company-slide">
                            <img src="{{ asset('assets/img/about/10.jpg') }}" alt="Modern technology team planning solutions">
                        </div>
                    </div>
                </div>
                <div class="about-style-one col-xl-6 col-lg-5 offset-xl-1 offset-lg-1">
                    <h2 class="sub-title">About Our Company</h2>
                    <h3 class="about-hover-heading" tabindex="0" data-alt="We help teams turn complex ideas into reliable digital products.">
                        <span>We make it easy to offer modern software to your customers.</span>
                    </h3>
                    <div class="wow fadeInUp" data-wow-delay="200ms">
                        <p class="mb-0">
                            Stackveda Technologies is a premier IT solutions provider dedicated to transforming complex
                            challenges into digital success. We specialize in custom software, web and mobile app
                            development, and strategic IT consulting. From cutting-edge e-commerce platforms to robust
                            fintech and healthcare solutions, our team leverages a modern tech stack—including React,
                            Python, AWS, and Flutter—to build scalable, future-ready products for businesses of all sizes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <section class="expertise-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center expertise-heading-premium">
                        <h2 class="sub-title">What we do</h2>
                        <h3 class="title">Technical solutions that <br> help tech businesses.</h3>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4">

                <!-- CARD -->
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('digital-marketing') }}" target="_blank">
                        <div class="expertise-card">
                            <img src="{{ asset('assets/img/digital-marketing.jpg') }}" class="expertise-img" alt="dgtm-img">
                            <div class="expertise-overlay">
                                <span class="expertise-chip">Growth</span>
                                <p class="expertise-title">Digital Marketing</p>
                                <div class="expertise-content">
                                    <p>Performance campaigns, content, and paid media built to turn attention into qualified leads.</p>
                                    <span class="expertise-link">Expand <i class="far fa-chevron-right"></i></span>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>

                <!-- Repeat same structure for all cards -->
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('software-applications') }}" target="_blank">
                        <div class="expertise-card">
                            <img src="{{ asset('assets/img/software-applications.jpg') }}" class="expertise-img" alt="soft-img">
                            <div class="expertise-overlay">
                                <span class="expertise-chip">Product</span>
                                <p class="expertise-title">Software Applications
                                </p>
                                <div class="expertise-content">
                                    <p>Custom business software, portals, and workflow tools designed around your operations.</p>
                                    <span class="expertise-link">Expand <i class="far fa-chevron-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('it-consulting-staffing') }}" target="_blank">
                        <div class="expertise-card">
                            <img src="{{ asset('assets/img/it-consulting.jpg') }}" class="expertise-img" alt="it-img">
                            <div class="expertise-overlay">
                                <span class="expertise-chip">Support</span>
                                <p class="expertise-title">IT Consulting and Support
                                </p>
                                <div class="expertise-content">
                                    <p>Practical consulting, infrastructure guidance, and reliable technical support for growing teams.</p>
                                    <span class="expertise-link">Expand <i class="far fa-chevron-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('web-application') }}" target="_blank">
                        <div class="expertise-card">
                            <img src="{{ asset('assets/img/web-devlopment.jpg') }}" class="expertise-img" alt="web-image">
                            <div class="expertise-overlay">
                                <span class="expertise-chip">Web</span>
                                <p class="expertise-title">Web Application Development
                                </p>
                                <div class="expertise-content">
                                    <p>Secure, scalable web applications with clean UX and maintainable architecture.</p>
                                    <span class="expertise-link">Expand <i class="far fa-chevron-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- CARD -->
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('mobile-application') }}" target="_blank">
                        <div class="expertise-card">
                            <img src="{{ asset('assets/img/mobile-app.jpg') }}" class="expertise-img" alt="mobile-img">
                            <div class="expertise-overlay">
                                <span class="expertise-chip">Mobile</span>
                                <p class="expertise-title">Mobile App Development
                                </p>
                                <div class="expertise-content">
                                    <p>Native and cross-platform mobile apps focused on speed, usability, and retention.</p>
                                    <span class="expertise-link">Expand <i class="far fa-chevron-right"></i></span>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>

                <!-- Repeat same structure for all cards -->
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('seo') }}" target="_blank">
                        <div class="expertise-card">
                            <img src="{{ asset('assets/img/digital-marketing.jpg') }}" class="expertise-img" alt="seo-img">
                            <div class="expertise-overlay">
                                <span class="expertise-chip">Search</span>
                                <p class="expertise-title">SEO
                                </p>
                                <div class="expertise-content">
                                    <p>Technical SEO, content strategy, and ranking improvements for long-term organic growth.</p>
                                    <span class="expertise-link">Expand <i class="far fa-chevron-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('bpo') }}" target="_blank">
                        <div class="expertise-card">
                            <img src="{{ asset('assets/img/business-process.jpg') }}" class="expertise-img" alt="bpo-img">
                            <div class="expertise-overlay">
                                <span class="expertise-chip">Operations</span>
                                <p class="expertise-title">Business Process Outsourcing (BPO)</p>
                                <div class="expertise-content">
                                    <p>Back-office, support, and process teams that help you scale daily operations efficiently.</p>
                                    <span class="expertise-link">Expand <i class="far fa-chevron-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('ai-integration') }}" target="_blank">
                        <div class="expertise-card">
                            <img src="{{ asset('assets/img/it-consulting.jpg') }}" class="expertise-img" alt="ai-img">
                            <div class="expertise-overlay">
                                <span class="expertise-chip">AI</span>
                                <p class="expertise-title">AI Integration</p>
                                <div class="expertise-content">
                                    <p>Integrate AI solutions like chatbots, automation, and smart analytics to enhance business efficiency.</p>
                                    <span class="expertise-link">Expand <i class="far fa-chevron-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- @include('includes.service-card') --}}


    {{-- @include('includes.tech-logos') --}}
    <section class="techstack-section">
        <div class="container">
            <div class="techstack-head text-center">
                <span class="techstack-kicker">Technology stack</span>
                <h2 class="techstack-title">Technology stack powering modern digital solutions</h2>
                <p class="techstack-subtitle">
                    We work with proven frontend, backend, cloud, database, design, analytics, and automation tools to build secure, scalable, and maintainable digital products.
                </p>
            </div>

            <div class="techstack-panel">
                <div class="techstack-tools-grid">
                    <div class="techstack-tool-card">
                        <span class="techstack-tool-icon is-ai"><i class="fas fa-brain"></i></span>
                        <span>AI & Machine Learning</span>
                    </div>
                    <div class="techstack-tool-card">
                        <span class="techstack-tool-icon is-cloud"><i class="fas fa-cloud-upload-alt"></i></span>
                        <span>Cloud Platforms</span>
                    </div>
                    <div class="techstack-tool-card">
                        <span class="techstack-tool-icon is-php"><i class="fab fa-php"></i></span>
                        <span>PHP & Laravel</span>
                    </div>
                    <div class="techstack-tool-card">
                        <span class="techstack-tool-icon is-js"><i class="fab fa-js"></i></span>
                        <span>JavaScript</span>
                    </div>
                    <div class="techstack-tool-card">
                        <span class="techstack-tool-icon is-react"><i class="fab fa-react"></i></span>
                        <span>React</span>
                    </div>
                    <div class="techstack-tool-card">
                        <span class="techstack-tool-icon is-python"><i class="fab fa-python"></i></span>
                        <span>Python</span>
                    </div>
                    <div class="techstack-tool-card">
                        <span class="techstack-tool-icon is-db"><i class="fas fa-database"></i></span>
                        <span>SQL & Databases</span>
                    </div>
                    <div class="techstack-tool-card">
                        <span class="techstack-tool-icon is-mobile"><i class="fas fa-mobile-alt"></i></span>
                        <span>Mobile Apps</span>
                    </div>
                    <div class="techstack-tool-card">
                        <span class="techstack-tool-icon is-wordpress"><i class="fab fa-wordpress-simple"></i></span>
                        <span>CMS Platforms</span>
                    </div>
                    <div class="techstack-tool-card">
                        <span class="techstack-tool-icon is-devops"><i class="fas fa-cogs"></i></span>
                        <span>DevOps</span>
                    </div>
                    <div class="techstack-tool-card">
                        <span class="techstack-tool-icon is-figma"><i class="fab fa-figma"></i></span>
                        <span>UI/UX Design</span>
                    </div>
                    <div class="techstack-tool-card">
                        <span class="techstack-tool-icon is-git"><i class="fab fa-git-alt"></i></span>
                        <span>Git & Version Control</span>
                    </div>
                </div>

                <a href="{{ route('request-quote') }}" class="techstack-action">
                    Ask about our technology approach
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="home-awards-section">
        <div class="container">
            <div class="home-awards-head">
                <span>Why StackVeda</span>
                <h2>Built for teams that need dependable digital execution</h2>
            </div>
        </div>

        <div class="home-awards-shell">
            <div class="home-awards-track" aria-label="StackVeda recognitions">
                <article class="home-awards-card">
                    <span class="home-awards-source">Discovery First</span>
                    <h3>We understand your workflows, users, and business goals before writing a single line of code.</h3>
                    <a href="{{ route('software-applications') }}">Read More</a>
                    <i class="fas fa-search"></i>
                </article>

                <article class="home-awards-card">
                    <span class="home-awards-source">Scalable Builds</span>
                    <h3>From websites to web apps, we create systems that stay maintainable as your traffic and team grow.</h3>
                    <a href="{{ route('web-application') }}">Read More</a>
                    <i class="fas fa-layer-group"></i>
                </article>

                <article class="home-awards-card">
                    <span class="home-awards-source">Practical AI</span>
                    <h3>We add AI where it creates real value: automation, support, insights, and faster daily decisions.</h3>
                    <a href="{{ route('ai-integration') }}">Read More</a>
                    <i class="fas fa-robot"></i>
                </article>

                <article class="home-awards-card">
                    <span class="home-awards-source">Cloud Ready</span>
                    <h3>We help teams move to reliable cloud infrastructure with better performance, security, and control.</h3>
                    <a href="{{ route('cloud-services') }}">Read More</a>
                    <i class="fas fa-cloud"></i>
                </article>

                <article class="home-awards-card">
                    <span class="home-awards-source">Long-Term Support</span>
                    <h3>After launch, we keep improving, monitoring, and supporting your digital product as needs change.</h3>
                    <a href="{{ route('request-quote') }}">Read More</a>
                    <i class="fas fa-headset"></i>
                </article>

                <article class="home-awards-card">
                    <span class="home-awards-source">Clean User Experience</span>
                    <h3>We design interfaces that make common tasks easier, faster, and more natural for your customers.</h3>
                    <a href="{{ route('web-designing') }}">Read More</a>
                    <i class="fas fa-pencil-ruler"></i>
                </article>

                <article class="home-awards-card">
                    <span class="home-awards-source">Mobile First</span>
                    <h3>We build mobile app experiences focused on speed, usability, retention, and reliable performance.</h3>
                    <a href="{{ route('mobile-application') }}">Read More</a>
                    <i class="fas fa-mobile-alt"></i>
                </article>

                <article class="home-awards-card">
                    <span class="home-awards-source">Search Visibility</span>
                    <h3>We improve technical SEO, content structure, and digital visibility so the right users find you.</h3>
                    <a href="{{ route('seo') }}">Read More</a>
                    <i class="fas fa-chart-line"></i>
                </article>

                <article class="home-awards-card">
                    <span class="home-awards-source">Operations Scale</span>
                    <h3>We support back-office and process workflows that help teams reduce repetitive manual work.</h3>
                    <a href="{{ route('bpo') }}">Read More</a>
                    <i class="fas fa-cogs"></i>
                </article>
            </div>

            <div class="home-awards-controls">
                <div class="home-awards-progress" aria-hidden="true">
                    <span></span>
                </div>
                <button class="home-awards-nav home-awards-prev" type="button" aria-label="Previous recognition">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button class="home-awards-nav home-awards-next" type="button" aria-label="Next recognition">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>

    <section class="home-testimonials-section">
        <div class="container">
            <div class="home-testimonials-head text-center">
                <span>Testimonials</span>
                <h2>Trusted by Teams Building Smarter Digital Products</h2>
                <p>A high-growth startup agency relies on the best technologies to deliver branding, marketing, and product development.</p>
            </div>

            <div class="home-testimonials-grid swiper home-testimonials-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <article class="home-testimonial-card">
                            <span class="home-testimonial-quote-mark">"</span>
                            <div class="home-testimonial-badge"><i class="fas fa-check-circle"></i> Verified client</div>
                            <div class="home-testimonial-rating">
                                <div class="home-testimonial-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating">5.0</span>
                            </div>
                            <h3><strong>Awesome!</strong> Working with StackVeda has transformed our operations. The team is truly exceptional! Really we&apos;re grateful &amp; <strong>we&apos;re closing 40% on cold traffic.</strong></h3>
                            <div class="home-testimonial-author-panel">
                                <div class="home-testimonial-quote-icon"><i class="fas fa-quote-right"></i></div>
                                <div class="home-testimonial-avatar is-blue">
                                    <img src="{{ asset('assets/img/team/1.jpg') }}" alt="John Doe">
                                </div>
                                <div>
                                    <strong>John Doe</strong>
                                    <span>CEO, InnovateTech</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="swiper-slide">
                        <article class="home-testimonial-card">
                            <span class="home-testimonial-quote-mark">"</span>
                            <div class="home-testimonial-badge"><i class="fas fa-check-circle"></i> Verified client</div>
                            <div class="home-testimonial-rating">
                                <div class="home-testimonial-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating">5.0</span>
                            </div>
                            <h3><strong>Reliable delivery.</strong> Working with StackVeda made our launch smoother and faster. Their expertise in design, development, and delivery is <strong>exactly what our team needed.</strong></h3>
                            <div class="home-testimonial-author-panel">
                                <div class="home-testimonial-quote-icon"><i class="fas fa-quote-right"></i></div>
                                <div class="home-testimonial-avatar is-purple">
                                    <img src="{{ asset('assets/img/team/2.jpg') }}" alt="Jane Smith">
                                </div>
                                <div>
                                    <strong>Jane Smith</strong>
                                    <span>Founder, ScaleWorks</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="swiper-slide">
                        <article class="home-testimonial-card">
                            <span class="home-testimonial-quote-mark">"</span>
                            <div class="home-testimonial-badge"><i class="fas fa-check-circle"></i> Verified client</div>
                            <div class="home-testimonial-rating">
                                <div class="home-testimonial-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating">5.0</span>
                            </div>
                            <h3><strong>Clear communication.</strong> The team delivered on time and kept every milestone visible. Their product thinking helped us move faster <strong>without sacrificing quality.</strong></h3>
                            <div class="home-testimonial-author-panel">
                                <div class="home-testimonial-quote-icon"><i class="fas fa-quote-right"></i></div>
                                <div class="home-testimonial-avatar is-green">
                                    <img src="{{ asset('assets/img/team/3.jpg') }}" alt="Alex Patel">
                                </div>
                                <div>
                                    <strong>Alex Patel</strong>
                                    <span>COO, Nova Labs</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="swiper-slide">
                        <article class="home-testimonial-card">
                            <span class="home-testimonial-quote-mark">"</span>
                            <div class="home-testimonial-badge"><i class="fas fa-check-circle"></i> Verified client</div>
                            <div class="home-testimonial-rating">
                                <div class="home-testimonial-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating">5.0</span>
                            </div>
                            <h3><strong>Smart execution.</strong> StackVeda understood our workflow quickly and turned it into a clean digital solution. The result reduced manual tasks and <strong>saved hours every week.</strong></h3>
                            <div class="home-testimonial-author-panel">
                                <div class="home-testimonial-quote-icon"><i class="fas fa-quote-right"></i></div>
                                <div class="home-testimonial-avatar is-orange">
                                    <img src="{{ asset('assets/img/team/4.jpg') }}" alt="Riya Mehta">
                                </div>
                                <div>
                                    <strong>Riya Mehta</strong>
                                    <span>Director, CloudOps</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="career-scroll-section" data-career-scroll>
        <div class="career-scroll-sticky">
            <div class="career-scroll-image">
                <img src="{{ asset('assets/img/about/11.jpg') }}" alt="StackVeda team collaborating at work">
            </div>
            <div class="career-scroll-content">
                <span>Innovation</span>
                <h2>Build smarter digital systems for faster business growth.</h2>
                <p>
                    Turn complex workflows into simple, scalable products with practical software, cloud, data, and AI solutions.
                </p>
                <a href="{{ route('request-quote') }}">
                    Start a project
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Start Contact Us -->
    <section class="home-ready-contact" id="home-contact">
        <div class="container">
            <div class="home-ready-contact__grid">
                <div class="home-ready-contact__content">
                    <h2>Are you ready?</h2>
                    <p>
                        The most forward-thinking teams are not just adopting new tools. They are building smarter digital
                        systems to move faster, serve better, and outcreate the market.
                    </p>
                </div>

                <div class="home-ready-contact__form-wrap">
                    @include('admin.includes.alert-message')

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('contact-us.submit') }}" method="POST" class="home-ready-contact__form">
                        @csrf

                        <div class="home-ready-contact__fields">
                            <div class="home-ready-contact__field">
                                <label for="home-contact-name">First Name*</label>
                                <input type="text" id="home-contact-name" name="name" placeholder=" " required>
                                <span class="alert-error">@error('name') {{ $message }} @enderror</span>
                            </div>

                            <div class="home-ready-contact__field">
                                <label for="home-contact-last-name">Last Name*</label>
                                <input type="text" id="home-contact-last-name" name="last_name" placeholder=" " required>
                            </div>

                            <div class="home-ready-contact__field">
                                <label for="home-contact-email">Email Address*</label>
                                <input type="email" id="home-contact-email" name="email" placeholder=" " required>
                                <span class="alert-error">@error('email') {{ $message }} @enderror</span>
                            </div>

                            <div class="home-ready-contact__field">
                                <label for="home-contact-website">Company Website (optional)</label>
                                <input type="url" id="home-contact-website" name="website_url" placeholder=" ">
                                <span class="alert-error">@error('website_url') {{ $message }} @enderror</span>
                            </div>

                            <div class="home-ready-contact__field">
                                <label for="home-contact-mobile">Phone Number*</label>
                                <input type="tel" id="home-contact-mobile" name="mobile" placeholder=" " required>
                                <span class="alert-error">@error('mobile') {{ $message }} @enderror</span>
                            </div>

                            <div class="home-ready-contact__field home-ready-contact__select">
                                <label for="home-contact-country">Country*</label>
                                <select id="home-contact-country" name="country" required>
                                    <option value="" selected disabled></option>
                                    <option value="India">India</option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="home-ready-contact__field home-ready-contact__field--full">
                                <label for="home-contact-message">Let us know how we can help you*</label>
                                <textarea id="home-contact-message" name="message" placeholder=" " required></textarea>
                                <span class="alert-error">@error('message') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <label class="home-ready-contact__check">
                            <input type="checkbox" required>
                            <span>I agree to StackVeda collecting and processing my personal data to respond to my request and provide related services. *</span>
                        </label>

                        <p class="home-ready-contact__privacy">
                            To learn more about how we protect your data, please refer to the
                            <a href="{{ route('contact-us') }}">StackVeda privacy policy</a>.
                        </p>

                        <div class="home-ready-contact__captcha">
                            <p>This site is protected by CAPTCHA.</p>
                            <div class="home-ready-contact__captcha-row">
                                <img src="{{ captcha_src('flat') }}" id="home_captcha_img" alt="Captcha Image">
                                <button type="button" id="home_captcha_reload" aria-label="Refresh Captcha">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                                <input type="text" name="captcha" placeholder="Enter Captcha*" required>
                            </div>
                            <span class="alert-error">@error('captcha') {{ $message }} @enderror</span>
                        </div>

                        <button type="submit" class="home-ready-contact__submit">
                            Submit
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var reloadButton = document.getElementById('home_captcha_reload');
            var captchaImage = document.getElementById('home_captcha_img');

            if (reloadButton && captchaImage) {
                reloadButton.addEventListener('click', function () {
                    var baseUrl = captchaImage.getAttribute('src').split('?')[0];
                    captchaImage.src = baseUrl + '?' + new Date().getTime();

                    var captchaInput = document.querySelector('.home-ready-contact__captcha input[name="captcha"]');
                    if (captchaInput) {
                        captchaInput.value = '';
                    }
                });
            }

            if (typeof Swiper !== 'undefined') {
                new Swiper('.home-testimonials-swiper', {
                    slidesPerView: 'auto',
                    centeredSlides: true,
                    spaceBetween: 38,
                    loop: true,
                    pagination: {
                        el: '.home-testimonials-swiper .swiper-pagination',
                        clickable: true,
                    },
                    grabCursor: true,
                    speed: 700,
                    breakpoints: {
                        0: {
                            spaceBetween: 18,
                        },
                        768: {
                            spaceBetween: 28,
                        },
                        1200: {
                            spaceBetween: 38,
                        },
                    },
                });
            }
        });
    </script>
@endpush
