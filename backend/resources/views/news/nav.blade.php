<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://htmljstemplates.com/static_files/images/favicon.png" />
    <script src="https://kit.fontawesome.com/dd5559ee21.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="{{ asset('assets/css/home/news.css') }}" rel="stylesheet" />
        <style>
            .pagination {
                margin-right: 0;
            }

            #dropdownPageSelector {
                margin-left: 10px;
                /* Optional, to add some space from the pagination */
            }
        a.nav-link {
            color: #343434;
            text-decoration: none;
            min-width: 80px;
        }

        a.nav-link.active {
            color: #000;
            font-weight: bold
        }

        #scrollContent {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            width: 100%;
            height: 100%;
            white-space: nowrap;
        }

        #scrollContent>div {
            display: flex;
            animation: textScrollEffect 12s infinite linear;
        }

        @keyframes textScrollEffect {
            from {
                transform: translateX(0%);
            }

            to {
                transform: translateX(-50%);
            }
        }

        #subscribeButton:hover .icon path {
            fill: red;
        }
    </style>
    <title>i-BIBES</title>
    <meta name="description" content="A Daily news website navbar template">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</head>

<body>
    <div role="navigation">
        <div class="p-3 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 d-none d-md-block">
                        <div>
                            <span class="d-none d-lg-block">MinSU i-BIBES</span>
                            <small class="d-block">ᜡ-ᜪᜲᜪᜲᜰ᜴</small>
                        </div>
                        {{-- <div class="mt-1 text-secondary">
                            <i class="fab fa-facebook-square fs-5 me-2"></i>
                            <i class="fab fa-twitter-square fs-5 me-2"></i>
                            <i class="fas fa-thumbtack fs-5 me-2"></i>
                            <button id="subscribeButton" class="btn btn-primary flex float-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 24 24" class="icon">
                                    <path fill="currentColor"
                                        d="M11.98 19.094q-.291 0-.577-.106q-.286-.105-.503-.323L9.752 17.63q-2.67-2.425-4.71-4.717Q3 10.622 3 8.15q0-1.908 1.296-3.204T7.5 3.65q1.094 0 2.279.553T12 6.289q1.037-1.533 2.221-2.086T16.5 3.65q1.908 0 3.204 1.296T21 8.15q0 2.529-2.125 4.862t-4.652 4.622l-1.142 1.031q-.218.218-.513.323t-.587.106" />
                                </svg>
                                Subscribe
                            </button>

                        </div> --}}
                    </div>

                    <div class="col-lg-6 col-md-6 text-center">
                        <div class="display-6">News and Announcement</div>
                        <div class="text-warning" id="currentDateTime"></div>
                    </div>
                    <div class="col-lg-3 col-md-3 text-end d-none d-md-block">
                        <input class="form-control" placeholder="Search" />
                        <div class="mt-2"><strong>Trending :</strong> </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-bottom border-top" id="subNavContainer">
            <nav class="navbar navbar-expand-md">
                <div class="container-fluid">
                    <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation"><i class="fas fa-bars me-2"></i>
                        Menu</button>

                    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mx-auto ">
                            <li class="nav-item">
                                <a class="nav-link mx-2 active" aria-current="page" href="#">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-2" href="#">Annuncements</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="border-bottom d-flex">
            <div>
                <div class="py-2 px-5 bg-danger text-white">Updates</div>
            </div>
            <div class="px-1" style="overflow:hidden">
                <div id="scrollContent" class="text-secondary">
                    <div> <p><strong>The Mindoro State University Innovative Business Incubator for Biosystems Engineering
                        Solutions (MinSU – iBIBES) was established on August 15, 2024</strong>,
                    under the funding of the Higher Education Institution Readiness for Innovation and
                        Technopreneurship (HeIRIT) Program of the Philippine Council for Industry, Energy,
                        and Emerging Technology Research and Development (PCIEERD), and Mindoro State
                        University.</p>
                <p><strong>MinSU IBIBES</strong> aims to assist students, researchers, alumni, and entrepreneurs in producing innovative
                    biosystems solutions. Its focus includes transforming biowastes into new raw materials, products,
                    and bioenergy; food innovation; smart agriculture and fisheries; and leveraging technology to
                    address community problems. The incubator provides comprehensive support, including prototyping
                    services, mentorship, infrastructure, business registration assistance, seed funding, and market
                    access.</p>
                <p>The project is implemented by Mindoro State University, headed by Dr. Enya Marie D. Apostol (SUC
                    President III), and is led by its Technology Business Incubator (TBI) manager, Engr. Randy A. Joco.
                    The Department of Science and Technology (DOST) MIMAROPA serves as the cooperating and monitoring
                    agency</p></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateDateTime() {
            const now = new Date();
            const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            const dayName = days[now.getDay()];
            const monthName = months[now.getMonth()];
            const day = now.getDate();
            const year = now.getFullYear();
            let hours = now.getHours();
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            const ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12;
            const formattedDate = `${dayName}, ${monthName} ${day}, ${year} ${hours}:${minutes}:${seconds} ${ampm}`;
            document.getElementById('currentDateTime').textContent = formattedDate;
        }
        setInterval(updateDateTime, 1000);
    </script>
</body>

</html>
