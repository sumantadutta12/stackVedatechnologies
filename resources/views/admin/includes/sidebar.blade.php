<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <div class="profile-info">
            <figure class="user-cover-image"></figure>
            <div class="user-info">
                <img src="{{ asset('img/user.png') }}" alt="{{ auth()->user()->name }}">
                <h6 class="">{{ auth()->user()->name }}</h6>
            </div>
        </div>
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">

            {{-- DASHBOARD --}}
            <li class="menu @if ($routeName == 'admin.dashboard') active @endif">
                <a href="{{ route('admin.dashboard') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>


            {{-- BANNER MANAGEMENT --}}
            <li class="menu @if ($controllerName == 'BannerController') active @endif">
                <a href="#banners" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.5h16.5M3.75 9.75h16.5m-16.5 5.25h16.5M3.75 15h16.5M3.75 19.5h16.5" />
                        </svg>
                        <span>Banner Management</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="submenu list-unstyled collapse @if ($controllerName == 'BannerController') show @endif" id="banners" data-parent="#accordionExample">
                    <li class="@if ($routeName == 'admin.banners.index' || $routeName == 'admin.banners.edit') active @endif">
                        <a href="{{ route('admin.banners.index') }}">List of Banners</a>
                    </li>
                    <li class="@if ($routeName == 'admin.banners.create') active @endif">
                        <a href="{{ route('admin.banners.create') }}">Add New Banner</a>
                    </li>
                </ul>
            </li>


            {{-- SEO MANAGEMENT --}}
            <li class="menu @if ($controllerName == 'SeoController') active @endif">
                <a href="#seo" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18l-6-6h12l-6 6zm0-12l6 6H6l6-6z" />
                        </svg>
                        <span>SEO Management</span>
                    </div>

                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>

                <ul class="submenu list-unstyled collapse
                    @if ($controllerName == 'SeoController') show @endif"
                    id="seo" data-parent="#accordionExample">

                    <li class="@if ($routeName == 'admin.seos.index' || $routeName == 'admin.seos.edit') active @endif">
                        <a href="{{ route('admin.seos.index') }}">List of SEO</a>
                    </li>

                    <li class="@if ($routeName == 'admin.seos.create') active @endif">
                        <a href="{{ route('admin.seos.create') }}">Add SEO</a>
                    </li>

                </ul>
            </li>


            {{-- TECH LOGO MANAGEMENT --}}
            <li class="menu @if ($controllerName == 'TechLogoController') active @endif">
                <a href="#techlogos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m9-9H3" />
                        </svg>
                        <span>Tech Logo Management</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="submenu list-unstyled collapse @if ($controllerName == 'TechLogoController') show @endif" id="techlogos" data-parent="#accordionExample">
                    <li class="@if ($routeName == 'admin.tech_logos.index' || $routeName == 'admin.tech_logos.edit') active @endif">
                        <a href="{{ route('admin.tech_logos.index') }}">List of Tech Logos</a>
                    </li>
                    <li class="@if ($routeName == 'admin.tech_logos.create') active @endif">
                        <a href="{{ route('admin.tech_logos.create') }}">Add New Tech Logo</a>
                    </li>
                </ul>
            </li>


            {{-- SERVICE MANAGEMENT --}}
            <li class="menu @if ($controllerName == 'ServiceController') active @endif">
                <a href="#services" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <span>Service Management</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="submenu list-unstyled collapse @if ($controllerName == 'ServiceController') show @endif" id="services" data-parent="#accordionExample">
                    <li class="@if ($routeName == 'admin.services.index' || $routeName == 'admin.services.edit') active @endif">
                        <a href="{{ route('admin.services.index') }}">List of Services</a>
                    </li>
                    <li class="@if ($routeName == 'admin.services.create') active @endif">
                        <a href="{{ route('admin.services.create') }}">Add New Service</a>
                    </li>
                </ul>
            </li>


            {{-- PORTFOLIO MANAGEMENT --}}
            <li class="menu @if ($controllerName == 'PortfolioController') active @endif">
                <a href="#portfolios" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <span>Portfolio Management</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="submenu list-unstyled collapse @if ($controllerName == 'PortfolioController') show @endif" id="portfolios" data-parent="#accordionExample">
                    <li class="@if ($routeName == 'admin.portfolios.index' || $routeName == 'admin.portfolios.edit') active @endif">
                        <a href="{{ route('admin.portfolios.index') }}">List of Portfolios</a>
                    </li>
                    <li class="@if ($routeName == 'admin.portfolios.create') active @endif">
                        <a href="{{ route('admin.portfolios.create') }}">Add New Portfolio</a>
                    </li>
                </ul>
            </li>


            <li class="menu @if ($controllerName == 'EnquiryController') active @endif">
                <a href="#enquiries" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                            <path d="M502.3 190.8L327.4 338c-13.5 11.4-33.4 11.4-46.9 0L9.7 190.8C3.4 185.5 0 177.9 0 170V144c0-26.5 21.5-48 48-48h416c26.5 0 48 21.5 48 48v26c0 7.9-3.4 15.5-9.7 20.8z"></path>
                        </svg>
                        <span>Enquiries</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="submenu list-unstyled collapse @if ($controllerName == 'EnquiryController') show @endif" id="enquiries" data-parent="#accordionExample">
                    <li class="@if ($routeName == 'admin.enquiries.index') active @endif">
                        <a href="{{ route('admin.enquiries.index') }}">Enquiry List</a>
                    </li>
                </ul>
            </li>


            {{-- CONTACT US MANAGEMENT --}}
            <li class="menu @if ($routeName == 'admin.contacts.index') active @endif">
                <a href="{{ route('admin.contacts.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                        <span>Contact Us Enquiries</span>
                    </div>
                </a>
            </li>


            {{-- SETTINGS MANAGEMENT --}}
            <li class="menu @if ($controllerName == 'SettingsController') active @endif">
                <a href="#settings" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        <span>Settings</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="submenu list-unstyled collapse @if ($controllerName == 'SettingsController') show @endif" id="settings" data-parent="#accordionExample">
                    <li class="@if ($routeName == 'admin.settings.site') active @endif">
                        <a href="{{ route('admin.settings.site') }}"> Site Settings </a>
                    </li>
                    <li class="@if ($routeName == 'admin.settings.logo') active @endif">
                        <a href="{{ route('admin.settings.logo') }}"> Logo Settings </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
