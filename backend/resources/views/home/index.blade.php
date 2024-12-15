@include('../include/.top')
</head>

<body>
    @include('../include/header')
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-5 d-flex flex-column justify-content-center hero-message text-end">
                    <h1 data-aos="fade-up" class="text-light">Accelerating your growth and success</h1>
                    <h2 data-aos="fade-up" class="text-warning" data-aos-delay="400">
                        Start your journey with i-BIBES, the official technology
                        business incubator of the Mindoro State University.
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="d-flex justify-content-end">
                            <a href="/join"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Join Now</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="home" class="s-page-1">
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Who We Are</h2>
                    <p>An experienced pool of mentors and experts</p>
                </header>
                <div class="row">
                    <div class=" col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">
                            <div data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <h3>
                                        Start your journey with i-BIBES, the official
                                        technology business incubator of the Mindoro State University.
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6">
                        <img src="{{ asset('assets/img/ibibes.jpg') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
            <div class="container pt-4 mt-5" data-aos="fade-up">
                <header class="section-header">
                    <h2>What We Do</h2>
                    <p>An experienced pool of mentors and experts</p>
                </header>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/img/ibibes.jpg') }}" class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">
                            <div data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <h3>
                                        We provide activities that will spark
                                        students' innovative entrepreneurial minds, that is in our banner program,
                                        and provide custom-tailored incubation and mentoring
                                        programs to our MinSUInnovators.
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('../home/program')
    @include('../home/about')
    <div class="content">
        <div class="container">
            <div class="word">
                <span>M</span>
                <span>i</span>
                <span>n</span>
                <span>S</span>
                <span>U</span>
                <span class="spaced">i</span>
                <span>-</span>
                <span>B</span>
                <span>I</span>
                <span>B</span>
                <span>E</span>
                <span>S</span>
                <span class="spaced">T</span>
                <span>E</span>
                <span>A</span>
                <span>M</span>
            </div>

            <div class="slider-92911">
                <div class="owl-carousel slide-one-item">
                    <div class="d-md-flex testimony-29101 align-items-stretch">
                        <div class="image" style="background-image: url('{{ asset('assets/images/person_1.jpg') }}');">
                        </div>
                        <div class="text">
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, at!
                                    Atque totam obcaecati veniam eius vero, similique quibusdam! Sunt sequi, nemo. Quam
                                    consequuntur ipsum suscipit repellat molestiae laboriosam, incidunt!&rdquo;</p>
                                <div class="author">&mdash; Jean Stephen</div>
                            </blockquote>
                        </div>
                    </div>
                    <div class="d-md-flex testimony-29101 align-items-stretch">
                        <div class="image" style="background-image: url('{{ asset('assets/images/person_2.jpg') }}');">
                        </div>
                        <div class="text">
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, at!
                                    Atque totam obcaecati veniam eius vero, similique quibusdam! Sunt sequi, nemo. Quam
                                    consequuntur ipsum suscipit repellat molestiae laboriosam, incidunt!&rdquo;</p>
                                <div class="author">&mdash; Julia Smith</div>
                            </blockquote>
                        </div>
                    </div>
                    <div class="d-md-flex testimony-29101 align-items-stretch">
                        <div class="image" style="background-image: url('{{ asset('assets/images/person_2.jpg') }}');">
                        </div>
                        <div class="text">
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, at!
                                    Atque totam obcaecati veniam eius vero, similique quibusdam! Sunt sequi, nemo. Quam
                                    consequuntur ipsum suscipit repellat molestiae laboriosam, incidunt!&rdquo;</p>
                                <div class="author">&mdash; Julia Smith</div>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="my-5 text-center">
                    <ul class="thumbnail">
                        <li class="active"><a href="#"><img src="{{ asset('assets/images/person_1_sm.jpg') }}"
                                    alt="Image" class="img-fluid"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/person_2_sm.jpg') }}" alt="Image"
                                    class="img-fluid"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/person_3_sm.jpg') }}" alt="Image"
                                    class="img-fluid"></a></li>
                    </ul>
                </div>
            </div>
            <section id="clients" class="clients">
                <div class="container" data-aos="fade-up">
                    <header class="section-header">
                        <h2>Our Partners</h2>
                    </header>
                    <div class="clients-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <a href="https://pcieerd.dost.gov.ph/" target="_blank" data-lightbox="partners"
                                    data-title="Partner 40">
                                    <img src="{{ asset('assets/img/partner/dost p.png') }}"
                                        onerror="this.onerror=null; this.src='resources/images/no-image.png'"
                                        class="img-fluid" alt="Partner 40" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="https://www.minsu.edu.ph/" target="_blank" data-lightbox="partners"
                                    data-title="Partner 41">
                                    <img src="{{ asset('assets/img/partner/minsu.png') }}"
                                        onerror="this.onerror=null; this.src='resources/images/no-image.png'"
                                        class="img-fluid" alt="Partner 41" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="https://region4b.dost.gov.ph/" target="_blank" data-lightbox="partners"
                                    data-title="Partner 42">
                                    <img src="{{ asset('assets/img/partner/dost mi.png') }}"
                                        onerror="this.onerror=null; this.src='resources/images/no-image.png'"
                                        class="img-fluid" alt="Partner 42" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" target="_blank" data-lightbox="partners" data-title="Partner 43">
                                    <img src="{{ asset('assets/img/partner/bago_pilipinas.png') }}"
                                        onerror="this.onerror=null; this.src='resources/images/no-image.png'"
                                        class="img-fluid" alt="Partner 43" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="https://dict.gov.ph/" target="_blank" data-lightbox="partners"
                                    data-title="Partner 44">
                                    <img src="{{ asset('assets/img/partner/dict.png') }}"
                                        onerror="this.onerror=null; this.src='resources/images/no-image.png'"
                                        class="img-fluid" alt="Partner 44" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('../home/contact')
        </div>
    </div>
    @include('../include/.footer')
    @include('../include/.end')
