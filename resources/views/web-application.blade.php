@extends('layout')
@section('title', $seo->title ?? 'Web Aplication')
@section('content')
    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area bg-cover shadow theme-hard text-center text-light"
        style="background-image: url(assets/img/banner/8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Web Development</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li>Web Development</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


    <section class="web-dev-section">
        <div class="container">

            <!-- Heading -->
            <h1 class="main-title">
                Web Development Services at<br />
                Stackveda Technologies
            </h1>

            <!-- Description -->
            <p class="main-desc">
                Looking for web development that actually scales with your business? Here at
                <span>Stackveda Technologies</span>, we do more than just write code. We build digital experiences
                from the ground up, handling everything from the way your application looks to the complex logic
                running behind the scenes. Instead of relying on cookie-cutter templates, we use a modern, flexible
                technology stack to ensure your digital products are fast, secure, and ready for whatever the future holds.
            </p>

            <!-- Stack Section Heading -->
            <h2 class="main-title" style="font-size: 1.8rem; margin-top: 40px; margin-bottom: 30px;">
                Our Technology Stack &amp; Capabilities
            </h2>

            <!-- Service Row: Frontend -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 500 500"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path fill-rule="evenodd"
                                    d="m339.839 242.752 24.633 42.64h-49.265zm-36.298 56.117h72.596c5.039 0 8.425-5.617 5.776-10.08l-36.241-62.856c-2.517-4.4-9.087-4.502-11.665 0l-36.298 62.856c-2.62 4.514.795 10.08 5.832 10.08zm19.14-159.744a24.191 24.191 0 0 1 34.316 0c9.457 9.457 9.457 24.803 0 34.259-9.457 9.457-24.859 9.457-34.316 0s-9.457-24.803 0-34.259zm17.158 54.814c9.627 0 19.31-3.681 26.671-11.042 14.666-14.666 14.666-38.619 0-53.286-14.723-14.723-38.619-14.723-53.342 0-14.666 14.666-14.666 38.62 0 53.286 7.361 7.362 16.988 11.042 26.671 11.042zm-81.26-13.873h-47.566v-47.623h47.566zm6.739-61.044h-61.044a6.718 6.718 0 0 0-6.738 6.738v60.987a6.718 6.718 0 0 0 6.738 6.738h61.044c3.681 0 6.738-3.001 6.738-6.738V125.76c0-3.737-3.058-6.738-6.738-6.738zM33.26 135.84c0 3.681 3.001 6.682 6.739 6.682 3.681 0 6.682-3.001 6.682-6.682V44.444h306.975a6.719 6.719 0 0 0 6.739-6.738 6.718 6.718 0 0 0-6.739-6.739H39.999a6.718 6.718 0 0 0-6.739 6.739zm438.519-44.678c0-3.738-3.058-6.739-6.738-6.739a6.718 6.718 0 0 0-6.739 6.739V398.08h-141.34c-3.681 0-6.682 3.058-6.682 6.739 0 3.737 3.001 6.739 6.682 6.739h148.079c3.681 0 6.738-3.001 6.738-6.739zM258.353 312.516c12.175 0 22.028 10.533 22.028 23.444v18.007h112.008c13.874 0 25.199-11.325 25.199-25.199v-218.07c0-13.874-11.325-25.199-25.199-25.199h-284.55c-13.874 0-25.199 11.325-25.199 25.199v55.098h64.045c11.892 0 21.575 9.683 21.575 21.575v10.986c11.325.963 20.216 11.099 20.216 23.387v63.139c12.483-5.577 26.261 1.842 29.786 15.176 12.257-6.249 26.954.88 30.635 14.723a20.776 20.776 0 0 1 9.456-2.266zm8.097 59.968c-2.775 62.629-20.273 83.638-69.425 83.072-50.625-.51-53.852-28.143-58.722-69.934-.51-4.36-1.019-8.89-1.585-13.421 0-.113-.057-.17-.057-.283-3.398-19.989-13.194-33.92-29.899-42.584-21.21-11.02-19.182-24.916-5.21-24.916 3.567 0 7.758.963 12.288 3.171l33.863 18.8c4.55 2.493 10.023-.885 10.023-5.889l.113-98.757c0-5.436 3.964-10.023 8.607-10.023 4.7 0 8.607 4.587 8.607 10.023v84.77c0 3.681 3.001 6.682 6.738 6.682 3.681 0 6.682-3.001 6.682-6.682 0-5.436 3.964-10.023 8.607-10.023 4.7 0 8.607 4.587 8.607 10.023v14.723a6.718 6.718 0 0 0 6.739 6.738c3.681 0 6.682-3.001 6.682-6.738 0-5.436 3.964-10.023 8.607-10.023 4.7 0 8.607 4.587 8.607 10.023v14.723a6.718 6.718 0 0 0 6.738 6.738c3.681 0 6.682-3.001 6.682-6.738 0-5.436 3.964-10.023 8.607-10.023s8.607 4.587 8.607 10.023c.004 11.067.179 21.12-.506 36.525zM49.795 408.669c-4.473 0-8.154-3.681-8.154-8.211V187.371c0-4.474 3.681-8.154 8.154-8.154h96.889c4.474 0 8.154 3.681 8.154 8.154v14.44c-6.229 4.19-10.419 11.552-10.419 19.933l-.17 87.375-24.01-13.364c-.113-.057-.17-.057-.283-.113-19.027-9.4-34.939-3.228-40.318 7.362-5.493 10.816-1.133 26.784 20.895 38.223 12.911 6.738 20.159 17.158 22.877 32.844.566 4.417 1.076 8.834 1.585 13.081.793 7.305 1.642 14.553 2.775 21.518H49.795zm342.593-41.225c21.292 0 38.62-17.384 38.62-38.676v-218.07c0-21.292-17.328-38.62-38.62-38.62h-284.55c-21.292 0-38.62 17.328-38.62 38.62v55.098H49.795c-11.892 0-21.575 9.683-21.575 21.575v213.087c0 11.948 9.683 21.632 21.575 21.632h80.75c7.119 27.535 23.02 46.944 68.009 46.944 66.797 0 79.754-42.317 81.543-101.589h112.291z"
                                    clip-rule="evenodd" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        💻 Frontend<br />Development
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        Your users expect a smooth, engaging experience no matter what device they are using.
                        Our frontend team brings your vision to life using intuitive designs and highly interactive
                        interfaces that keep your audience engaged.
                    </p>
                    <ul class="service-desc" style="padding-left: 18px; margin-top: 8px;">
                        <li><strong>The Foundation:</strong> JavaScript and TypeScript</li>
                        <li><strong>Our Go-To Frameworks:</strong> React.js, Vue.js, Angular, Next.js, and Nuxt.js</li>
                    </ul>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Backend -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="M82.13 171.989c15.018 0 27.236-12.218 27.236-27.236s-12.218-27.236-27.236-27.236-27.236 12.218-27.236 27.236 12.218 27.236 27.236 27.236zm0-38.473c6.196 0 11.236 5.041 11.236 11.236s-5.041 11.236-11.236 11.236-11.236-5.041-11.236-11.236 5.04-11.236 11.236-11.236zm0 135.732c15.018 0 27.236-12.218 27.236-27.236s-12.218-27.236-27.236-27.236-27.236 12.218-27.236 27.236 12.218 27.236 27.236 27.236zm0-38.473c6.196 0 11.236 5.041 11.236 11.236s-5.041 11.236-11.236 11.236-11.236-5.041-11.236-11.236 5.04-11.236 11.236-11.236zm0 81.259c-15.018 0-27.236 12.219-27.236 27.237s12.218 27.236 27.236 27.236 27.236-12.218 27.236-27.236-12.218-27.237-27.236-27.237zm0 38.474c-6.196 0-11.236-5.041-11.236-11.236 0-6.196 5.041-11.237 11.236-11.237s11.236 5.041 11.236 11.237c0 6.195-5.04 11.236-11.236 11.236zm397.009-24.168-19.814-7.627a129.61 129.61 0 0 0-12.543-30.257l8.624-19.416a7.999 7.999 0 0 0-1.654-8.904l-27.342-27.342a8.003 8.003 0 0 0-8.904-1.655l-19.424 8.627a129.67 129.67 0 0 0-30.248-12.541l-7.629-19.82a7.998 7.998 0 0 0-7.466-5.126h-11.333V63.371c0-16.664-17.001-30.882-49.167-41.12C263.364 13.062 225.126 8 184.57 8s-78.793 5.062-107.668 14.251c-32.165 10.237-49.167 24.457-49.167 41.12v288.813c0 16.663 17.001 30.883 49.167 41.12 28.875 9.189 67.112 14.251 107.668 14.251 10.022 0 19.993-.331 29.75-.949a129.862 129.862 0 0 0 5.709 11.217l-8.624 19.416a8 8 0 0 0 1.654 8.904l27.343 27.343a8.001 8.001 0 0 0 8.904 1.654l19.424-8.627a129.652 129.652 0 0 0 30.247 12.54l7.629 19.82a8 8 0 0 0 7.466 5.126h38.667a8 8 0 0 0 7.466-5.126l7.627-19.814a129.567 129.567 0 0 0 30.257-12.543l19.415 8.624a7.996 7.996 0 0 0 8.904-1.654l27.342-27.343a8.001 8.001 0 0 0 1.655-8.904l-8.626-19.424a129.634 129.634 0 0 0 12.54-30.247l19.82-7.629a7.998 7.998 0 0 0 5.126-7.466v-38.668a7.997 7.997 0 0 0-5.126-7.465z"
                                    fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        ⚙️ Powering the<br />Backend
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        A beautiful interface needs a strong engine to keep it running safely and smoothly.
                        We design secure, custom-built server architectures tailored specifically to your
                        project's unique demands.
                    </p>
                    <ul class="service-desc" style="padding-left: 18px; margin-top: 8px;">
                        <li><strong>Languages We Speak:</strong> Python, PHP, Java, C#, and JavaScript/TypeScript (via Node.js)</li>
                        <li><strong>Frameworks &amp; CMS:</strong>
                            <ul style="padding-left: 16px; margin-top: 4px;">
                                <li><strong>PHP:</strong> Laravel, CodeIgniter, Drupal, and WordPress</li>
                                <li><strong>Python:</strong> Django, Flask, and FastAPI</li>
                                <li><strong>Java:</strong> Spring Boot</li>
                                <li><strong>C#:</strong> ASP.NET</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Databases -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 66 66"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="M60 51.8H6c-2.8 0-5-2.2-5-5V15.9c0-2.8 2.2-5 5-5h.4c.6 0 1 .4 1 1s-.4 1-1 1H6c-1.7 0-3 1.3-3 3v30.9c0 1.7 1.3 3 3 3h54c1.7 0 3-1.3 3-3V15.9c0-1.7-1.3-3-3-3H29.2c-.6 0-1-.4-1-1s.4-1 1-1H60c2.8 0 5 2.2 5 5v30.9c0 2.8-2.2 5-5 5z"
                                    fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                                <path
                                    d="M64 45.7H2c-.6 0-1-.4-1-1s.4-1 1-1h62c.6 0 1 .4 1 1s-.4 1-1 1zM39.9 58.3H26.1c-.6 0-1-.4-1-1v-6.5c0-.6.4-1 1-1h13.8c.6 0 1 .4 1 1v6.5c0 .6-.4 1-1 1zm-12.8-2h11.8v-4.5H27.1z"
                                    fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                                <path
                                    d="M44.2 64.9H21.8c-1.4 0-2.5-1.1-2.5-2.5v-3.6c0-1.4 1.1-2.5 2.5-2.5h22.4c1.4 0 2.5 1.1 2.5 2.5v3.6c0 1.4-1.1 2.5-2.5 2.5zm-22.4-6.6c-.2 0-.5.3-.5.5v3.6c0 .2.1.5.5.5h22.4c.2 0 .5-.1.5-.5v-3.6c0-.2-.1-.5-.5-.5zM34.5 48.8h-3c-.6 0-1-.4-1-1s.4-1 1-1h3c.6 0 1 .4 1 1s-.4 1-1 1z"
                                    fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        🗄️ Managing Your<br />Databases
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        Your business relies on its data, which means it needs to be organized, protected, and
                        instantly accessible. We design and set up database structures optimized for
                        lightning-fast retrieval and built to grow right alongside your company.
                    </p>
                    <ul class="service-desc" style="padding-left: 18px; margin-top: 8px;">
                        <li><strong>Relational (SQL):</strong> PostgreSQL, MySQL, and SQL Server</li>
                        <li><strong>Flexible (NoSQL):</strong> DynamoDB and MongoDB</li>
                    </ul>
                </div>
            </div>
            <!-- Service Row end -->

        </div>
    </section>
@endsection
