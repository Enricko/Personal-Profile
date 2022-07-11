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
                        <h1 class="h4 text-gray-900 mb-4">Tambah Data Personal Info</h1>
                    </div>
                    <form class="user" action="/personal_info/insert" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" name="id" id="exampleInputEmail"
                                placeholder="ID" hidden >
                        </div>
                        <label for="nama">Nama</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="nama" required="" id="title"
                                placeholder="Nama">
                        </div>          
                        <label for="email">Email</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="email" required="" id="email"
                                placeholder="Email">
                        </div>                        
                        <label for="nationality">Nationality</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="nationality" required="" id="nationality"
                                placeholder="Nationality">
                        </div>          
                        <label for="Gender">Gender</label><br>
                        <select class="mb-3 text-center" name="gender" id="gender" style="width:120px;height:30px;border-radius:20px;">
                            <option value="Male" class=>Male</option>    
                            <option value="women">Women</option>    
                        </select><br>                        
                        <label for="Gender">Current Job</label><br>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="current_job" required="" id="current_job"
                                placeholder="Current Job">
                        </div>  
                        <label for="alamat">Alamat</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="alamat" required="" id="alamat"
                                placeholder="Alamat">
                        </div>  
                        <label for="phone">Phone</label>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" name="phone" required="" id="phone"
                                placeholder="Phone">
                        </div>  
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection