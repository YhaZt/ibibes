<h2 class="partners-label">Our Ecosystem</h2>
<div class="products">
    {{-- <div class="single-product">
        <a href="https://www.example.com/dict" target="_blank">
            <img src="{{ asset('assets/img/partner/dict.png') }}" alt="Partner Logo">
            <h2>DICT</h2>
        </a>
    </div> --}}
    <div class="single-product">
        <a href="https://region4b.dost.gov.ph/" target="_blank">
            <img src="{{ asset('assets/img/partner/dost mi.png') }}" alt="Partner Logo">
            <h2>DOST MIMAROPA</h2>
        </a>
    </div>
    <div class="single-product">
        <a href="https://pcieerd.dost.gov.ph/" target="_blank">
            <img src="{{ asset('assets/img/partner/dost p.png') }}" alt="Partner Logo">
            <h2>DOST PCIEERD</h2>
        </a>
    </div>
    {{-- <div class="single-product">
        <a href="https://www.example.com/minsu" target="_blank">
            <img src="{{ asset('assets/img/partner/minsu.png') }}" alt="Partner Logo">
            <h2>MINSU</h2>
        </a>
    </div> --}}
    {{-- <div class="single-product">
        <a href="https://www.example.com/logo" target="_blank">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Partner Logo">
            <h2>Logo</h2>
        </a>
    </div> --}}
</div>

{{-- <div class="partners-row-container mb-5">
    <!-- First Column -->
    <div class="partners-column unique-incubatees-column">
        <h2 class="partners-header">Our Incubatees</h2>
        <div class="partners-products">
            @foreach ($incubatees as $incubatee)
                <div class="partners-item">
                    <a href="#" target="_blank">
                        <img src="{{ asset('storage/' . $incubatee->product_image) }}"
                            alt="{{ $incubatee->company_name }} Product Image">
                        <h2>{{ $incubatee->company_name }}</h2>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


    <!-- Second Column -->
    <div class="partners-column unique-mentors-column">
        <h2 class="partners-header">Our Mentors</h2>
        <div class="partners-products">
            @foreach ($mentors as $mentor)
            <div class="partners-item">
                <a href="#" target="_blank">
                    <img src="{{ asset('storage/' . $mentor->mentor_image) }}"
                        alt="{{ $mentor->company }} Mentor Image">
                    <h2>{{ $mentor->company }}</h2>
                </a>
            </div>
        @endforeach
        </div>
    </div>

    <!-- Third Column -->
    <div class="partners-column unique-investors-column">
        <h2 class="partners-header">Our Investors</h2>
        <div class="partners-products">
            @foreach ($investors as $investor)
            <div class="partners-item">
                <a href="#" target="_blank">
                    <img src="{{ asset('storage/' . $investor->investor_image) }}"
                        alt="{{ $investor->company_name }} Investor Image">
                    <h2>{{ $investor->company_name }}</h2>
                </a>
            </div>
        @endforeach
        </div>
    </div>
</div> --}}


{{-- <main>
    <section>
        <div class="testimonial">
            <div class="container">
                <div class="testimonial__inner">
                    <div class="testimonial-slider">
                        <div class="testimonial-slide">
                            <div class="testimonial_box">
                                <div class="testimonial_box-inner">
                                    <div class="testimonial_box-top">
                                        <div class="testimonial_box-icon">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                        <div class="testimonial_box-text">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus optio
                                                facilis beatae.</p>
                                        </div>
                                        <div class="testimonial_box-img">
                                            <img src="https://i.ibb.co/hKgs8gm/profile.jpg" alt="profile">
                                        </div>
                                        <div class="testimonial_box-name">
                                        </div>
                                        <div class="testimonial_box-job">
                                            <p>MANAGER</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slide">
                            <div class="testimonial_box">
                                <div class="testimonial_box-inner">
                                    <div class="testimonial_box-top">
                                        <div class="testimonial_box-icon">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                        <div class="testimonial_box-text">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus optio
                                                facilis beatae.</p>
                                        </div>
                                        <div class="testimonial_box-img">
                                            <img src="https://i.ibb.co/hKgs8gm/profile.jpg" alt="profile">
                                        </div>
                                        <div class="testimonial_box-name">
                                        </div>
                                        <div class="testimonial_box-job">
                                            <p>CEO</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slide">
                            <div class="testimonial_box">
                                <div class="testimonial_box-inner">
                                    <div class="testimonial_box-top">
                                        <div class="testimonial_box-icon">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                        <div class="testimonial_box-text">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus optio
                                                facilis beatae.</p>
                                        </div>
                                        <div class="testimonial_box-img">
                                            <img src="https://i.ibb.co/hKgs8gm/profile.jpg" alt="profile">
                                        </div>
                                        <div class="testimonial_box-name">
                                        </div>
                                        <div class="testimonial_box-job">
                                            <p>Co-Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slide">
                            <div class="testimonial_box">
                                <div class="testimonial_box-inner">
                                    <div class="testimonial_box-top">
                                        <div class="testimonial_box-icon">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                        <div class="testimonial_box-text">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus optio
                                                facilis beatae.</p>
                                        </div>
                                        <div class="testimonial_box-img">
                                            <img src="https://i.ibb.co/hKgs8gm/profile.jpg" alt="profile">
                                        </div>
                                        <div class="testimonial_box-name">
                                        </div>
                                        <div class="testimonial_box-job">
                                            <p>SEO</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main> --}}
