<section class="w3l-aboutblock py-5">
    <div class="container py-md-5 py-sm-4">
        <div class="row">
            @foreach($about as $row)
            <div class="col-lg-6 left-wthree-img mb-lg-0 mb-md-5 mb-4">
                <img class="img-fluid img-responsive" src="{{  asset('image')  }}/about/{{ $row->image }}" alt=" ">
            </div>
            <div class="col-lg-6 about-right-faq align-self position-relative pl-lg-5">
                <h3 class="title-style mb-2 pl-4">{{ $row->nama }}
                </h3>
                <p class="mt-3 pl-4">{{$row->description}}</p>
                <a class="btn btn-style mt-4 ml-4" href="/cv" target="_blank">View CV</a>
                @foreach($skill as $row)
                <h4 class="title-style mb-2 mt-4">{{ $row->skill }}<span class="float-right">{{ $row->persentage.'%' }}</span></h4>
                    @if($row->persentage >= 80)
                        <div class="progress">
                            <div class="progress-bar progress-bar-animated bg-success" role="progressbar"
                            aria-valuenow="{{ $row->persentage }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $row->persentage.'%' }}">
                            {{ $row->persentage.'%' }}
                            </div>
                        </div>
                    @endif
                    @if($row->persentage >= 60 && $row->persentage <= 79)
                        <div class="progress">
                            <div class="progress-bar progress-bar-animated bg-info" role="progressbar"
                            aria-valuenow="{{ $row->persentage }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $row->persentage.'%' }}">
                            {{ $row->persentage.'%' }}
                            </div>
                        </div>
                    @endif
                    @if($row->persentage >= 40 && $row->persentage <= 59)
                        <div class="progress">
                            <div class="progress-bar progress-bar-animated bg-primary" role="progressbar"
                            aria-valuenow="{{ $row->persentage }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $row->persentage.'%' }}">
                            {{ $row->persentage.'%' }}
                            </div>
                        </div>
                    @endif
                    @if($row->persentage >= 20 && $row->persentage <= 39)
                        <div class="progress">
                            <div class="progress-bar progress-bar-animated bg-warning" role="progressbar"
                            aria-valuenow="{{ $row->persentage }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $row->persentage.'%' }}">
                            {{ $row->persentage.'%' }}
                            </div>
                        </div>
                    @endif
                    @if($row->persentage >= 0 && $row->persentage <= 19)
                        <div class="progress">
                            <div class="progress-bar progress-bar-animated bg-danger" role="progressbar"
                            aria-valuenow="{{ $row->persentage }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $row->persentage.'%' }}">
                            {{ $row->persentage.'%' }}
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>