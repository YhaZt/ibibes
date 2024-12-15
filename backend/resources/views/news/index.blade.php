@include('../news/nav')


<section class="light">
    <div class="container py-2">
        <div class="row">
            <div class="col-lg-8">
                <div style="text-align: left" class="h1 text-dark" id="pageHeaderTitle">MinSU i-BIBES Highlights</div>
                <div class="news-wrapper">
                    @foreach ($newsItems as $news)
                        @php
                            $base64Image = null;
                            $validImageTypes = ['jpeg', 'jpg', 'png'];
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
                        <article class="postcard light blue">
                            <a class="postcard__img_link">
                                <img class="postcard__img"
                                    src="{{ $base64Image ? $base64Image : 'default-image-url.jpg' }}"
                                    alt="Image of {{ $news->title }}" />
                            </a>
                            <div class="postcard__text t-dark">
                                <h1 class="postcard__title blue"><a
                                        href="{{ url('news/' . Crypt::encrypt($news->id)) }}">{{ $news->title }}</a>
                                </h1>
                                <div class="postcard__subtitle small">
                                    <time datetime="{{ $news->publication_date }}">
                                        <i
                                            class="fas fa-calendar-alt mr-2"></i>{{ \Carbon\Carbon::parse($news->publication_date)->format('l, M jS Y') }}
                                    </time>
                                </div>
                                <div class="postcard__bar"></div>
                                <div class="postcard__preview-txt">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($news->content), 150) }}
                                </div>
                                <ul class="postcard__tagbox">
                                    @foreach ($news->tags as $tag)
                                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>{{ $tag->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </article>
                    @endforeach
                    @if ($newsItems->lastPage() > 1)
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item {{ $newsItems->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $newsItems->url(1) }}" aria-label="First">
                                        First </a>
                                </li>
                                <li class="page-item {{ $newsItems->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $newsItems->previousPageUrl() }}"
                                        aria-label="Previous">
                                        Previous </a>
                                </li>
                                <li class="page-item dropdown">
                                    <a class="page-link dropdown-toggle" href="#" id="currentPageDropdown"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ $newsItems->currentPage() }} of {{ $newsItems->lastPage() }}
                                    </a>
                                    <div class="dropdown-menu p-3" aria-labelledby="currentPageDropdown">
                                        <form id="pageSelectorForm" action="{{ url('/news-announcement') }}"
                                            method="GET">
                                            <div class="form-group">
                                                <label for="pageInput">Enter Page Number:</label>
                                                <input type="number" class="form-control" id="pageInput" name="page"
                                                    min="1" max="{{ $newsItems->lastPage() }}"
                                                    value="{{ $newsItems->currentPage() }}" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-2">Go</button>
                                        </form>
                                    </div>
                                </li>
                                <li class="page-item {{ $newsItems->hasMorePages() ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $newsItems->nextPageUrl() }}" aria-label="Next">
                                        Next
                                    </a>
                                </li>
                                <li class="page-item {{ $newsItems->hasMorePages() ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $newsItems->url($newsItems->lastPage()) }}"
                                        aria-label="Last">
                                        Last
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
                <div class="latest-news-section">
                    <h2 class="text-dark">Latest News</h2>
                    <ul class="latest-news-list">
                        @foreach ($latestNews as $news)
                            <li class="news-item">
                                <a href="{{ url('news/' . Crypt::encrypt($news->id)) }}">{{ $news->title }}</a>
                                <span
                                    class="news-date">{{ \Carbon\Carbon::parse($news->publication_date)->format('M d, Y') }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="top-views-section mt-4">
                    <h2 class="text-dark">Top Views</h2>
                    <ul class="top-views-list">
                        @foreach ($topViews as $topView)
                            <li class="top-views-item">
                                <a href="{{ url('event/' . Crypt::encrypt($topView->id)) }}">{{ $topView->title }}</a>
                                <span class="news-date">{{ $topView->views }} Views</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="important-news-section mt-4">
                    <h2 class="text-dark">Important News</h2>
                    <ul class="important-news-list">
                        @foreach ($importantNews as $news)
                            <li class="important-news-item">
                                <a href="{{ url('news/' . Crypt::encrypt($news->id)) }}">{{ $news->title }}</a>
                                <span
                                    class="news-date">{{ \Carbon\Carbon::parse($news->publication_date)->format('M d, Y') }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="milestone-update-section mt-4">
                    <h2 class="text-dark">Milestone Updates</h2>
                    <ul class="milestone-update-list">
                        @foreach ($milestonesNews as $milestone)
                            <li class="milestone-update-item">
                                <a
                                    href="{{ url('news/' . Crypt::encrypt($milestone->id)) }}">{{ $milestone->title }}</a>
                                <span
                                    class="news-date">{{ \Carbon\Carbon::parse($milestone->date)->format('M d, Y') }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
