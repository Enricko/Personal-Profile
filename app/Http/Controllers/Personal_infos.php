<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personal_info;

class Personal_infos extends Controller
{
    public function __construct()
    {
        $this->personal_info = new personal_info();
    }
    public function tambah_personal_info(){
        return view('admin.pages.personal_info.tambah');
    }
    public function insert(Request $request){

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            'current_job' => 'required',
            'alamat' => 'required',
            'phone' => 'required',
        ]);

        $data =[
            'nama' => request()->nama,
            'email' => request()->email,
            'nationality' => request()->nationality,
            'gender' => request()->gender,
            'current_job' => request()->current_job,
            'alamat' => request()->alamat,
            'phone' => request()->phone,
        ];
        $this->personal_info->addData($data);
        return redirect()->to('admin/personal_info')->with('success','Company has been insert successfully');
    }
    public function edit_personal_info($id){
        $data['personal_info'] = $this->personal_info->getData($id);
        return view('admin.pages.personal_info.edit',$data);
    }
    public function edit(Request $request,$id){
        $data['personal_info'] = $this->personal_info->getData($id);
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            'current_job' => 'required',
            'alamat' => 'required',
            'phone' => 'required',
        ]);

        $data =[
            'nama' => request()->nama,
            'email' => request()->email,
            'nationality' => request()->nationality,
            'gender' => request()->gender,
            'current_job' => request()->current_job,
            'alamat' => request()->alamat,
            'phone' => request()->phone,
        ];

        $this->personal_info->editData($data,$id);
        return redirect()->to('admin/personal_info')->with('update','Company has been update successfully');
    }
    public function delete($id){
        
        $data['personal_info'] = $this->personal_info->getData($id);

        $this->personal_info->deleteData($id);
        return redirect()->to('admin/personal_info')->with('delete','Company has been delete successfully');
    }
}
