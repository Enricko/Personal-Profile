<section class="w3l-news-sec pb-5" id="dept">
    <div class="news-mainhny py-md-5 py-4">
        <div class="container text-center">
            <div class="title-main text-center mx-auto mb-4" style="max-width:700px;">
                <h3 class="title-style">Pengalaman / Pendidikan</h3>
                <p class="sub-title mt-2">Pengalaman / Pendidikan yang ku tempuh</p>
            </div>
        </div>
        <div class="owl-news owl-carousel owl-theme py-4">
            @foreach($pengalaman_6 as $row)
            <div class="item">
                <div class="news-img position-relative">
                    <a href="#">
                        <img src="{{  asset('image')  }}/pengalaman/{{ $row->image }}" class="img-fluid img-responsive" alt="news image" style="width:100%;height:250px"></a>
                    <div class="title-wrap">
                        <a href="#">
                            <h4 class="title">{{ $row->title }}</h4>
                            <h6>{{ $row->start_year.' - '.$row->end_year }}</h6>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <hr id="portfolio">
</section>