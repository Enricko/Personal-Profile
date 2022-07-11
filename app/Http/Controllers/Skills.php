<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skill;

class Skills extends Controller
{
    public function __construct()
    {
        $this->skill = new skill();
    }
    public function tambah_skill(){
        return view('admin.pages.skill.tambah');
    }
    public function insert(Request $request){

        $request->validate([
            'skill' => 'required',
            'persentage' => 'required',
        ]);

        $data =[
            'skill' => request()->skill,
            'persentage' => request()->persentage,
        ];
        $this->skill->addData($data);
        return redirect()->to('admin/skill')->with('success','Company has been insert successfully');
    }
    public function edit_skill($id){
        $data['skill'] = $this->skill->getData($id);
        return view('admin.pages.skill.edit',$data);
    }
    public function edit(Request $request,$id){
        $data['skill'] = $this->skill->getData($id);
        $request->validate([
            'skill' => 'required',
            'persentage' => 'required',
        ]);
        $data =[
            'skill' => request()->skill,
            'persentage' => request()->persentage,
        ];

        $this->skill->editData($data,$id);
        return redirect()->to('admin/skill')->with('update','Company has been update successfully');
    }
    public function delete($id){
        
        $this->skill->deleteData($id);
        return redirect()->to('admin/skill')->with('delete','Company has been delete successfully');
    }
}
