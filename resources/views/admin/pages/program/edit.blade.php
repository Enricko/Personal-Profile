@extends('include..admin.app_admin')
@section('title','edit')
@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-md-7">
                <div class="p-5">
                    <div class="text">
                        <h1 class="h4 text-gray-900 mb-4">Tambah Data Program</h1>
                    </div>
                    <form class="user" action="/program/edit/{{ $program->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" name="id" value="{{ $program->id }}" id="exampleInputEmail"
                                placeholder="ID" hidden >
                        </div>
                        <label for="operating_system">Operating System</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="operating_system" value="{{ $program->operating_system }}" required="" id="operating_system"
                                placeholder="Nama program">
                        </div>          
                        <label for="database">Database</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="database" value="{{ $program->database }}" required="" id="database"
                                placeholder="Database">
                        </div>                        
                        <label for="framework">FrameWork</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="framework" value="{{ $program->framework }}" required="" id="framework"
                                placeholder="FrameWork">
                        </div>                        
                        <label for="ide">IDE</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="ide" value="{{ $program->ide }}" required="" id="ide"
                                placeholder="IDE">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection