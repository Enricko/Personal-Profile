<section class="w3l-features">
    <div class="container py-lg-5 py-4">
        <div class="style-title text-center position-relative mb-5">
            <h1 class="title-style">Portfolio
            </h1>
            <p class="text-para">Semua hasil yang telah ku buat selama menjadi fullstack web devoloper.
            </p>
        </div>
        <div class="row">
            <div class="container text-center">
                @foreach ($port as $row)
                    <a href="#popup{{ $row->id }}">
                        <img src="{{  asset('image')  }}/portfolio/{{ $row->image }}" class="portfolio" alt=""/>
                    </a>
                    
                @endforeach
            </div>
            @foreach ($port as $row)
            <div id="popup{{ $row->id }}" class="overlay">
                <div class="popup scroll-port" style="margin-top:100px;">
                    <a href="//{{ $row->link }}">
                        <img src="{{  asset('image')  }}/portfolio/{{ $row->image }}" alt="Popup Image" class="img-fluid" style="width:500px;background-size:cover; background-position: center center;border-radius:5px;"/>
                    </a>
                    <div class="text-center">
                        <h5 class="title-port mt-5">{{ $row->title }}</h5>
                        <p class="mt-4 mb-4">{{ $row->description }}</p>
                    </div>
                    <div class="info">
                        <h6 class="info-title-port">MADE IN  </h6>
                        <h6 class="info-subtitle-port">{{ $row->year }}</h6>
                    </div>
                    <div class="info">
                        <h6 class="info-title-port">INSTITUTION  </h6>
                        <h6 class="info-subtitle-port">{{ $row->institution }} </h6>
                    </div>
                    <div class="info">
                        <h6 class="info-title-port" >PROJECT URL  </h6>
                        <a class="info-subtitle-port" href="//{{ $row->link }}">{{ $row->link }} </a>
                    </div>
                    <a class="close" href="#portfolio">&times;</a>
                </div>
            </div>
            @endforeach
        </div>
        @if($port->count() >= 6)
        <div class="d-flex justify-content-center mt-3 text-center mb-3">
            <a href="/portfolio" class="btn btn-info" style="border-radius:25px;height:40px;width:200px;">View All Portfolio</a>
        </div>
        @endif
    </div>
</section>
