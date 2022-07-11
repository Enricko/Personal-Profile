<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;

class Services extends Controller
{
    public function __construct()
    {
        $this->service = new service();
    }
    public function tambah_service(){
        return view('admin.pages.service.tambah');
    }
    public function insert(Request $request){

        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        $file = Request()->image;

        $nama_file = request()->title.'-'.$file->getClientOriginalName();

        $tujuan_upload = 'image/service';
        $file->move($tujuan_upload,$nama_file);

        $data =[
            'image' => $nama_file,
            'title' => request()->title,
            'description' => request()->description,
        ];
        $this->service->addData($data);
        return redirect()->to('admin/service')->with('success','Company has been insert successfully');
    }
    public function edit_service($id){
        $data['service'] = $this->service->getData($id);
        return view('admin.pages.service.edit',$data);
    }
    public function edit(Request $request,$id){
        $data['service'] = $this->service->getData($id);
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        $file = Request()->image;

        $nama_file = request()->title.'-'.$file->getClientOriginalName();

        $tujuan_upload = 'image/service';
        $file->move($tujuan_upload,$nama_file);

        $tmp = public_path('image/service/'.$data['service']->image);

        if (file_exists($tmp)) {
            unlink($tmp);
        }
        $data =[
            'image' => $nama_file,
            'title' => request()->title,
            'description' => request()->description,
        ];

        $this->service->editData($data,$id);
        return redirect()->to('admin/service')->with('update','Company has been update successfully');
    }
    public function delete($id){
        
        $data['service'] = $this->service->getData($id);
        $tmp = public_path('image/service/'.$data['service']->image);

        if (file_exists($tmp)) {
            unlink($tmp);
        }
        $this->service->deleteData($id);
        return redirect()->to('admin/service')->with('delete','Company has been delete successfully');
    }
}
