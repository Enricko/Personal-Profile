<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;

class Abouts extends Controller
{
    public function __construct()
    {
        $this->about = new about();
    }
    public function tambah_about(){
        return view('admin.pages.about.tambah');
    }
    public function insert(Request $request){

        $request->validate([
            'image' => 'required',
            'nama' => 'required',
            'description' => 'required',
        ]);
        $file = Request()->image;

        $nama_file = request()->nama.'-'.$file->getClientOriginalName();

        $tujuan_upload = 'image/about';
        $file->move($tujuan_upload,$nama_file);


        $data =[
            'image' => $nama_file,
            'nama' => request()->nama,
            'description' => request()->description,
        ];
        $this->about->addData($data);
        return redirect()->to('admin/about')->with('success','Company has been insert successfully');
    }
    public function edit_about($id){
        $data['about'] = $this->about->getData($id);
        return view('admin.pages.about.edit',$data);
    }
    public function edit(Request $request,$id){
        $data['about'] = $this->about->getData($id);
        $request->validate([
            'image' => 'required',
            'nama' => 'required',
            'description' => 'required',
        ]);
        $file = Request()->image;

        $nama_file = request()->nama.'-'.$file->getClientOriginalName();

        $tujuan_upload = 'image/about';
        $file->move($tujuan_upload,$nama_file);

        $tmp = public_path('image/about/'.$data['about']->image);

        if (file_exists($tmp)) {
            unlink($tmp);
        }

        $data =[
            'image' => $nama_file,
            'nama' => request()->nama,
            'description' => request()->description,
        ];

        $this->about->editData($data,$id);
        return redirect()->to('admin/about')->with('update','Company has been update successfully');
    }
    public function delete($id){
        
        $data['about'] = $this->about->getData($id);
        $tmp = public_path('image/about/'.$data['about']->image);

        if (file_exists($tmp)) {
            unlink($tmp);
        }
        $this->about->deleteData($id);
        return redirect()->to('admin/about')->with('delete','Company has been delete successfully');
    }
}
