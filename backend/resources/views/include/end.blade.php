<script src={{ asset('assets/js/jquery.min.js') }}></script>
<script src={{ asset('assets/js/bootstrap.bundle.min.js') }}></script>
<script src={{ asset('assets/js/jquery.sticky.js') }}></script>
<script src={{ asset('assets/js/click-scroll.js') }}></script>
<script src={{ asset('assets/js/animated-headline.js') }}></script>
<script src={{ asset('assets/js/modernizr.js') }}></script>
<script src={{ asset('assets/js/custom.js') }}></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/color-thief@2.3.0/dist/color-thief.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
    const updateActiveLink = () => {
        let index = sections.length;

        while (--index && window.scrollY + 100 < sections[index].offsetTop) {}

        navLinks.forEach((link) => {
            // Check if the link does not have the 'no-active' class
            if (!link.classList.contains("no-active")) {
                link.classList.remove("active");
            }
        });

        if (navLinks[index] && !navLinks[index].classList.contains("no-active")) {
            navLinks[index].classList.add("active");
        }
    };

    window.addEventListener("scroll", updateActiveLink);

    navLinks.forEach((link, i) => {
        link.addEventListener("click", (e) => {
            // Prevent default action only for links with 'click-scroll' class
            if (link.classList.contains("click-scroll") && !link.classList.contains("no-active")) {
                e.preventDefault();
                navLinks.forEach((link) => {
                    link.classList.remove("active");
                });
                link.classList.add("active");
                sections[i].scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                });
            }
        });
    });

    updateActiveLink();
});





$(function() {
	$('#search-menu').removeClass('toggled');
	$('#search-icon').click(function(e) {
		e.stopPropagation();
		$('#search-menu').toggleClass('toggled');
		$("#popup-search").focus();
	});
	$('#search-menu input, #search-menu button').click(function(e) {
		e.stopPropagation();
	});
	$('body').click(function() {
		$('#search-menu').removeClass('toggled');
	});
	$('#search-menu').click(function(e) {
		e.stopPropagation();
	});
});



    const currentYear = new Date().getFullYear();
    const startYear = 2024;
    const currentYearElement = document.getElementById('current-year');

    if (currentYear > startYear) {
        currentYearElement.textContent = ` - ${currentYear} `;
    }

    $(document).ready(function() {
        $('.partners-products').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            arrows: false,
            dots: false,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    });

    $(document).ready(function() {
        $('.products').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            dots: false,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
    $(document).ready(function() {
        $('.testimonial-slider').slick({
            autoplay: true,
            autoplaySpeed: 1000,
            speed: 600,
            draggable: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    });
</script>
</body>

</html>
