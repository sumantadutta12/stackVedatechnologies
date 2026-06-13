<footer class="site-footer-brand">
    <div class="site-footer-brand__panel">
        <div class="site-footer-brand__main">
            <div class="site-footer-brand__about">
                <h2>About Us</h2>
                <p>
                    {{ @$setting->short_description }}
                </p>

                <ul class="site-footer-brand__social site-footer-brand__social--about" aria-label="Social links">
                    @if ($setting->facebook_url)
                        <li>
                            <a href="{{ @$setting->facebook_url }}" target="_blank" rel="noopener" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                    @endif

                    @if ($setting->linkdin_url)
                        <li>
                            <a href="{{ $setting->linkdin_url }}" target="_blank" rel="noopener" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    @endif

                    @if ($setting->youtube_url)
                        <li>
                            <a href="{{ $setting->youtube_url }}" target="_blank" rel="noopener" aria-label="YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    @endif

                    @if ($setting->x_url)
                        <li>
                            <a href="{{ $setting->x_url }}" target="_blank" rel="noopener" aria-label="X">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>

            <nav class="site-footer-brand__nav" aria-label="Footer navigation">
                <div class="site-footer-brand__group">
                    <h3>Our Company</h3>
                    <ul>
                        <li><a href="{{ route('about-us') }}">About Us</a></li>
                        <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                    </ul>
                </div>

                <div class="site-footer-brand__group">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="{{ route('web-application') }}">Web Development</a></li>
                        <li><a href="{{ route('software-applications') }}">Custom Software Application</a></li>
                        <li><a href="{{ route('mobile-application') }}">Mobile App Development</a></li>
                    </ul>
                </div>

                <div class="site-footer-brand__group">
                    <h3>Useful links</h3>
                    <ul>
                        <li><a href="{{ route('our-works') }}">Our Work</a></li>
                        <li><a href="{{ route('request-quote') }}">Request A Quote</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="site-footer-brand__brand-row">
            <a class="site-footer-brand__logo" href="{{ route('home') }}" aria-label="{{ @$setting->site_name ?? 'StackVeda Technologies' }}">
                <img src="{{ asset('img/svt-2.webp') }}" alt="{{ @$setting->site_name ?? 'StackVeda Technologies' }}">
            </a>
        </div>

        <div class="site-footer-brand__bottom">
            <ul>
                <li><a href="{{ route('contact-us') }}">Privacy Statement</a></li>
                <li><a href="{{ route('services') }}">AI Policy</a></li>
                <li><a href="{{ route('contact-us') }}">Responsible Disclosure</a></li>
                <li><a href="{{ route('request-quote') }}">Start a Project</a></li>
                <li><a href="{{ route('home') }}">Sitemap</a></li>
            </ul>

            <p>&copy; {{ date('Y') }} {{ @$setting->site_name ?? 'StackVeda Technologies' }}. All Rights Reserved.</p>
        </div>
    </div>
</footer>
