@extends('layout')
@section('title', $seo->title ?? 'Custom Software Development')
@section('content')
    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area bg-cover shadow theme-hard text-center text-light"
        style="background-image: url(assets/img/banner/8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Custom Software Development</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li>Custom Software Development</li>
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
                Custom Software<br />
                Development
            </h1>

            <!-- Description -->
            <p class="main-desc mb-5">
                When you are scaling a business, off-the-shelf software eventually becomes a bottleneck. You find
                yourself altering your operations to fit the software, rather than the software working for you.
            </p>

            <p class="main-desc mb-5">
                At <span>Stackveda Technologies</span>, we build custom digital solutions designed to fit your
                exact needs and grow right alongside your enterprise. We don't just write code; we architect
                resilient systems that solve complex challenges. Whether you need a secure internal portal, a
                high-traffic mobile application, or a complete digital transformation, our engineering team
                brings the technical firepower to make it happen.
            </p>

            <!-- How We Build Section Heading -->
            <h2 class="main-title" style="font-size: 1.8rem; margin-top: 40px; margin-bottom: 30px;">
                How We Build Your Digital Products
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
                                    d="m339.839 242.752 24.633 42.64h-49.265zm-36.298 56.117h72.596c5.039 0 8.425-5.617 5.776-10.08l-36.241-62.856c-2.517-4.4-9.087-4.502-11.665 0l-36.298 62.856c-2.62 4.514.795 10.08 5.832 10.08zm19.14-159.744a24.191 24.191 0 0 1 34.316 0c9.457 9.457 9.457 24.803 0 34.259-9.457 9.457-24.859 9.457-34.316 0s-9.457-24.803 0-34.259zm17.158 54.814c9.627 0 19.31-3.681 26.671-11.042 14.666-14.666 14.666-38.619 0-53.286-14.723-14.723-38.619-14.723-53.342 0-14.666 14.666-14.666 38.62 0 53.286 7.361 7.362 16.988 11.042 26.671 11.042zm-81.26-13.873h-47.566v-47.623h47.566zm6.739-61.044h-61.044a6.718 6.718 0 0 0-6.738 6.738v60.987a6.718 6.718 0 0 0 6.738 6.738h61.044c3.681 0 6.738-3.001 6.738-6.738V125.76c0-3.737-3.058-6.738-6.738-6.738zM33.26 135.84c0 3.681 3.001 6.682 6.739 6.682 3.681 0 6.682-3.001 6.682-6.682V44.444h306.975a6.719 6.719 0 0 0 6.739-6.738 6.718 6.718 0 0 0-6.739-6.739H39.999a6.718 6.718 0 0 0-6.739 6.739zm438.519-44.678c0-3.738-3.058-6.739-6.738-6.739a6.718 6.718 0 0 0-6.739 6.739V398.08h-141.34c-3.681 0-6.682 3.058-6.682 6.739 0 3.737 3.001 6.739 6.682 6.739h148.079c3.681 0 6.738-3.001 6.738-6.739z"
                                    clip-rule="evenodd" fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        User Experiences That Convert<br />(Frontend)
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        A powerful system is only as good as its user experience. We craft fast, highly responsive
                        web interfaces using JavaScript and TypeScript, powered by industry-standard frameworks like
                        React.js, Vue.js, Angular, Next.js, and Nuxt.js.
                    </p>
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
                        Secure, High-Performance<br />Engines (Backend)
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        The core of your application needs to be bulletproof. We develop robust server-side logic
                        using a versatile mix of languages — including Python, Java, C#, PHP, and Node.js. We
                        leverage trusted frameworks like Django, Spring Boot, Laravel, and ASP.NET to ensure your
                        systems can handle heavy enterprise lifting without breaking a sweat.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Data Management -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M448 96c0-35.3-86-64-192-64S64 60.7 64 96v64c0 35.3 86 64 192 64s192-28.7 192-64V96zm0 128c0 35.3-86 64-192 64S64 259.3 64 224v64c0 35.3 86 64 192 64s192-28.7 192-64v-64zm0 128c0 35.3-86 64-192 64S64 387.3 64 352v64c0 35.3 86 64 192 64s192-28.7 192-64v-64z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Intelligent Data<br />Management
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        Your business data is your most critical asset. We design highly secure database
                        architectures, blending the strict reliability of relational databases (MySQL, PostgreSQL,
                        SQL Server) with the massive scalability and flexibility of NoSQL solutions
                        (MongoDB, DynamoDB).
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Mobile Apps -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 64 64"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="M43.335 16.33a16.865 16.865 0 0 0-13.274-4.223A16.99 16.99 0 0 0 24 43.982V54a2.002 2.002 0 0 0 2 2h2v2a2.002 2.002 0 0 0 2 2h4a2.002 2.002 0 0 0 2-2v-2h2a2.002 2.002 0 0 0 2-2V43.983a16.984 16.984 0 0 0 3.335-27.653ZM38 48v2H26v-2Zm-3.998 10H30v-2h4ZM35 54h-9v-2h12v2Zm3.562-11.528a.999.999 0 0 0-.562.899V46h-5v-4.586l2.707-2.707a1 1 0 0 0-1.414-1.414L32 39.586l-2.293-2.293a1 1 0 0 0-1.414 1.414L31 41.414V46h-5v-2.63a.999.999 0 0 0-.561-.898 14.99 14.99 0 0 1 4.842-28.376 15.725 15.725 0 0 1 1.74-.097A14.828 14.828 0 0 1 42 17.82a14.985 14.985 0 0 1-3.44 24.652ZM32 10a1 1 0 0 0 1-1V5a1 1 0 0 0-2 0v4a1 1 0 0 0 1 1ZM17.15 15.565a1 1 0 1 0 1.415-1.414l-2.829-2.829a1 1 0 1 0-1.414 1.414ZM12 28H8a1 1 0 0 0 0 2h4a1 1 0 0 0 0-2Z"
                                    fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                                <path
                                    d="m17.15 42.435-2.828 2.829a1 1 0 1 0 1.414 1.414l2.829-2.829a1 1 0 0 0-1.414-1.414ZM48.264 11.322l-2.829 2.829a1 1 0 1 0 1.414 1.414l2.829-2.829a1 1 0 1 0-1.414-1.414ZM46.85 42.435a1 1 0 0 0-1.415 1.414l2.829 2.829a1 1 0 0 0 1.414-1.414ZM56 28h-4a1 1 0 0 0 0 2h4a1 1 0 0 0 0-2Z"
                                    fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Native &amp; Cross-Platform<br />Mobile Apps
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        We help you reach your customers wherever they are. From high-performance native apps
                        built in Swift and Java/Kotlin to agile, cross-platform solutions using Flutter and
                        React Native, we deliver seamless mobile experiences.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Cloud-Native -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="M382.56 233.376C379.968 141.632 305.28 68 214 68c-84 0-154.496 61.344-166.24 144.416C20.352 219.392 0 244.8 0 275c0 36.544 29.456 66 66 66h100v-42.24l-38.848 38.848a14.994 14.994 0 0 1-21.216 0 14.994 14.994 0 0 1 0-21.216l64.576-64.576a14.994 14.994 0 0 1 21.216 0l64.576 64.576a14.994 14.994 0 0 1 0 21.216 14.966 14.966 0 0 1-10.608 4.4 14.966 14.966 0 0 1-10.608-4.4L196 298.752V341h162c46.144 0 84-37.856 84-84 0-12.416-2.848-24.128-7.616-34.752l-51.824 51.824z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Cloud-Native<br />Architecture
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        We design with the cloud in mind from day one. By deploying on top-tier platforms like
                        AWS, Google Cloud (GCP), and Microsoft Azure, we ensure your software is globally
                        accessible and highly resilient. We also utilize serverless technologies like AWS Lambda
                        and Google Cloud Functions to optimize your operational costs and eliminate server
                        management headaches.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: DevOps & SRE -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="M487.083 104.703 405.986 23.606C394.416 12.036 378.948 5.6 362.785 5.6H149.215c-16.163 0-31.63 6.436-43.201 18.006L24.917 104.703C13.347 116.273 6.911 131.74 6.911 147.904V470.4c0 19.882 16.118 36 36 36h426.178c19.882 0 36-16.118 36-36V147.904c0-16.163-6.436-31.631-18.006-43.201zM256 448.6c-79.257 0-143.6-64.343-143.6-143.6S176.743 161.4 256 161.4 399.6 225.743 399.6 305 335.257 448.6 256 448.6zM176 63.6h160v72H176v-72zm153.6 241.4c0 40.579-33.021 73.6-73.6 73.6s-73.6-33.021-73.6-73.6S215.421 231.4 256 231.4s73.6 33.021 73.6 73.6z"
                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Automated for Speed &amp;<br />Reliability (DevOps &amp; SRE)
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        Time-to-market matters. We streamline deployment with advanced CI/CD pipelines
                        (GitHub Actions, Jenkins, GitLab CI) and secure version control. By utilizing Docker
                        and Kubernetes for containerization, Terraform for infrastructure as code, and tools
                        like Datadog and Grafana for 24/7 monitoring, we ensure your software stays up,
                        running, and completely reliable.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

        </div>
    </section>

@endsection
