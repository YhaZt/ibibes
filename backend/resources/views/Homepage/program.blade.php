@include('../include/.top')
<style>
    .custom-btn-group {
        display: flex;
        align-items: flex-start;
    }

    .link-group a {
        display: block;
        text-align: left;
        color: var(--primary-color);
        text-decoration: none;
        margin-bottom: 5px;
    }

    .link-group a:hover {
        text-decoration: underline;
    }

    .btn.custom-btn {
        white-space: nowrap;
    }
</style>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #2e8b57 !important; ">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" class="navbar-brand-image" alt="Tiya Golf Club">
                <span class="navbar-brand-text">
                    <span>MinSU i-BIBES</span>
                    <small>ᜡ-ᜪᜲᜪᜲᜰ᜴</small>
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll " href="/#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/program" target="_blank">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/#events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/#contacts">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/news" target="_blank">News/ Announcements</a>
                    </li>
                </ul>
                <div class="d-none d-lg-block ms-lg-3">
                    <a class="btn custom-btn custom-border-btn" href="#offcanvasExample">Member Login</a>
                </div>
            </div>
        </div>
    </nav>


    @include('../Homepage/.login')


    <section class="about-section section-padding mt-5" id="">
        <div class="container">
            <div class="container" data-aos="fade-up">
                <header class="section-header text-center">
                    {{-- <h2>Organizational Chart</h2> --}}
                </header>
                <div class="mb-5 text-center">
                    <img src="{{ asset('assets/img/banner.png') }}" width="850" height="600"
                        class="img-fluid block mx-auto" alt="" />
                </div>
            </div>
            <div class="container" data-aos="fade-up">
                <header class="section-header text-center">
                    {{-- <h2>Ecosystem Map</h2> --}}
                </header>
                <div class="mb-5 text-center">
                    <img src="{{ asset('assets/img/incu.png') }}" width="850" height="600"
                        class="img-fluid block mx-auto" alt="" />
                </div>
            </div>

            <div class="container" data-aos="fade-up">
                <header class="section-header text-center">
                    {{-- <h2>Ecosystem Map</h2> --}}
                </header>
                <div class="mb-5 text-center">
                    <img src="{{ asset('assets/img/Framework.png') }}" width="850" height="600"
                        class="img-fluid block mx-auto" alt="" />
                </div>
            </div>
        </div>
    </section>


    </main>
    @include('../include/.footer')
    @include('../include/.end')
