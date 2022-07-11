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
                        <h1 class="h4 text-gray-900 mb-4">Tambah Data Skill</h1>
                    </div>
                    <form class="user" action="/skill/insert" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" name="id" id="exampleInputEmail"
                                placeholder="ID" hidden >
                        </div>
                        <label for="skill">Skill</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="skill" required="" id="skill"
                                placeholder="Skill">
                        </div>          
                        <label for="persentage">Persentage</label>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" name="persentage" required="" max="100" id="persentage"
                                placeholder="persentage">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection