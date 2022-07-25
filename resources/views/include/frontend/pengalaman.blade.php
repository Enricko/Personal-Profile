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
                        <img src="{{  asset('image')  }}/pengalaman/{{ $row->image }}" class="img-fluid img-responsive" alt="news image" style="width:100%;height:250px">
                    <div class="title-wrap text-center">
                            <h4 class="title">{{ $row->title }}</h4>
                            <h6>{{ $row->start_year.' - '.$row->end_year }}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @if($pengalaman_6->count() >= 6)
        <div class="d-flex justify-content-center mt-3 text-center mb-3">
            <a href="/pengalaman" class="btn btn-info" style="border-radius:25px;height:40px;width:200px;">View All Pengalaman</a>
        </div>
    @endif
    <hr id="portfolio">
</section>