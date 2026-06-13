<!-- Header ============================================= -->
    <header class="sv-site-header">
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed dark no-background sv-main-nav">

            <div class="container d-flex justify-content-between align-items-center sv-nav-container">


                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand sv-navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/logo/StackVeda_Logo-1.png') }}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <div class="collapse-header">
                        <img src="{{ @$setting->logo }}" alt="Logo" style="width: 205px">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>

                    <ul class="nav navbar-nav navbar-center sv-nav-menu" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown sv-mega-item">
                            <a href="{{ route('services') }}" class="dropdown-toggle" data-toggle="dropdown">What we do</a>
                            <ul class="dropdown-menu sv-mega-menu">
                                <li>
                                    <div class="sv-tcs-mega">
                                        <div class="sv-mega-intro">
                                            <span class="sv-mega-kicker">Services</span>
                                            <h3>Adaptive technology for modern business</h3>
                                            <a href="{{ route('services') }}">Explore services <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sv-mega-columns">
                                            <div class="sv-mega-col">
                                                <h4>Digital Products</h4>
                                                <a href="{{ route('website-development') }}">Website Development</a>
                                                <a href="{{ route('web-application') }}">Web App Development</a>
                                                <a href="{{ route('mobile-application') }}">Mobile App Development</a>
                                                <a href="{{ route('software-applications') }}">Custom Software Development</a>
                                                <a href="{{ route('cloud-services') }}">SaaS Development</a>
                                            </div>
                                            <div class="sv-mega-col">
                                                <h4>Design and Cloud</h4>
                                                <a href="{{ route('work-process') }}">User Research</a>
                                                <a href="{{ route('web-designing') }}">Web Design</a>
                                                <a href="{{ route('web-designing') }}">UI/UX Design</a>
                                                <a href="{{ route('cloud-services') }}">Cloud Migration</a>
                                                <a href="{{ route('it-consulting-staffing') }}">DevOps</a>
                                            </div>
                                            <div class="sv-mega-col">
                                                <h4>Data and Operations</h4>
                                                <a href="{{ route('it-consulting-staffing') }}">Cybersecurity</a>
                                                <a href="{{ route('support-process') }}">Support & Maintenance</a>
                                                <a href="{{ route('ai-integration') }}">Data Engineering</a>
                                                <a href="{{ route('digital-marketing') }}">Analytics & Visualization</a>
                                                <a href="{{ route('ai-integration') }}">AI & Machine Learning</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown sv-mega-item">
                            <a href="{{ route('about-us') }}" class="dropdown-toggle" data-toggle="dropdown">Who we are</a>
                            <ul class="dropdown-menu sv-mega-menu">
                                <li>
                                    <div class="sv-tcs-mega">
                                        <div class="sv-mega-intro">
                                            <span class="sv-mega-kicker">Company</span>
                                            <h3>Partnering with teams that need dependable delivery</h3>
                                            <p>We combine practical engineering, transparent process, and long-term support for growing businesses.</p>
                                            <a href="{{ route('about-us') }}">Discover StackVeda <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sv-mega-columns sv-mega-columns-compact">
                                            <div class="sv-mega-col">
                                                <h4>About</h4>
                                                <a href="{{ route('about-us') }}">About Us</a>
                                                <a href="{{ route('work-process') }}">Work Process</a>
                                                <a href="{{ route('support-process') }}">Support Process</a>
                                            </div>
                                            <div class="sv-mega-col">
                                                <h4>Connect</h4>
                                                <a href="{{ route('contact-us') }}">Contact Us</a>
                                                <a href="{{ route('request-quote') }}">Request Quote</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown sv-mega-item">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Industries</a>
                            <ul class="dropdown-menu sv-mega-menu">
                                <li>
                                    <div class="sv-tcs-mega">
                                        <div class="sv-mega-intro">
                                            <span class="sv-mega-kicker">Industries</span>
                                            <h3>Technology solutions shaped around your market</h3>
                                            <p>We support teams across high-growth sectors with practical digital delivery and long-term technical partnership.</p>
                                            <a href="javascript:void(0)">Explore industries <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sv-mega-columns sv-mega-columns-compact">
                                            <div class="sv-mega-col">
                                                <h4>Consumer and Care</h4>
                                                <a href="javascript:void(0)">Retail & eCommerce</a>
                                                <a href="javascript:void(0)">Healthcare & Life Sciences</a>
                                                <a href="javascript:void(0)">Education & EdTech</a>
                                            </div>
                                            <div class="sv-mega-col">
                                                <h4>Operations</h4>
                                                <a href="javascript:void(0)">Financial Services</a>
                                                <a href="javascript:void(0)">Logistics & Supply Chain</a>
                                                <a href="javascript:void(0)">Manufacturing</a>
                                            </div>
                                            <div class="sv-mega-col">
                                                <h4>Experience</h4>
                                                <a href="javascript:void(0)">Travel & Hospitality</a>
                                                <a href="javascript:void(0)">Media & Entertainment</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown sv-mega-item">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Insights</a>
                            <ul class="dropdown-menu sv-mega-menu">
                                <li>
                                    <div class="sv-tcs-mega">
                                        <div class="sv-mega-intro">
                                            <span class="sv-mega-kicker">Insights</span>
                                            <h3>Ideas for digital growth and stronger delivery</h3>
                                            <p>Explore practical resources across search, training, process, and technology execution.</p>
                                            <a href="{{ route('seo') }}">Start reading <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sv-mega-columns sv-mega-columns-compact">
                                            <div class="sv-mega-col">
                                                <h4>Resources</h4>
                                                <a href="{{ route('seo') }}">SEO Insights</a>
                                                <a href="{{ route('live-project-training') }}">Live Project Training</a>
                                                <a href="{{ route('work-process') }}">Delivery Process</a>
                                            </div>
                                            <div class="sv-mega-col">
                                                <h4>Featured</h4>
                                                <a href="{{ route('ai-integration') }}">AI Integration</a>
                                                <a href="{{ route('cloud-services') }}">Cloud Services</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('our-works') }}">Case studies</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="sv-nav-actions">
                    <a href="{{ route('request-quote') }}" class="sv-chat-btn">
                        <i class="fa fa-robot"></i>
                        <span>Ask AI</span>
                    </a>
                </div>

            </div>
            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
<!-- End Header -->
