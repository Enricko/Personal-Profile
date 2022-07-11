<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class Contacts extends Controller
{
    public function __construct()
    {
        $this->contact = new contact();
    }
    public function tambah_contact(){
        return view('admin.pages.contact.tambah');
    }
    public function insert(Request $request){

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $data =[
            'nama' => str_replace('script','',request()->nama),
            'email' => request()->email,
            'phone' => request()->phone,
            'message' => str_replace('script','',request()->message),
        ];
        $this->contact->addData($data);
        return redirect()->to('/#contact-us')->with('success','Message has been send successfully');
    }
    public function delete($id){
        
        $data['contact'] = $this->contact->getData($id);

        $this->contact->deleteData($id);
        return redirect()->to('admin/contact')->with('delete','Company has been delete successfully');
    }
}
