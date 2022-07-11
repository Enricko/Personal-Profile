<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enricko Personal Profile</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Halant:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style-starter.css">
</head>

<body>
    <!--header-->
    @include('include.frontend.topbar')
    <!-- //header -->

    <!-- banner section -->
    @include('include.frontend.carousel')
    <!-- //banner section -->

    <hr id="about">
    <!-- banner bottom section -->
    @include('include.frontend.about')
    <!-- //banner bottom section -->
    
    <hr id="service">
    <!-- feature section -->
    @include('include.frontend.service')
    <!-- //feature section -->
    
    <!-- blog section -->
    {{-- <div class="w3l-grids-block-5 pb-5 mt-5">
        <div class="container">
            <div class="title-main text-center mx-auto mb-4" style="max-width:700px;">
                <h3 class="title-style">Our Latest Articles</h3>
                <p class="sub-title mt-2">Cum doctus civibus efficiantur in imperdiet deterruisset. Cras efficitur,
                    metus gravida suscipit cursus, dui diam pre lorem id lectus.</p>
            </div>
            <div class="row mt-sm-5 pt-lg-2 justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class=" grids5-info">
                        <a href="#blog"><img src="{{  asset('frontend')  }}/assets/images/blog1.jpg" alt="" /></a>
                        <div class="blog-info">
                            <h5>Feb 18, 2021</h5>
                            <h4><a href="#blog">Looking for aquarium specialists?</a></h4>
                            <p>Donec sed tempus enim, a congue risus. Entesque euismod quam.</p>
                            <a class="btn btn-style mt-4" href="#blog">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
                    <div class=" grids5-info">
                        <a href="#blog"><img src="{{  asset('frontend')  }}/assets/images/blog3.jpg" alt="" /></a>
                        <div class="blog-info">
                            <h5>Feb 19, 2021</h5>
                            <h4><a href="#blog">Different aquariums for different ideas</a></h4>
                            <p>Donec sed tempus enim, a congue risus. Entesque euismod quam.</p>
                            <a class="btn btn-style mt-4" href="#blog">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6  mt-lg-0 mt-4">
                    <div class=" grids5-info">
                        <a href="#blog"><img src="{{  asset('frontend')  }}/assets/images/blog2.jpg" alt="" /></a>
                        <div class="blog-info">
                            <h5>Feb 20, 2021</h5>
                            <h4><a href="#blog">Beautiful Fishes, corals and more</a></h4>
                            <p>Donec sed tempus enim, a congue risus. Entesque euismod quam.</p>
                            <a class="btn btn-style mt-4" href="#blog">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- //blog section -->
    
    <hr id="pengalaman">
    <!-- news-grids -->
    @include('include.frontend.pengalaman')
    <!-- //news-grids -->

    <!-- Portfolio section -->
    @include('include.frontend.portfolio')
    <!-- //Portfolio section -->

    <!-- testimonial section -->
    {{-- <div class="w3l-cutomer-main-cont">
        <div class="testimonials py-5">
            <div class="container py-md-5 py-4">
                <div class="title-main text-center mx-auto mb-4" style="max-width:700px;">
                    <h3 class="title-style">Testimonials</h3>
                    <p class="sub-title mt-2">Cum doctus civibus efficiantur in imperdiet deterruisset. Cras efficitur,
                        metus gravida suscipit cursus, dui diam pre lorem id lectus.</p>
                </div>
                <div class="row content-sec mt-md-5 justify-content-center">
                    <div class="col-lg-4 col-md-6 testi-sections">
                        <div class="testimonials_grid">
                            <p class="sub-test"><q>
                                    Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque nihil impedit.</q>
                            </p>
                            <div class="d-grid sub-author-con">
                                <div class="testi-img-res">
                                    <img src="{{  asset('frontend')  }}/assets/images/testi2.jpg" alt="" class="img-fluid" />
                                </div>
                                <div class="testi_grid text-left">
                                    <h5>Petey Cruis</h5>
                                    <p>Caption Here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4 testi-sections">
                        <div class="testimonials_grid">
                            <p class="sub-test"><q>
                                    Nam
                                    libero
                                    tempore, cum soluta
                                    nobis est eligendi optio cumque nihil impedit.</q>
                            </p>
                            <div class="d-grid sub-author-con">
                                <div class="testi-img-res">
                                    <img src="{{  asset('frontend')  }}/assets/images/testi1.jpg" alt="" class="img-fluid" />
                                </div>
                                <div class="testi_grid text-left">
                                    <h5>Molive Joe</h5>
                                    <p>Caption Here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 testi-sections">
                        <div class="testimonials_grid">
                            <p class="sub-test"><q>
                                    Nam
                                    libero
                                    tempore, cum soluta
                                    nobis est eligendi optio cumque nihil impedit.</q>
                            </p>
                            <div class="d-grid sub-author-con">
                                <div class="testi-img-res">
                                    <img src="{{  asset('frontend')  }}/assets/images/testi3.jpg" alt="" class="img-fluid" />
                                </div>
                                <div class="testi_grid text-left">
                                    <h5>Paige Turner</h5>
                                    <p>Caption Here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- //testimonial section -->

    <!-- footer -->
    @include('include.frontend.contact')
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="{{  asset('frontend')  }}/assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- banner slider -->
    <script src="{{  asset('frontend')  }}/assets/js/slideshow-slider.js"></script>
    <!-- //banner slider -->

    <!-- counter for stats -->
    <script src="{{  asset('frontend')  }}/assets/js/counter.js"></script>
    <!-- //counter for stats -->

    <!-- pets section -->
    <script src="{{  asset('frontend')  }}/assets/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $('.owl-news').owlCarousel({
                stagePadding: 200,
                loop: true,
                margin: 30,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 6000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        stagePadding: 40,
                        nav: false
                    },
                    480: {
                        items: 1,
                        stagePadding: 40,
                        nav: true
                    },
                    667: {
                        items: 2,
                        stagePadding: 50,
                        nav: true
                    },
                    1000: {
                        items: 2,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //pets section -->

    <!-- theme switch js (light and dark)-->
    <script src="{{ asset('frontend') }}/assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="{{  asset('frontend')  }}/assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>