<section class="banner-slider-new-main" id="home">
    <div class="hero-header-11">
        <div id="wrapper">
            <section class="slideshow" id="js-header">
                    <?php $no=1;?>
                @foreach($carousel_5 as $row)
                <div class="slideshow__slide js-slider-home-slide is-next" data-slide="{{ $no++ }}">
                    <div class="slideshow__slide-background-parallax background-absolute js-parallax"
                        data-speed="-1" data-position="top" data-target="#js-header">
                        <div class="slideshow__slide-background-load-wrap background-absolute">
                            <div class="slideshow__slide-background-load background-absolute">
                                <div class="slideshow__slide-background-wrap background-absolute">
                                    <div class="slideshow__slide-background background-absolute">
                                        <div class="slideshow__slide-image-wrap background-absolute">
                                            <div class="slideshow__slide-image background-absolute"
                                                style="background-image: url('{{  asset('image')  }}/carousel/{{ $row->image }}')">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slideshow__slide-caption">
                        <div class="slideshow__slide-caption-text">
                            <div class="container js-parallax wrapper" data-speed="2" data-position="top"
                                data-target="#js-header">
                                <div style="max-width:700px" class="m-auto text-center">
                                    <h4>{{ $row->sub_title }}</h4>
                                    <h1 class="slideshow__slide-caption-title mt-2">{{ $row->title }}
                                    </h1>
                                    {{-- <a class="btn btn-style mt-sm-5 mt-4" href="contact.html">Contact Now</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="c-header-home_footer d-flex justify-content-center mb-3">
                    <div class="o-container wrapper">
                        <div class="c-header-home_controls -nomobile o-button-group">
                            <div class="js-parallax is-inview" data-speed="1" data-position="top"
                                data-target="#js-header">
                                <button
                                    class="o-button -white -square -left js-slider-home-button js-slider-home-prev"
                                    type="button">
                                    <span class="o-button_label">
                                        <svg class="o-button_icon" role="img">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xlink:href="#arrow-prev">
                                            </use>
                                        </svg>
                                    </span>
                                </button>
                                <button class="o-button -white -square js-slider-home-button js-slider-home-next"
                                    type="button">
                                    <span class="o-button_label">
                                        <svg class="o-button_icon" role="img">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xlink:href="#arrow-next">
                                            </use>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg">
                    <symbol viewBox="0 0 18 18" id="arrow-next">
                        <path id="arrow-next-arrow.svg"
                            d="M12.6,9L4,17.3L4.7,18l8.5-8.3l0,0L14,9l0,0l-0.7-0.7l0,0L4.7,0L4,0.7L12.6,9z" />
                    </symbol>
                    <symbol viewBox="0 0 18 18" id="arrow-prev">
                        <path id="arrow-prev-arrow.svg"
                            d="M14,0.7L13.3,0L4.7,8.3l0,0L4,9l0,0l0.7,0.7l0,0l8.5,8.3l0.7-0.7L5.4,9L14,0.7z" />
                    </symbol>
                </svg>
            </section>
        </div>
    </div>
</section>