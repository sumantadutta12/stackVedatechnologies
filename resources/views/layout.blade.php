<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $seo->description ?? "At StackVeda Technologies, we help businesses move forward with reliable, scalable, and future-ready IT solutions. Whether you're building from the ground up or looking to improve existing systems, we partner with you."}}">
    <meta name="keywords" content="{{ $seo->keywords ?? '' }}">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $seo->og_title ?? ($seo->title ?? 'StackVeda Technologies | Empowering Business Through Smart Technology') }}">
    <meta property="og:description" content="{{ $seo->og_description ?? ($seo->description ?? 'Reliable, scalable, and future-ready IT solutions.') }}">
    <meta property="og:image" content="{{ $seo->og_image ?? 'https://www.stackvedatechnologies.com/img/stackveda-logo.png' }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $seo->og_title ?? ($seo->title ?? 'StackVeda Technologies | Empowering Business Through Smart Technology') }}">
    <meta name="twitter:description" content="{{ $seo->og_description ?? ($seo->description ?? 'Global IT & ITES solutions specializing in AI, Software Development, and BPO.') }}">
    <meta name="twitter:image" content="{{ $seo->og_image ?? 'https://www.stackvedatechnologies.com/img/stackveda-logo.png' }}">

    @verbatim
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "StackVeda Technologies",
        "alternateName": "StackVeda",
        "url": "https://www.stackvedatechnologies.com/",
        "logo": "https://www.stackvedatechnologies.com/img/stackveda-logo.png",
        "description": "StackVeda Technologies is a global IT & ITES startup specializing in AI, Data Science, Software Development, and Business Process Outsourcing (BPO).",
        "sameAs": [
            "https://www.linkedin.com/company/stackveda-technologies",
            "https://www.facebook.com/profile.php?id=61581121325811"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "customer service",
            "telephone": "+91-9046240275",
            "email": "info@stackvedatechnologies.com",
            "availableLanguage": "en"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "IT & ITES Service Catalog",
            "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Artificial Intelligence & Data Science" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Machine Learning (ML)" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Software & Web Application Development" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Mobile Application Development" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "IT Consulting and Staffing" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Business Process Outsourcing (BPO) & KPO" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Digital Marketing & SEO" } }
            ]
        }
    }
    </script>
    @endverbatim

    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/fav-df.png') }}">

    <title>StackVeda Technologies | Empowering Business Through Smart Technology | @yield('title')</title>

    <meta name="facebook-domain-verification" content="dph4xfy040aom3cgbqpi162pvmjhln" />

    <link rel="canonical" href="{{ $seo->canonical ?? url()->current() }}" />

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/elegant-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/validnavs.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/unit-test.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    @stack('style')
</head>

<body class="@yield('body_class')">
    @include('includes.header')
    <!-- /.Header -->

    @yield('content')

    @include('includes.footer')

    <a href="{{ route('contact-us') }}" class="ai-chat-float" aria-label="Chat with StackVeda">
        <i class="fas fa-comments"></i>
    </a>

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/validnavs.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mainNav = document.querySelector('.sv-main-nav');

            if (!mainNav) {
                return;
            }

            let lastScrollY = window.scrollY;
            let navTicking = false;
            let navReleaseTimer = null;

            const setNavState = function (state) {
                clearTimeout(navReleaseTimer);
                mainNav.classList.remove('sv-nav-top', 'sv-nav-released', 'sv-nav-hiding', 'sv-nav-fixed');
                document.body.classList.remove('sv-nav-is-hidden', 'sv-nav-is-visible');

                if (state === 'hiding') {
                    mainNav.classList.add('sv-nav-hiding');
                    document.body.classList.add('sv-nav-is-hidden');
                    return;
                }

                mainNav.classList.add(state);
                document.body.classList.add(state === 'sv-nav-released' ? 'sv-nav-is-hidden' : 'sv-nav-is-visible');
            };

            const updateNavDirection = function () {
                const currentScrollY = Math.max(window.scrollY, 0);
                const mobileMenu = document.querySelector('#navbar-menu');
                const isMenuOpen = document.body.classList.contains('side-on') || (mobileMenu && mobileMenu.classList.contains('show'));

                if (currentScrollY <= 20 || isMenuOpen) {
                    setNavState('sv-nav-top');
                    lastScrollY = currentScrollY;
                    navTicking = false;
                    return;
                }

                if (currentScrollY > lastScrollY + 8) {
                    if (!mainNav.classList.contains('sv-nav-released') && !mainNav.classList.contains('sv-nav-hiding')) {
                        setNavState('hiding');
                    }
                } else if (currentScrollY < lastScrollY - 8) {
                    setNavState('sv-nav-fixed');
                }

                lastScrollY = currentScrollY;
                navTicking = false;
            };

            const requestNavUpdate = function () {
                if (!navTicking) {
                    window.requestAnimationFrame(updateNavDirection);
                    navTicking = true;
                }
            };

            setNavState('sv-nav-top');
            window.addEventListener('scroll', requestNavUpdate, { passive: true });
        });
    </script>
    @stack('script')
</body>

</html>
