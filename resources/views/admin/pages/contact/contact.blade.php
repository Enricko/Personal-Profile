@extends('include.admin.app_admin')
@section('title','table')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables contact</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data contact
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                        ?>
                        @foreach ($contact as $row)
                        <tr>
                            <td><?=$no++?></td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->email }}</td>
                            <td>0{{ $row->phone }}</td>
                            <td style="width:300px;">
                                @if(strlen($row->message) >= 100)
                                    {{ wordwrap(substr($row->message,0,100),33,"\n") }}
                                    <a href="#popup{{ $row->id }}">Read More...</a>
                                @else
                                    {{ $row->message }}
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-danger" href="/admin/contact/delete/{{ $row->id }}" onclick="return confirm('Apakah anda yakin?')">Delete</a>
                            </td>
                        <tr>
                            <div id="popup{{ $row->id }}" class="overlay">
                                <div class="popup scroll-port" style="margin-top:100px;">
                                    <div class="info">
                                        <h6 class="info-title-port">Name  </h6>
                                        <h6 class="info-subtitle-port">{{ ucfirst($row->nama) }}</h6>
                                    </div>
                                    <div class="info">
                                        <h6 class="info-title-port">Email  </h6>
                                        <h6 class="info-subtitle-port">{{ $row->email }} </h6>
                                    </div>
                                    <div class="info">
                                        <h6 class="info-title-port" >Phone  </h6>
                                        <h6 class="info-subtitle-port">{{ $row->phone }} </h6>
                                    </div>
                                    <div class="text-center mt-3">
                                        <h3>MESSAGE:</h3>
                                        <p class="mt-4 mb-4">{{ $row->message }}</p>
                                    </div>
                                    <a class="close" href="#">&times;</a>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection