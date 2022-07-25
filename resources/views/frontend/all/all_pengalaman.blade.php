@extends('include.frontend.app_front')
@section('title','all_pengalaman')
@section('content')
<section class="w3l-news-sec pb-5" id="dept" style="margin-top:90px;">
    <div class="news-mainhny py-md-5 py-4">
        <div class="container text-center">
            <div class="title-main text-center mx-auto mb-4" style="max-width:700px;">
                <h3 class="title-style">Pengalaman / Pendidikan</h3>
                <p class="sub-title mt-2">Pengalaman / Pendidikan yang ku tempuh</p>
            </div>
        </div>
        <div class="row container d-flex justify-content-center">
        @foreach($pengalaman as $row)
                <div class="title-wrap text-center mb-3">
                    <img src="{{  asset('image')  }}/pengalaman/{{ $row->image }}" class="img-fluid img-responsive" alt="news image" style="width:350px;height:175px;margin:7px;"></a>
                    <h4 class="title">{{ $row->title }}</h4>
                    <h6>{{ $row->start_year.' - '.$row->end_year }}</h6>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $pengalaman->render() }}
        </div>
    </div>
</section>
@endsection