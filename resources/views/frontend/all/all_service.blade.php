@extends('include.frontend.app_front')
@section('title','all_service')
@section('content')
<section class="w3l-feature-8" style="margin-top:90px;">
    <div class="container py-md-5 py-4">
        <div class="style-title text-center position-relative mb-3">
            <h1 class="title-style">Service
            </h1>
            <p class="text-para">Melayani segala service yang tersedia
            </p>
        </div>
        <div class="row features text-center d-flex justify-content-center py-lg-5">
            @foreach($service as $row)
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
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $service->render() }}
    </div>
</section>
@endsection