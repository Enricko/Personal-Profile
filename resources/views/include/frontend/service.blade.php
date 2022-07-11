<section class="w3l-feature-8">
    <div class="container py-md-5 py-4">
        <div class="style-title text-center position-relative mb-3">
            <h1 class="title-style">Service
            </h1>
            <p class="text-para">Melayani segala service yang tersedia
            </p>
        </div>
        <div class="row features text-center py-lg-5">
            @foreach($service_4 as $row)
            <div class="col-lg-3 col-sm-6 feature-1">
                <div class="feature-body">
                    <div class="feature-images pb-sm-3 pb-1">
                        <img src="{{  asset('image')  }}/service/{{ $row->image }}" alt="" class="img-fluid">
                    </div>
                    <div class="feature-info mt-3">
                        <a href="about.html">
                            <h3 class="feature-titel">
                                {{ $row->title }}
                            </h3>
                        </a>
                        <p class="feature-text">{{ $row->description }}</p>
                        {{-- <a href="about.html" class="btn btn-style btn-style-normal mt-4">More Info</a> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <hr id="blog">
</section>