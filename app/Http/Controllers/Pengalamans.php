<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengalaman;

class Pengalamans extends Controller
{
    public function __construct()
    {
        $this->Pengalaman = new pengalaman();
    }
    public function tambah_pengalaman(){
        return view('admin.pages.pengalaman.tambah');
    }
    public function insert(Request $request){

        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'start_year' => 'required',
            'end_year' => 'required',
        ]);
        $file = Request()->image;

        $nama_file = request()->title.'-'.$file->getClientOriginalName();

        $tujuan_upload = 'image/pengalaman';
        $file->move($tujuan_upload,$nama_file);

        $data =[
            'image' => $nama_file,
            'title' => request()->title,
            'description' => request()->description,
            'start_year' => request()->start_year,
            'end_year' => request()->end_year,
        ];
        $this->Pengalaman->addData($data);
        return redirect()->to('admin/pengalaman')->with('success','Company has been insert successfully');
    }
    public function edit_pengalaman($id){
        $data['pengalaman'] = $this->Pengalaman->getData($id);
        return view('admin.pages.pengalaman.edit',$data);
    }
    public function edit(Request $request,$id){
        $data['pengalaman'] = $this->Pengalaman->getData($id);
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'start_year' => 'required',
            'end_year' => 'required',
        ]);
        $file = Request()->image;

        $nama_file = request()->title.'-'.$file->getClientOriginalName();

        $tujuan_upload = 'image/pengalaman';
        $file->move($tujuan_upload,$nama_file);

        $tmp = public_path('image/pengalaman/'.$data['pengalaman']->image);

        if (file_exists($tmp)) {
            unlink($tmp);
        }
        $data =[
            'image' => $nama_file,
            'title' => request()->title,
            'description' => request()->description,
            'start_year' => request()->start_year,
            'end_year' => request()->end_year,
        ];

        $this->Pengalaman->editData($data,$id);
        return redirect()->to('admin/pengalaman')->with('update','Company has been update successfully');
    }
    public function delete($id){
        
        $data['pengalaman'] = $this->Pengalaman->getData($id);
        $tmp = public_path('image/pengalaman/'.$data['pengalaman']->image);

        if (file_exists($tmp)) {
            unlink($tmp);
        }
        $this->Pengalaman->deleteData($id);
        return redirect()->to('admin/pengalaman')->with('delete','Company has been delete successfully');
    }
}
