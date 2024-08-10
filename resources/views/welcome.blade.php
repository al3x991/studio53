<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="x-ua-compatible" content="IE=edge">
<meta name="author" content="SemiColonWeb">
<meta name="description" content="Create Micro Portfolio Websites with Canvas Template. Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

<!-- Font Imports -->
<link rel="stylesheet" href="https://use.typekit.net/ipp3kvy.css">

<!-- Core Style -->
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">

<!-- Font Icons -->
<link rel="stylesheet" href="css/font-icons.css">

<!-- Niche Demos -->
<link rel="stylesheet" href="{{ asset('portfolio/portfolio.css') }}">

<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Document Title
============================================= -->
<title>Portfolio - Landing Page | Canvas</title>

</head>

<body class="stretched dark side-header page-transition" data-loader-color="var(--cnvs-themecolor);">

<div class="canvas-cursor d-none d-md-block">
    <div class="canvas-cursor-follower"></div>
</div>

<!-- Document Wrapper
============================================= -->
<div id="wrapper">

    <!-- Header
    ============================================= -->
    <header id="header" class="border-end-0">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row justify-content-between">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo" class="w-auto me-auto mx-lg-auto">
                        <a href="index.html"><img src="portfolio/images/logo.svg" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <div class="primary-menu-trigger">
                        <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                            <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                        </button>
                    </div>

                    <div class="header-misc">
                        <div class="d-flex my-lg-5 justify-content-center w-100">
                            <a href="#" class="social-icon si-small bg-light bg-opacity-10 h-bg-facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>

                            <a href="#" class="social-icon si-small bg-light bg-opacity-10 h-bg-x-twitter">
                                <i class="fa-brands fa-x-twitter"></i>
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-small bg-light bg-opacity-10 h-bg-instagram">
                                <i class="bi-instagram"></i>
                                <i class="bi-instagram"></i>
                            </a>

                            <a href="#" class="social-icon si-small bg-light bg-opacity-10 h-bg-pinterest">
                                <i class="fa-brands fa-pinterest-p"></i>
                                <i class="fa-brands fa-pinterest-p"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav class="primary-menu text-start text-lg-center">

                        <ul class="menu-container">
                            <li class="menu-item"><a class="menu-link" href="#"><div>Home</div></a></li>
                            <li class="menu-item"><a class="menu-link" href="#"><div>About</div></a></li>
                            <li class="menu-item"><a class="menu-link" href="#"><div>Works</div></a></li>
                            <li class="menu-item"><a class="menu-link" href="#"><div>Blog</div></a></li>
                            <li class="menu-item"><a class="menu-link" href="#"><div>Contact</div></a></li>
                        </ul>

                    </nav><!-- #primary-menu end -->

                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap px-4 py-4">

            <div class="grid-filter-wrap">

                <!-- Portfolio Filter
                ============================================= -->
                <ul class="grid-filter style-4 w-100 mb-2" data-container="#demo-portfolio-filter">
                    <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
                    <li class="ms-auto"><a href="#" data-filter=".pf-icons">Icons</a></li>
                    <li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
                    <li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
                    <li><a href="#" data-filter=".pf-media">Media</a></li>
                    <li><a href="#" data-filter=".pf-graphics">Graphics</a></li>
                </ul><!-- .grid-filter end -->

            </div>

            <!-- Portfolio Grid
            ============================================= -->
            <div id="demo-portfolio-filter" class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-2 g-lg-3 grid-container" data-lightbox="gallery">
                <div class="col pf-media pf-icons">
                    <a data-animate="zoomIn" href="portfolio/images/showcase/lightbox/1.jpg" data-lightbox="gallery-item" title="Ruth D. Rhodes"><img src="portfolio/images/showcase/1.jpg" alt="Gallery Image 1">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Ruth D. Rhodes</h5>
                                <small>2020</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-illustrations">
                    <a data-animate="zoomIn" data-delay="50" href="portfolio/images/showcase/lightbox/2.jpg" data-lightbox="gallery-item" title="Kate Howells"><img src="portfolio/images/showcase/2.jpg" alt="Gallery Image 2">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Kate Howells</h5>
                                <small>2021</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics pf-uielements">
                    <a data-animate="zoomIn" data-delay="100" href="portfolio/images/showcase/lightbox/3.jpg" data-lightbox="gallery-item" title="Tom Wyatt"><img src="portfolio/images/showcase/3.jpg" alt="Gallery Image 3">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Tom Wyatt</h5>
                                <small>2019</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-icons pf-illustrations">
                    <a data-animate="zoomIn" data-delay="50" href="portfolio/images/showcase/lightbox/4.jpg" data-lightbox="gallery-item" title="Ethan Perkins"><img src="portfolio/images/showcase/4.jpg" alt="Gallery Image 4">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Ethan Perkins</h5>
                                <small>2023</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-uielements pf-media">
                    <a data-animate="zoomIn" data-delay="100" href="portfolio/images/showcase/lightbox/5.jpg" data-lightbox="gallery-item" title="Lydia Wright"><img src="portfolio/images/showcase/5.jpg" alt="Gallery Image 5">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Lydia Wright</h5>
                                <small>2021</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics pf-illustrations">
                    <a data-animate="zoomIn" data-delay="50" href="portfolio/images/showcase/lightbox/6.jpg" data-lightbox="gallery-item" title="Louie Warren"><img src="portfolio/images/showcase/6.jpg" alt="Gallery Image 6">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Louie Warren</h5>
                                <small>2025</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-uielements pf-icons">
                    <a data-animate="zoomIn" data-delay="100" href="portfolio/images/showcase/lightbox/7.jpg" data-lightbox="gallery-item" title="Kai Welch"><img src="portfolio/images/showcase/7.jpg" alt="Gallery Image 7">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Kai Welch</h5>
                                <small>2026</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="50" href="portfolio/images/showcase/lightbox/8.jpg" data-lightbox="gallery-item" title="Zoe Cross"><img src="portfolio/images/showcase/8.jpg" alt="Gallery Image 8">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Zoe Cross</h5>
                                <small>2015</small>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="100" href="portfolio/images/showcase/lightbox/9.jpg" data-lightbox="gallery-item" title="Lola Bartlett"><img src="portfolio/images/showcase/9.jpg" alt="Gallery Image 9">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Lola Bartlett</h5>
                                <small>2019</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="50" href="portfolio/images/showcase/lightbox/10.jpg" data-lightbox="gallery-item" title="Tegan Bevan"><img src="portfolio/images/showcase/10.jpg" alt="Gallery Image 10">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Tegan Bevan</h5>
                                <small>2022</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="100" href="portfolio/images/showcase/lightbox/11.jpg" data-lightbox="gallery-item" title="Brooke Slater"><img src="portfolio/images/showcase/11.jpg" alt="Gallery Image 11">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Brooke Slater</h5>
                                <small>2021</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="50" href="portfolio/images/showcase/lightbox/12.jpg" data-lightbox="gallery-item" title="Samantha Stokes"><img src="portfolio/images/showcase/12.jpg" alt="Gallery Image 12">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Samantha Stokes</h5>
                                <small>2020</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="100" href="portfolio/images/showcase/lightbox/13.jpg" data-lightbox="gallery-item" title="Billy Kay"><img src="portfolio/images/showcase/13.jpg" alt="Gallery Image 13">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Billy Kay</h5>
                                <small>2022</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="50" href="portfolio/images/showcase/lightbox/14.jpg" data-lightbox="gallery-item" title="Laura Bishop"><img src="portfolio/images/showcase/14.jpg" alt="Gallery Image 14">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Laura Bishop</h5>
                                <small>2024</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="100" href="portfolio/images/showcase/lightbox/15.jpg" data-lightbox="gallery-item" title="Sebastian Russell"><img src="portfolio/images/showcase/15.jpg" alt="Gallery Image 15">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Sebastian Russell</h5>
                                <small>2021</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="50" href="portfolio/images/showcase/lightbox/16.jpg" data-lightbox="gallery-item" title="Billy Hilton"><img src="portfolio/images/showcase/16.jpg" alt="Gallery Image 16">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Billy Hilton</h5>
                                <small>2022</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="100" href="portfolio/images/showcase/lightbox/17.jpg" data-lightbox="gallery-item" title="Maddison Sinclair"><img src="portfolio/images/showcase/17.jpg" alt="Gallery Image 17">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Maddison Sinclair</h5>
                                <small>2027</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="50" href="portfolio/images/showcase/lightbox/18.jpg" data-lightbox="gallery-item" title="Lilly Thompson"><img src="portfolio/images/showcase/18.jpg" alt="Gallery Image 18">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Lilly Thompson</h5>
                                <small>2023</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="100" href="portfolio/images/showcase/lightbox/19.jpg" data-lightbox="gallery-item" title="Mollie Read"><img src="portfolio/images/showcase/19.jpg" alt="Gallery Image 19">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Mollie Read</h5>
                                <small>2019</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="50" href="portfolio/images/showcase/lightbox/20.jpg" data-lightbox="gallery-item" title="Josh King"><img src="portfolio/images/showcase/20.jpg" alt="Gallery Image 20">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Josh King</h5>
                                <small>2026</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="100" href="portfolio/images/showcase/lightbox/21.jpg" data-lightbox="gallery-item" title="Finley Burke"><img src="portfolio/images/showcase/21.jpg" alt="Gallery Image 21">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Finley Burke</h5>
                                <small>2024</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="50" href="portfolio/images/showcase/lightbox/22.jpg" data-lightbox="gallery-item" title="Declan Shah"><img src="portfolio/images/showcase/22.jpg" alt="Gallery Image 22">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Declan Shah</h5>
                                <small>2020</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="100" href="portfolio/images/showcase/lightbox/23.jpg" data-lightbox="gallery-item" title="Laura Burke"><img src="portfolio/images/showcase/23.jpg" alt="Gallery Image 23">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Laura Burke</h5>
                                <small>2022</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="50" href="portfolio/images/showcase/lightbox/24.jpg" data-lightbox="gallery-item" title="Nicole Farmer"><img src="portfolio/images/showcase/24.jpg" alt="Gallery Image 24">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Nicole Farmer</h5>
                                <small>2021</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col pf-graphics">
                    <a data-animate="zoomIn" data-delay="100" href="portfolio/images/showcase/lightbox/25.jpg" data-lightbox="gallery-item" title="Rhys Watkins"><img src="portfolio/images/showcase/25.jpg" alt="Gallery Image 25">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark text-overlay-mask flex-column dark justify-content-end" data-hover-animate="fadeIn" data-hover-speed="350">
                                <h5 class="mb-0">Rhys Watkins</h5>
                                <small>2024</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- About
            ============================================= -->
            <div class="section mb-0 bg-transparent mt-0 mt-lg-6">
                <div class="container mw-sm">
                    <div class="row align-items-center col-mb-30">
                        <div class="col-md-4">
                            <div class="hstack mb-3">
                                <span class="col-auto me-3 text-uppercase ls-3 text-smaller color">About me</span>
                                <div class="border-top border-light w-100 border-color"></div>
                            </div>
                            <h2 class="display-2 font-secondary text-stretch text-uppercase fw-bolder ls-1">Alex Gorge</h2>
                            <p class="fw-medium my-5 lead">Competently communicate customized scenarios vis-a-vis multifunctional systems.</p>
                            <p class="op-07 fw-light">Quickly matrix standards compliant convergence rather than multifunctional innovation.</p>
                            <a href="#" class="button rounded-4 color bg-white bg-opacity-10 h-op-08">Email me</a>
                        </div>

                        <div class="col-md-8">
                            <img src="portfolio/images/about.jpg" alt=".." class="rounded-6" data-animate="fadeInUpSmall">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="bg-transparent border-0">

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">
            <div class="container">

                <div class="row">

                    <div class="col-12 text-center">
                        Copyrights &copy; 2023 All Rights Reserved by Canvas Inc.
                    </div>

                </div>

            </div>
        </div><!-- #copyrights end -->
    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="uil uil-angle-up bg-white bg-opacity-10 h-bg-color h-text-dark rounded-4"></div>
<a href="demo-portfolio-light.html" id="theme-scheme-btn" class="bi-brightness-high-fill bg-color text-dark fs-5 rounded-4"></a>

<!-- JavaScripts
============================================= -->
<script src="js/plugins.min.js"></script>
<script src="js/functions.bundle.js"></script>

<script>
    var cursor = document.querySelector('.canvas-cursor');
    var cursorFollower = document.querySelector('.canvas-cursor-follower');
    var cursorDot = document.querySelector('.canvas-cursor-dot');

    var onMouseMove = function(event) {
        cursor.style.transform = "translate3d("+ event.clientX + 'px'+","+event.clientY+'px'+",0px)";
    }

    document.addEventListener('mousemove', onMouseMove);

    document.querySelectorAll('a,button').forEach( function(element) {
        element.addEventListener('mouseenter', function() {
            cursor.classList.add('canvas-cursor-action');
        });

        element.addEventListener('mouseleave', function() {
            cursor.classList.remove('canvas-cursor-action');
        });
    });
</script>
</body>
</html>
