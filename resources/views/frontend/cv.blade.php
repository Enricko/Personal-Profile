<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My CV</title>
    <link href="//fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Halant:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style-starter.css">
</head>
<body>
    <div class="d-flex justify-content-center no-print" style="background-color:white;z-index:10;">
        <h5 style="color:red;">Bila gambar / background tidak muncul, ceklis background graphics (more options >> Background Graphics)&nbsp;
        <a href="" class="btn btn-style" onclick="window.print()">Cetak</a></h5>
    </div>
    <div style="background-color:cyan;height:300px;">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="mt-3" style="color:white;font-size:45px;font-weight:700;letter-spacing: 2px;line-height:1.1;">Enricko Putra Hartono</h1>
            @foreach($about as $row)
                <div class="mt-5">    
                    <img class="img-fluid img-responsive" src="{{  asset('image')  }}/about/{{ $row->image }}" alt=" " style="width:200px;border-radius:1000px;">
                </div>
            @endforeach
        </div>
    </div>
    <div style="background-color:rgb(233, 233, 233);height:23px;"></div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 col-sm-12 mt-3">
                @foreach($personal_info as $row)
                <h5 class="title-style">Personal Info</h5>
                <p class="mt-1" style="font-weight:700;">Name</p>
                <p>{{ $row->nama }}</p>
                <p class="mt-1" style="font-weight:700;">Email</p>
                <p>{{ $row->email }}</p>
                <p class="mt-1" style="font-weight:700;">Nationality</p>
                <p>{{ $row->nationality }}</p>
                <p class="mt-1" style="font-weight:700;">Gender</p>
                <p>{{ $row->gender }}</p>
                <p class="mt-1" style="font-weight:700;">Current Job</p>
                <p>{{ $row->current_job }}</p>
                @endforeach

                <h5 class="title-style mt-4">Skills</h5>
                @foreach($skill as $row)
                    <div class="col-10">
                        <p class="mb-1 mt-1">{{ $row->skill }}<span class="float-right">{{ $row->persentage.'%' }}</span></h4>
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
                    </div>
                @endforeach
                <h5 class="title-style">Avaliable Service</h5>
                @foreach($service as $row)
                <p class="mt-1" style="font-weight:700;">{{ $row->title }}</p>
                @endforeach
                @foreach($program as $row)
                <p class="mt-1" style="font-weight:700;">Operating System</p>
                <p>{{ $row->operating_system }}</p>
                <p class="mt-1" style="font-weight:700;">Database</p>
                <p>{{ $row->database }}</p>
                <p class="mt-1" style="font-weight:700;">Framework</p>
                <p>{{ $row->framework }}</p>
                <p class="mt-1" style="font-weight:700;">IDE</p>
                <p>{{ $row->ide }}</p>
                @endforeach
            </div>
            <div class="col-md-7 col-sm-12 mt-3">
                <h5 class="title-style">Education And Experience</h5>
                @foreach($pengalaman as $row)
                <h2 class="title-style">{{ $row->title }} --
                <span class="title-style">{{ $row->start_year.' - '.$row->end_year }}</span></h2>
                @endforeach
                <h5 class="title-style mt-5">Project</h5>
                @foreach($port as $row)
                    <div class="info">
                        <h6 class="info-title">YEAR</h6>
                        <h6 class="info-subtitle">{{ $row->year }}</h6>
                    </div>
                    <div class="info">
                        <h6 class="info-title">PROJECT</h6>
                        <h6 class="info-subtitle">{{ $row->title }}</h6>
                    </div>
                    <div class="info">
                        <h6 class="info-title">INSTITUTION</h6>
                        <h6 class="info-subtitle">{{ $row->institution }}</h6>
                    </div>
                    <div class="info">
                        <h6 class="info-title">PROJECT URL</h6>
                        <h6 class="info-subtitle"><a href="//{{ $row->link }}/" target="_blank" style="text-decoration:none;">{{ $row->link }}</a></h6>
                    </div>
                    <hr class="divider-cv">
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>