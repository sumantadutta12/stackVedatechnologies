@extends('layout')
@section('title', $seo->title ?? 'Cloud Services - AWS, AZURE, GCP')
@section('content')
    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area bg-cover shadow theme-hard text-center text-light"
        style="background-image: url(assets/img/banner/8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Cloud Services - AWS, AZURE, GCP</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li>Cloud Services - AWS, AZURE, GCP</li>
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
                Cloud Services: Scalable, Secure,<br />
                and Built for Your Growth
            </h1>

            <!-- Description -->
            <p class="main-desc mb-3">
                Moving to the cloud — or trying to optimize the complicated setup you already have — shouldn't
                feel like a headache. At <span>Stackveda Technologies</span>, we take the heavy lifting out of
                cloud infrastructure so you can focus on what actually matters: running your business.
            </p>

            <p class="main-desc mb-5">
                Whether you need to safely migrate legacy systems, build a highly scalable web application from
                scratch, or simply stop overpaying for server space, we design cloud environments and database
                architectures that are fast, secure, and perfectly tailored to your goals.
            </p>

            <!-- Multi-Cloud Section -->
            <h2 class="main-title" style="font-size: 1.8rem; margin-top: 40px; margin-bottom: 20px;">
                Multi-Cloud Expertise You Can Trust
            </h2>

            <p class="main-desc mb-4">
                We don't force a one-size-fits-all solution. Instead, we architect your infrastructure on the
                platform that makes the most sense for your technical needs and your budget. Our team specializes
                in the industry's top three cloud ecosystems:
            </p>

            <!-- Service Row: AWS -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 48 48"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M13.527 21.529c0 .458.05.827.136 1.097.098.27.221.563.393.879.061.099.086.197.086.283 0 .123-.074.246-.234.37l-.777.517a.594.594 0 0 1-.32.11c-.123 0-.246-.061-.37-.172a3.826 3.826 0 0 1-.443-.578 9.514 9.514 0 0 1-.382-.727c-.96 1.133-2.166 1.7-3.618 1.7-1.035 0-1.859-.295-2.462-.886-.604-.59-.911-1.378-.911-2.363 0-1.047.37-1.896 1.121-2.535.75-.64 1.748-.96 3.01-.96.418 0 .848.037 1.303.098.455.062.922.16 1.414.271v-.899c0-.936-.197-1.589-.578-1.97-.394-.381-1.06-.566-2.007-.566-.431 0-.874.05-1.329.16a9.857 9.857 0 0 0-1.329.419 3.53 3.53 0 0 1-.431.16.746.746 0 0 1-.197.037c-.172 0-.258-.123-.258-.382v-.603c0-.197.025-.344.086-.431.062-.086.172-.172.332-.258.431-.221.948-.406 1.552-.554A7.482 7.482 0 0 1 9.386 14c1.453 0 2.511.33 3.188.99.664.66.999 1.663.999 3.01v3.968h-.046v-.44zm-4.998 1.873c.406 0 .824-.074 1.267-.221.443-.148.838-.418 1.17-.788.196-.234.344-.492.418-.788.074-.295.123-.652.123-1.072v-.516a10.55 10.55 0 0 0-1.13-.209 9.261 9.261 0 0 0-1.157-.074c-.824 0-1.427.16-1.834.493-.406.332-.603.8-.603 1.415 0 .578.148 1.009.456 1.304.295.307.726.456 1.29.456zm9.887 1.329c-.221 0-.369-.037-.467-.123-.098-.074-.185-.246-.258-.48l-2.89-9.506c-.074-.246-.111-.406-.111-.492 0-.197.098-.307.295-.307h1.207c.233 0 .393.037.48.123.098.074.172.246.245.48l2.068 8.151 1.921-8.151c.062-.246.136-.406.234-.48a.858.858 0 0 1 .505-.123h.985c.234 0 .394.037.505.123.098.074.185.246.234.48l1.945 8.249 2.129-8.249c.074-.246.16-.406.246-.48.098-.074.258-.123.48-.123h1.145c.197 0 .308.098.308.307 0 .062-.013.123-.025.197a1.77 1.77 0 0 1-.086.308l-2.964 9.506c-.074.246-.16.406-.258.48-.099.074-.258.123-.468.123h-1.059c-.233 0-.393-.037-.504-.123-.099-.086-.185-.246-.234-.493l-1.909-7.94-1.896 7.928c-.062.246-.136.406-.234.492-.098.086-.27.123-.504.123h-1.06v.001zm15.783.333a7.7 7.7 0 0 1-1.797-.209c-.578-.135-1.022-.282-1.316-.455-.185-.099-.308-.21-.344-.308a.774.774 0 0 1-.062-.295v-.627c0-.258.099-.382.283-.382.074 0 .148.012.221.037.074.025.185.074.307.123.418.185.874.332 1.353.431.492.099.972.148 1.465.148.775 0 1.378-.136 1.797-.406.418-.271.64-.664.64-1.17 0-.344-.111-.628-.332-.86-.221-.234-.64-.443-1.243-.64l-1.785-.554c-.899-.283-1.565-.702-1.97-1.255a3.003 3.003 0 0 1-.616-1.822c0-.528.111-1.985.332-1.403.222-.418.517-.788.886-1.096.369-.32.8-.566 1.304-.739a5.2 5.2 0 0 1 1.638-.246c.283 0 .578.012.861.062.295.049.566.11.837.184.258.074.504.16.726.258.221.099.394.197.505.295.16.111.27.221.332.344.062.11.086.258.086.443v.578c0 .258-.099.394-.283.394-.099 0-.258-.05-.468-.148-.628-.283-1.329-.431-2.105-.431-.701 0-1.255.111-1.637.344-.381.234-.578.591-.578 1.096 0 .344.123.64.369.874.246.234.701.468 1.353.677l1.748.554c.886.283 1.527.677 1.92 1.182.394.505.579 1.084.579 1.724 0 .541-.111 1.022-.32 1.452-.221.431-.516.8-.898 1.109-.382.32-.837.554-1.366.714a5.93 5.93 0 0 1-1.723.234l.012.037zm-27.3 3.743c-4.445 3.28-10.898 5.024-16.454 5.024-7.782 0-14.791-2.878-20.099-7.658-.418-.381-.049-.899.455-.603 5.728 3.326 12.799 5.333 20.112 5.333 4.937 0 10.369-1.022 15.368-3.14.751-.333 1.38.492.618 1.044zm1.76-2.007c-.566-.726-3.753-.344-5.185-.172-.431.05-.505-.332-.111-.616 2.548-1.785 6.727-1.267 7.208-.677.48.604-.123 4.778-2.511 6.772-.369.307-.714.148-.554-.258.541-1.329 1.723-4.322 1.153-5.049z" fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Amazon Web<br />Services (AWS)
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        As a registered AWS Partner, we bring elite, proven expertise to your infrastructure.
                        Guided by our in-house AWS Certified Cloud Practitioners, we know exactly how to architect,
                        deploy, and manage highly resilient AWS environments — from secure data storage to complex,
                        serverless architectures.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Azure -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 48 48"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M22.379 5.274 11.148 27.449l10.951 12.274H7.333L4 42.726h19.245l3.277-3.003-9.817-11.003 9.671-18.57-3.997-4.876zm3.348 3.452-6.96 19.674 11.62 13.024-24.054 1.302h37.333L22.379 5.274l3.348 3.452z" fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Microsoft<br />Azure
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        If your business runs on the Microsoft ecosystem, Azure is an absolute powerhouse.
                        We help you leverage Azure's enterprise-grade security and robust hybrid cloud
                        capabilities to keep your operations running seamlessly.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: GCP -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 48 48"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z" fill="#ffffff" opacity="1"></path>
                                <path d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z" fill="#ffffff" opacity="1"></path>
                                <path d="M10.53 28.59c-.48-1.37-.76-2.83-.76-4.59s.27-3.22.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z" fill="#ffffff" opacity="1"></path>
                                <path d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.18 1.48-4.91 2.31-8.16 2.31-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z" fill="#ffffff" opacity="1"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Google Cloud<br />Platform (GCP)
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        Need high-performance data analytics or machine learning capabilities? We harness GCP's
                        lightning-fast network and cutting-edge tools to build modern, data-heavy applications
                        that scale effortlessly.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Database Section -->
            <h2 class="main-title" style="font-size: 1.8rem; margin-top: 50px; margin-bottom: 20px;">
                Powering Your Apps with the Right Database
            </h2>

            <p class="main-desc mb-4">
                Behind every great, fast-loading application is a rock-solid database. We don't force your data
                into a rigid box; we help you choose, implement, and manage the exact right database architecture
                for your specific project:
            </p>

            <!-- Service Row: PostgreSQL & MySQL -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M448 96c0-35.3-86-64-192-64S64 60.7 64 96v64c0 35.3 86 64 192 64s192-28.7 192-64V96zm0 128c0 35.3-86 64-192 64S64 259.3 64 224v64c0 35.3 86 64 192 64s192-28.7 192-64v-64zm0 128c0 35.3-86 64-192 64S64 387.3 64 352v64c0 35.3 86 64 192 64s192-28.7 192-64v-64z" fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Relational Databases<br />(PostgreSQL &amp; MySQL)
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        Perfect for complex, highly structured data where accuracy and clear relationships are
                        everything. We set up robust SQL databases that keep your critical business operations
                        running without a hitch.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: MongoDB -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M256 14.285c-82.074 41.677-136.889 126.08-136.889 220.03 0 63.404 24.172 121.168 63.744 164.74L256 430.716l73.145-31.661c39.572-43.572 63.744-101.336 63.744-164.74C392.889 140.365 338.074 55.962 256 14.285zM277.09 411.98l-21.09 8.704-21.09-8.704v-67.81l21.09 17.552 21.09-17.552v67.81zm-21.09-55.59-21.09-17.552V172.16l21.09 105.36 21.09-105.36v166.678z" fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        NoSQL Databases<br />(MongoDB)
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        Need massive flexibility and the ability to scale quickly? We build dynamic,
                        document-based databases using MongoDB, allowing your applications to handle huge
                        amounts of unstructured data without slowing down the user experience.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: DynamoDB -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M256 64C149.96 64 64 106.29 64 160v192c0 53.71 85.96 96 192 96s192-42.29 192-96V160c0-53.71-85.96-96-192-96zm160 256c0 29.76-67.97 64-160 64S96 349.76 96 320v-38.4c34.27 22.4 95.01 38.4 160 38.4s125.73-16 160-38.4V320zm0-96c0 29.76-67.97 64-160 64S96 253.76 96 224v-38.4c34.27 22.4 95.01 38.4 160 38.4s125.73-16 160-38.4V224zm-160-32c-92.03 0-160-34.24-160-64s67.97-64 160-64 160 34.24 160 64-67.97 64-160 64z" fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Cloud-Native Power<br />(AWS DynamoDB)
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        Leveraging our deep AWS expertise, we utilize fully managed, serverless databases like
                        DynamoDB to give your most demanding applications lightning-fast, single-digit millisecond
                        performance.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- How We Help Section -->
            <h2 class="main-title" style="font-size: 1.8rem; margin-top: 50px; margin-bottom: 30px;">
                How We Help You Win in the Cloud
            </h2>

            <!-- Service Row: Migration -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M382.56 233.376C379.968 141.632 305.28 68 214 68c-84 0-154.496 61.344-166.24 144.416C20.352 219.392 0 244.8 0 275c0 36.544 29.456 66 66 66h100v-42.24l-38.848 38.848a14.994 14.994 0 0 1-21.216 0 14.994 14.994 0 0 1 0-21.216l64.576-64.576a14.994 14.994 0 0 1 21.216 0l64.576 64.576a14.994 14.994 0 0 1 0 21.216 14.966 14.966 0 0 1-10.608 4.4 14.966 14.966 0 0 1-10.608-4.4L196 298.752V341h162c46.144 0 84-37.856 84-84 0-12.416-2.848-24.128-7.616-34.752l-51.824 51.824z" fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Zero-Stress<br />Migration
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        We safely move your databases, applications, and workloads to the cloud with zero data
                        loss and minimal downtime. You won't even notice we're under the hood.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: DevOps -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M487.083 104.703 405.986 23.606C394.416 12.036 378.948 5.6 362.785 5.6H149.215c-16.163 0-31.63 6.436-43.201 18.006L24.917 104.703C13.347 116.273 6.911 131.74 6.911 147.904V470.4c0 19.882 16.118 36 36 36h426.178c19.882 0 36-16.118 36-36V147.904c0-16.163-6.436-31.631-18.006-43.201zM256 448.6c-79.257 0-143.6-64.343-143.6-143.6S176.743 161.4 256 161.4 399.6 225.743 399.6 305 335.257 448.6 256 448.6zM176 63.6h160v72H176v-72zm153.6 241.4c0 40.579-33.021 73.6-73.6 73.6s-73.6-33.021-73.6-73.6S215.421 231.4 256 231.4s73.6 33.021 73.6 73.6z" fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Modern DevOps<br />&amp; Automation
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        We set up automated pipelines and containerization so your software updates are faster,
                        safer, and far more reliable.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

            <!-- Service Row: Cost Optimization -->
            <div class="row align-items-center service-row">
                <div class="col-md-2">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path d="M256 0C114.833 0 0 114.833 0 256s114.833 256 256 256 256-114.833 256-256S397.167 0 256 0zm-42.667 362.667H192c-23.531 0-42.667-19.135-42.667-42.667v-21.333c0-11.76 9.573-21.333 21.333-21.333s21.333 9.573 21.333 21.333V320h21.333c11.76 0 21.333-9.573 21.333-21.333v-3.989c0-8.907-5.76-16.917-14.336-19.733l-51.307-17.088C143.563 248.16 128 227.115 128 203.989v-3.989c0-35.285 28.715-64 64-64h21.333v-21.333c0-11.76 9.573-21.333 21.333-21.333s21.333 9.573 21.333 21.333V136h.001c35.285 0 64 28.715 64 64v21.333c0 11.76-9.573 21.333-21.333 21.333S277.333 233.093 277.333 221.333V200H256c-11.76 0-21.333 9.573-21.333 21.333v3.989c0 8.907 5.76 16.917 14.336 19.712l51.307 17.109C326.437 271.851 341.333 292.885 341.333 316v3.989c.001 35.285-28.714 63.678-64 63.678z" fill="#ffffff" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="service-title">
                        Smart Cost<br />Optimization
                    </h3>
                </div>
                <div class="col-md-6">
                    <p class="service-desc">
                        The cloud shouldn't drain your budget. We audit your current setup, eliminate bloated
                        resources, and ensure you are only paying for exactly what you use.
                    </p>
                </div>
            </div>
            <!-- Service Row end -->

        </div>
    </section>

@endsection
