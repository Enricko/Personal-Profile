<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\program;

class Programs extends Controller
{
    public function __construct()
    {
        $this->program = new program();
    }
    public function tambah_program(){
        return view('admin.pages.program.tambah');
    }
    public function insert(Request $request){

        $request->validate([
            'operating_system' => 'required',
            'database' => 'required',
            'framework' => 'required',
            'ide' => 'required',
        ]);

        $data =[
            'operating_system' => request()->operating_system,
            'database' => request()->database,
            'framework' => request()->framework,
            'ide' => request()->ide,
        ];
        $this->program->addData($data);
        return redirect()->to('admin/program')->with('success','Company has been insert successfully');
    }
    public function edit_program($id){
        $data['program'] = $this->program->getData($id);
        return view('admin.pages.program.edit',$data);
    }
    public function edit(Request $request,$id){
        $data['program'] = $this->program->getData($id);
        $request->validate([
            'operating_system' => 'required',
            'database' => 'required',
            'framework' => 'required',
            'ide' => 'required',
        ]);

        $data =[
            'operating_system' => request()->operating_system,
            'database' => request()->database,
            'framework' => request()->framework,
            'ide' => request()->ide,
        ];

        $this->program->editData($data,$id);
        return redirect()->to('admin/program')->with('update','Company has been update successfully');
    }
    public function delete($id){


        $this->program->deleteData($id);
        return redirect()->to('admin/program')->with('delete','Company has been delete successfully');
    }
}
