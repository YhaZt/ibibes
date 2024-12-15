@include('../news/nav')

<style>
    .container {
        max-width: 100%;
        padding: 15px;
        margin: 0 auto;
    }

    .news-content {
        max-width: 100%;
        word-wrap: break-word;
        overflow: hidden;
    }

    .news-content img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 10px 0;
    }

    h1 {
        font-size: 2rem;
        line-height: 1.2;
        text-align: center;
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 1.5rem;
        }

        .container {
            padding: 10px;
        }

        .news-content img {
            margin: 8px 0;
        }
    }
</style>


</head>

<body>
    <br>
    <br>
    <br>
    <div class="container">
        <h1>{{ $shownews->title }}</h1>
        @foreach ($shownews->tags as $tag)
            {{-- <li class="tag__item"><i class="fas fa-tag mr-2"></i>{{ $tag->name }}</li> --}}
        @endforeach
        <div class="news-content">
            {!! $shownews->content !!}
        </div>
    </div>
