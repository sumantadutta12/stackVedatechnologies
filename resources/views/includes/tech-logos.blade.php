<section class="tech-wrapper">

    <!-- TOP HEADING -->
    <div class="container tech-header">
        <h1> Technologies We Work With</h1>
        <p>
            Transform your business with our proven and innovative corporate and consumer solutions.
            We go beyond the technology to create a strategic roadmap to ensure success of your business.
            Our services include:
        </p>
    </div>

    <div class="tech-main">
        <div class="row g-0">

            <!-- LEFT COLOR BAR -->
            <div class="col-lg-1 tech-gradient-bar"></div>

            <!-- LEFT TABS -->
            <div class="col-lg-3 tech-tab-panel">
                <ul class="nav flex-column nav-pills tech-tabs">

                    <li><button class="nav-link active" data-bs-toggle="pill" data-bs-target="#tab1">Next-Gen Technologies</button></li>
                    <li><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab2">Frontend Technologies</button></li>
                    <li><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab3">Backend Technologies</button></li>
                    <li><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab4">Mobile Technologies</button></li>
                    <li><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab5">UI Frameworks</button></li>
                    <li><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab6">Hosting Technologies</button></li>
                    <li><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab6">Cloud Solutions</button></li>
                    <li><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab7">Online Business Solutions</button></li>

                </ul>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="col-lg-8 tech-content">
                <div class="tab-content">

                    <!-- TAB 1 -->
                    <div class="tab-pane fade show active" id="tab1">
                        <h2>Emerging Tech</h2>
                        <p>
                            We are a dedicated team of software development experts driven to help you scale your
                            development abilities and deliver projects that surpass your expectations.
                        </p>

                        <div class="row tech-icons">
                            @forelse ($techLogos as $logo)
                                <div class="col-md-4">
                                    <div class="icon-box">
                                        <img src="{{ asset($logo->logo) }}" alt="{{ $logo->logo }}">
                                    </div>
                                </div>
                            @empty
                                <p>No technologies added yet.</p>
                            @endforelse

                        </div>
                    </div>


                    <!-- TAB 2 -->
                    <div class="tab-pane fade" id="tab2">
                        <h2>Frontend Technologies</h2>
                        <p>
                            We are a dedicated team of software development experts driven to help you scale your
                            development abilities and deliver projects that surpass your expectations.
                        </p>

                        <div class="row tech-icons">
                            @forelse ($techLogos as $logo)
                                <div class="col-md-4">
                                    <div class="icon-box">
                                        <img src="{{ asset($logo->logo) }}" alt="{{ $logo->logo }}">
                                    </div>
                                </div>
                            @empty
                                <p>No technologies added yet.</p>
                            @endforelse
                        </div>
                    </div>


                    <!-- TAB 3 -->
                    <div class="tab-pane fade" id="tab3">
                        <h2>Backend Technologies</h2>

                        <div class="row tech-icons">
                            @forelse ($techLogos as $logo)
                                <div class="col-md-4">
                                    <div class="icon-box">
                                        <img src="{{ asset($logo->logo) }}" alt="{{ $logo->logo }}">
                                    </div>
                                </div>
                            @empty
                                <p>No technologies added yet.</p>
                            @endforelse
                        </div>
                    </div>


                    <!-- TAB 4 -->
                    <div class="tab-pane fade" id="tab4">
                        <h2>Mobile Technologies</h2>

                        <div class="row tech-icons">
                            @forelse ($techLogos as $logo)
                                <div class="col-md-4">
                                    <div class="icon-box">
                                        <img src="{{ asset($logo->logo) }}" alt="{{ $logo->logo }}">
                                    </div>
                                </div>
                            @empty
                                <p>No technologies added yet.</p>
                            @endforelse
                        </div>
                    </div>


                    <!-- TAB 5 -->
                    <div class="tab-pane fade" id="tab5">
                        <h2>Frameworks</h2>

                        <div class="row tech-icons">
                            @forelse ($techLogos as $logo)
                                <div class="col-md-4">
                                    <div class="icon-box">
                                        <img src="{{ asset($logo->logo) }}" alt="{{ $logo->logo }}">
                                    </div>
                                </div>
                            @empty
                                <p>No technologies added yet.</p>
                            @endforelse
                        </div>
                    </div>


                    <!-- TAB 6 -->
                    <div class="tab-pane fade" id="tab6">
                        <h2>Cloud Technologies</h2>

                        <div class="row tech-icons">
                            @forelse ($techLogos as $logo)
                                <div class="col-md-4">
                                    <div class="icon-box">
                                        <img src="{{ asset($logo->logo) }}" alt="{{ $logo->logo }}">
                                    </div>
                                </div>
                            @empty
                                <p>No technologies added yet.</p>
                            @endforelse
                        </div>
                    </div>


                    <!-- TAB 7 -->
                    <div class="tab-pane fade" id="tab7">
                        <h2>Online Business Solutions</h2>

                        <div class="row tech-icons">
                            @forelse ($techLogos as $logo)
                                <div class="col-md-4">
                                    <div class="icon-box">
                                        <img src="{{ asset($logo->logo) }}" alt="{{ $logo->logo }}">
                                    </div>
                                </div>
                            @empty
                                <p>No technologies added yet.</p>
                            @endforelse
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</section>
