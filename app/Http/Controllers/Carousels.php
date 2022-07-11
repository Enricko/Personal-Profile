<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carousel;

class Carousels extends Controller
{
    public function __construct()
    {
        $this->carousel = new carousel();
    }
    public function tambah_carousel(){
        return view('admin.pages.carousel.tambah');
    }
    public function insert(Request $request){

        $request->validate([
            'image' => 'required',
            'sub_title' => 'required',
            'title' => 'required',
        ]);
        $file = Request()->image;

        $nama_file = request()->title.'-'.$file->getClientOriginalName();

        $tujuan_upload = 'image/carousel';
        $file->move($tujuan_upload,$nama_file);

        $data =[
            'image' => $nama_file,
            'sub_title' => request()->sub_title,
            'title' => request()->title,
        ];
        $this->carousel->addData($data);
        return redirect()->to('admin/carousel')->with('success','Company has been insert successfully');
    }
    public function edit_carousel($id){
        $data['carousel'] = $this->carousel->getData($id);
        return view('admin.pages.carousel.edit',$data);
    }
    public function edit(Request $request,$id){
        $data['carousel'] = $this->carousel->getData($id);
        $request->validate([
            'image' => 'required',
            'sub_title' => 'required',
            'title' => 'required',
        ]);
        $file = Request()->image;

        $nama_file = request()->title.'-'.$file->getClientOriginalName();

        $tujuan_upload = 'image/carousel';
        $file->move($tujuan_upload,$nama_file);

        $tmp = public_path('image/carousel/'.$data['carousel']->image);

        if (file_exists($tmp)) {
            unlink($tmp);
        }
        $data =[
            'image' => $nama_file,
            'sub_title' => request()->sub_title,
            'title' => request()->title,
        ];

        $this->carousel->editData($data,$id);
        return redirect()->to('admin/carousel')->with('update','Company has been update successfully');
    }
    public function delete($id){
        
        $data['carousel'] = $this->carousel->getData($id);
        $tmp = public_path('image/carousel/'.$data['carousel']->image);

        if (file_exists($tmp)) {
            unlink($tmp);
        }
        $this->carousel->deleteData($id);
        return redirect()->to('admin/carousel')->with('delete','Company has been delete successfully');
    }
}
