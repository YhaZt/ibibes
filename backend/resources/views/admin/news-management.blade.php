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
                        <a class="nav-link click-scroll" href="/#home">Home</a>
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

        <br><br>
        <br><br>
        <div class="container">
            <h1>Create News</h1>

            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tags">Tags</label>
                    <select name="tags[]" id="tags" class="form-control" multiple required>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="publication_date">Publication Date</label>
                    <input type="text" name="publication_date" id="publication_date" class="form-control datepicker"
                        required>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea id="editor" name="content" class="form-control" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        @include('../include/.footer')
        @include('../include/.end')

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/ui/trumbowyg.min.css">
        <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/trumbowyg.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/plugins/base64/trumbowyg.base64.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/plugins/fontsize/trumbowyg.fontsize.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/plugins/colors/trumbowyg.colors.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/plugins/history/trumbowyg.history.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/plugins/indent/trumbowyg.indent.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/plugins/pasteimage/trumbowyg.pasteimage.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/plugins/resizimg/trumbowyg.resizimg.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/plugins/fontfamily/trumbowyg.fontfamily.min.js">
        </script>
        <script src="//rawcdn.githack.com/RickStrahl/jquery-resizable/0.35/dist/jquery-resizable.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css"
            rel="stylesheet">

        <script>
            $(document).ready(function() {
                $('#editor').trumbowyg({
                    btnsDef: {
                        image: {
                            dropdown: ['insertImage', 'base64'], // Use 'base64' instead of 'upload'
                            ico: 'insertImage'
                        }
                    },
                    btns: [
                        ['historyUndo', 'historyRedo'],
                        ['fontfamily'],
                        ['indent', 'outdent'],
                        ['foreColor', 'backColor'],
                        ['emoji'],
                        ['fontsize'],
                        ['viewHTML'],
                        ['formatting'],
                        ['bold', 'italic', 'underline'],
                        ['link'],
                        ['image'],
                        ['unorderedList', 'orderedList'],
                        ['horizontalRule'],
                        ['removeformat'],
                        ['fullscreen']
                    ],
                    autogrow: true,
                    resetCss: false,
                    plugins: {
                        resizimg: {
                            minSize: 64,
                            step: 16,
                        },
                        base64: true, // Enable Base64 plugin
                        fontfamily: {},
                        fontsize: {
                            allowCustomSize: true
                        },
                        colors: {}
                    }
                });
                $(document).on('trumbowyg.init', function() {
                    $('#editor').find('img').each(function() {
                        $(this).resizable({
                            handles: 'all',
                            aspectRatio: true
                        }).draggable({
                            containment: 'parent'
                        });
                    });
                });

                $('.datepicker').datepicker({
                    format: 'yyyy-mm-dd',
                    autoclose: true
                });
            });
        </script>
