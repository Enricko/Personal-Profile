@extends('include.admin.app_admin')
@section('title','tambah')
@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-md-7">
                <div class="p-5">
                    <div class="text">
                        <h1 class="h4 text-gray-900 mb-4">Tambah Data about</h1>
                    </div>
                    <form class="user" action="/about/insert" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" name="id" id="exampleInputEmail"
                                placeholder="ID" hidden >
                        </div>
                        <label for="nama">Nama</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="nama" required="" id="nama"
                                placeholder="Nama">
                        </div>          
                        <label for="description">Description</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="description" required="" id="description"
                                placeholder="Description">
                        </div>                    
                        <div class="form-group">
                            <label for="filefoto">Image</label><br>
                            <input type="file"  name="image" placeholder="Image" id="filefoto" required="">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection