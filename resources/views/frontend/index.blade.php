@extends('include.frontend.app_front')
@section('title','frontend')
@section('content')

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

    <!-- contact -->
    @include('include.frontend.contact')
    <!-- //contact -->
@endsection