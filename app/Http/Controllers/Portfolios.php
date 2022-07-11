<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class Portfolios extends Controller
{
    public function __construct()
    {
        $this->Portfolio = new Portfolio();
    }
    public function tambah_portfolio(){
        return view('admin.pages.portfolio.tambah');
    }
    public function insert(Request $request){

        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'institution' => 'required',
            'link' => 'required',
            'year' => 'required',
        ]);
        $file = Request()->image;

        $nama_file = request()->title.'-'.$file->getClientOriginalName();

        $tujuan_upload = 'image/portfolio';
        $file->move($tujuan_upload,$nama_file);

        $data =[
            'image' => $nama_file,
            'title' => request()->title,
            'description' => request()->description,
            'institution' => request()->institution,
            'link' => request()->link,
            'year' => request()->year,
        ];
        $this->Portfolio->addData($data);
        return redirect()->to('admin/portfolio')->with('success','Company has been insert successfully');
    }
    public function edit_portfolio($id){
        $data['portfolio'] = $this->Portfolio->getData($id);
        return view('admin.pages.portfolio.edit',$data);
    }
    public function edit(Request $request,$id){
        $data['portfolio'] = $this->Portfolio->getData($id);
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'institution' => 'required',
            'link' => 'required',
            'year' => 'required',
        ]);
        $file = Request()->image;

        $nama_file = request()->title.'-'.$file->getClientOriginalName();

        $tujuan_upload = 'image/portfolio';
        $file->move($tujuan_upload,$nama_file);

        $tmp = public_path('image/portfolio/'.$data['portfolio']->image);

        if (file_exists($tmp)) {
            unlink($tmp);
        }
        $data =[
            'image' => $nama_file,
            'title' => request()->title,
            'description' => request()->description,
            'institution' => request()->institution,
            'link' => request()->link,
            'year' => request()->year,
        ];

        $this->Portfolio->editData($data,$id);
        return redirect()->to('admin/portfolio')->with('update','Company has been update successfully');
    }
    public function delete($id){
        
        $data['portfolio'] = $this->Portfolio->getData($id);
        $tmp = public_path('image/portfolio/'.$data['portfolio']->image);

        if (file_exists($tmp)) {
            unlink($tmp);
        }
        $this->Portfolio->deleteData($id);
        return redirect()->to('admin/portfolio')->with('delete','Company has been delete successfully');
    }
}
