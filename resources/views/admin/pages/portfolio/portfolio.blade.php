@extends('include.admin.app_admin')
@section('title','table')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables Portfolio</h1>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ $message }}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if ($message = Session::get('update'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p>{{ $message }}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if ($message = Session::get('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <p>{{ $message }}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Portfolio
                <a href="/admin/portfolio/tambah_portfolio" class="btn btn-primary float-right">Tambah Data</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Institution</th>
                            <th>Link</th>
                            <th>Year</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                        ?>
                        @foreach ($portfolio as $row)
                        <tr>
                            <td><?=$no++?></td>
                            <td><img src="{{ asset('image/portfolio/'.$row->image) }}" alt="" style="width:150px"></td>
                            <td>{{ $row->title }}</td>
                            <td>{{ $row->description }}</td>
                            <td>{{ $row->institution }}</td>
                            <td>{{ $row->link }}</td>
                            <td>{{ $row->year }}</td>
                            <td>
                                <a class="btn btn-warning" href="/admin/portfolio/edit_portfolio/{{ $row->id }}">Edit</a>
                                <a class="btn btn-danger" href="/admin/portfolio/delete/{{ $row->id }}" onclick="return confirm('Apakah anda yakin?')">Delete</a>
                            </td>
                        <tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection