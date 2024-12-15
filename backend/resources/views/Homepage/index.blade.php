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

    .sdg-images-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        grid-gap: 15px;
        margin-top: 30px;
    }

    .sdg-image-container {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
        border-radius: 8px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        perspective: 1000px;
        transition: background-color 0.5s ease;
    }

    /* Color based on SDG data-content */
    .sdg-image-container[data-content*="SDG 8"] {
        background-color: #a21942;
    }

    .sdg-image-container[data-content*="SDG 9"] {
        background-color: #f16d22;
    }

    .sdg-image-container[data-content*="SDG 12"] {
        background-color: #cd8c2e;
    }

    .sdg-image-container[data-content*="SDG 17"] {
        background-color: #28426e;
    }

    .sdg-image {
        width: 70%;
        height: auto;
        object-fit: cover;
        backface-visibility: hidden;
        transition: transform 0.5s ease;
    }

    /* Flip effect when hovering */
    .sdg-image-container:hover .sdg-image {
        transform: rotateY(180deg);
    }

    /* Make sure the content fits dynamically */
    .sdg-image-container::after {
        content: attr(data-content);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 12px;
        color: white;
        text-align: center;
        width: 100%;
        /* Make content fit the full width of the container */
        padding: 20px;
        border-radius: 8px;
        display: none;
        transition: opacity 0.3s ease, transform 0.5s ease;
        box-sizing: border-box;
        line-height: 1.5;
        overflow-y: auto;
        /* Add scroll if content overflows */
    }

    /* Show content on hover */
    .sdg-image-container:hover::after {
        display: block;
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }

    @media (max-width: 768px) {
        .sdg-images-grid {
            grid-template-columns: repeat(1, 1fr);
        }
    }

    @media (min-width: 769px) {
        .sdg-images-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>
</head>

<body>
    @include('../include/.nav')
    @include('../Homepage/.login')
    <section class="hero-section d-flex justify-content-center align-items-center" id="home">
        <div class="section-overlay"></div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#2E8B57" fill-opacity="1"
                d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
            </path>
        </svg>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-5 mb-lg-0 mt-5">
                    <h2 class="text-white">Welcome to the MinSU i-BIBES</h2>
                    <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                        <span>We cater</span>
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Growth</b>
                            <b>Opportunities</b>
                            <b>Mentorship</b>
                        </span>
                    </h1>
                    <div class="custom-btn-group d-flex">
                        <a href="#about" class="btn custom-btn smoothscroll me-3">About Us</a>
                        <div class="link-group">
                            <a href="javascript:void(0)" class="btn custom-join link smoothscroll d-block mb-2"
                            data-bs-toggle="modal" data-bs-target="#joinIncubateeModal">Become an Incubatee</a>

                            {{-- <a href="/join-mentor" class="btn custom-join link smoothscroll d-block mb-2">Become a
                                Mentor</a>
                            <a href="/join-investor" class="btn custom-join link smoothscroll d-block">Become an
                                Investor</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="sdg-images-grid">
                        <!-- SDG 8 -->
                        <div class="sdg-image-container"
                            data-content="SDG 8: Decent Work and Economic Growth: The MinSU i-BIBES TBI actively supports job creation through the incubation of innovative businesses that promotes sustainable practices. By equipping local technopreneurs with skills, resources, and networks, the initiative promotes inclusive and decent work opportunities. These efforts contribute to a thriving economic ecosystem, enhancing regional productivity and providing a pathway to sustained economic growth.">
                            <img src="{{ asset('assets/img/sdg/sdg8.png') }}" alt="SDG 8" class="sdg-image">
                        </div>
                        <!-- SDG 9 -->
                        <div class="sdg-image-container"
                            data-content="SDG 9: Industry, Innovation, and Infrastructure: MinSU i-BIBES plays a critical role in the development of resilient infrastructure and technologies. The initiative supports startups and enterprises in creating modern, scalable solutions that address regional challenges. By facilitating access to advanced infrastructure and technological expertise, MinSU i-BIBES strengthens the foundation for sustainable industrialization and innovation-driven economic development.">
                            <img src="{{ asset('assets/img/sdg/sdg9.jpg') }}" alt="SDG 9" class="sdg-image">
                        </div>
                        <!-- SDG 12 -->
                        <div class="sdg-image-container"
                            data-content="SDG 12: Responsible Consumption and Production: MinSU i-BIBES integrates principles of sustainability into its incubation processes, emphasizing the importance of responsible production and consumption. By mentoring businesses to adopt eco-friendly practices and optimize resource use, the initiative ensures that goods and services are produced in a way that minimizes environmental impact. These efforts align with global goals for achieving sustainability and reducing waste throughout the value chain.">
                            <img src="{{ asset('assets/img/sdg/sdg12.jpg') }}" alt="SDG 12" class="sdg-image">
                        </div>
                        <!-- SDG 17 -->
                        <div class="sdg-image-container"
                            data-content="SDG 17: Partnerships for the Goals: Collaboration lies at the heart of the MinSU i-BIBES’ approach. By prioritizing cross-sectoral partnerships among the academe, industry, national government, and local governments, the initiative strengthens the means of implementation for sustainable development. These partnerships drive innovation, resource sharing, and the alignment of goals across diverse stakeholders, ensuring that the region advances together towards a more inclusive and prosperous future.">
                            <img src="{{ asset('assets/img/sdg/sdg17.jpg') }}" alt="SDG 17" class="sdg-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <div class="announcement-container" style="margin-top: 15vh;">
        <div class="announcement-text">
            <h2>🌟 Exciting Announcement!</h2>
            <p>
                We are thrilled to introduce our latest project! Stay connected for more updates. Don't miss out on this
                amazing journey.
            </p>
            {{-- <button class="cta-button">Learn More</button> --}}
        </div>
    </div>
    <div class="news-announcement">
        <div class="news-main">
            @if ($newsItems->isNotEmpty())
                @php
                    $base64Image = null;
                    preg_match_all('/<img[^>]+src="([^"]+)"/', $newsItems->first()->content, $matches);
                    foreach ($matches[1] as $imageSrc) {
                        if (strpos($imageSrc, 'data:image/') === 0) {
                            if (preg_match('/^data:image\/(jpeg|png|jpg);base64,/', $imageSrc)) {
                                $base64Image = $imageSrc;
                                break;
                            }
                        }
                    }
                @endphp
                <a href="{{ route('news.show', Crypt::encrypt($newsItems->first()->id)) }}">
                    <img src="{{ $base64Image ? $base64Image : asset('assets/img/ibibes.jpg') }}" alt="Main News"
                         class="news-main-image">
                    <div class="news-main-label">
                        @if ($newsItems->first()->category)
                            <span class="news-category">{{ $newsItems->first()->category->name }}</span>
                        @endif
                    </div>
                    <p class="news-main-description">
                        {{ \Illuminate\Support\Str::limit(strip_tags($newsItems->first()->content), 150) }}
                    </p>
                </a>
            @else
                <p>No main news available.</p>
            @endif
        </div>
        <div class="news-sidebar">
            @foreach ($newsItems as $news)
                @if (optional($news->category)->name !== 'Milestone')
                    @php
                        $base64Image = null;
                        preg_match_all('/<img[^>]+src="([^"]+)"/', $news->content, $matches);
                        foreach ($matches[1] as $imageSrc) {
                            if (strpos($imageSrc, 'data:image/') === 0) {
                                if (preg_match('/^data:image\/(jpeg|png|jpg);base64,/', $imageSrc)) {
                                    $base64Image = $imageSrc;
                                    break;
                                }
                            }
                        }
                    @endphp
                    <a href="{{ route('news.show', Crypt::encrypt($news->id)) }}" class="news-preview-link">
                        <div class="news-preview">
                            <img class="news-preview-image"
                                 src="{{ $base64Image ? $base64Image : 'default-image-url.jpg' }}"
                                 alt="Preview Image of {{ $news->title }}">
                            <div class="news-preview-label">
                                @if ($news->category)
                                    <span class="news-category">{{ $news->category->name }}</span>
                                @endif
                            </div>
                            <p class="news-preview-description">
                                {{ \Illuminate\Support\Str::limit(strip_tags($news->content), 150) }}
                            </p>
                        </div>
                    </a>
                @endif
            @endforeach
            <a href="/news" class="news-see-more">See More News</a>
        </div>
    </div>



    <section class="membership-content-section">
        <div class="membership-container">
            <div class="membership-services" id="services">
                <div class="services-container">
                    <div class="services-row">
                        <!-- Vision Section -->
                        <div class="service-col animated-card">
                            <div class="membership-service-item">
                                <div class="service-icon">
                                    <img width="80" height="80"
                                        src="https://img.icons8.com/color/100/ophthalmology.png" alt="ophthalmology" />
                                </div>
                                <div class="service-content">
                                    <h4 class="service-title">Vision</h4>
                                    <p class="service-description">
                                        To be a leading business incubation hub in the MIMAROPA region advancing
                                        sustainable
                                        biosystems solutions and estahlishing innovative
                                        ventures that address challenges in agriculture, food systems, and bio-resource
                                        management.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Mission Section -->
                        <div class="service-col animated-card">
                            <div class="membership-service-item">
                                <div class="service-icon">
                                    <img width="80" height="80"
                                        src="https://img.icons8.com/emoji/100/bullseye.png" alt="bullseye" />
                                </div>
                                <div class="service-content">
                                    <h4 class="service-title">Mission</h4>
                                    <p class="service-description">
                                        Empower start-ups by providing strong entrepreneurial ecosystem that drives
                                        innovation in Biosystem solutions, contributing to sustainable
                                        and resilient regional economic growth and development.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <!-- Objectives Section -->
                        <div class="service-col animated-card">
                            <div class="membership-service-item">
                                <div class="service-icon">
                                    <img width="80" height="80"
                                        src="https://img.icons8.com/external-flaticons-flat-flat-icons/100/external-objective-traditional-marketing-flaticons-flat-flat-icons.png"
                                        alt="objective" />
                                </div>
                                <div class="service-content">
                                    <h4 class="service-title">Goals</h4>
                                    <ol class="service-objectives">
                                        <li>Support startups in creating transformative biosystems solutions that
                                            convert
                                            agricultural biowastes into sustainable products, renewable bioenergy,
                                            innovative raw materials, food innovation, smart agriculture and fisheries
                                            management, and IoT for sustainable communities.</li>
                                        <li>Provide comprehensive support to startups, including prototyping services,
                                            mentorship, support infrastructure, business registration, seed funding, and
                                            market access.</li>
                                        <li>Build strong partnerships and a vibrant entrepreneurial ecosystem that
                                            connects
                                            innovators with resources, research institutions, and funding opportunities
                                            to
                                            sustain the growth of startups and ventures.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="joinIncubateeModal" tabindex="-1" aria-labelledby="joinIncubateeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="joinIncubateeModalLabel">Choose your category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="categoryForm">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Student" id="student" name="category[]">
                            <label class="form-check-label" for="student">Student</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Faculty-Researcher" id="faculty" name="category[]">
                            <label class="form-check-label" for="faculty">Faculty-Researcher</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Researcher" id="researcher" name="category[]">
                            <label class="form-check-label" for="researcher">Researcher</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="MinSU Alumni" id="alumni" name="category[]">
                            <label class="form-check-label" for="alumni">MinSU Alumni</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="MSMEs" id="msmes" name="category[]">
                            <label class="form-check-label" for="msmes">MSMEs</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="ARBOs" id="arbo" name="category[]">
                            <label class="form-check-label" for="arbo">ARBOs</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="SLPAs" id="slpa" name="category[]">
                            <label class="form-check-label" for="slpa">SLPAs</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Farmer Association" id="farmers" name="category[]">
                            <label class="form-check-label" for="farmers">Farmer Association</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Cooperative" id="cooperative" name="category[]">
                            <label class="form-check-label" for="cooperative">Cooperative</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="others" id="others" name="category[]">
                            <label class="form-check-label" for="others">Others</label>
                            <input type="text" id="otherText" class="form-control mt-2" placeholder="Specify" style="display: none;">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="javascript:void(0)" id="proceedButton" class="btn btn-primary">Proceed</a>
                </div>
            </div>
        </div>
    </div>
    @include('../Homepage/.about-us')
    @include('../Homepage/.other')
    @include('../Homepage/.events')
    @include('../Homepage/.contact-us')
    </main>
    @include('../include/.footer')
    @include('../include/.end')
