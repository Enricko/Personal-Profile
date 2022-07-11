<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{
    use HasFactory;
    public function allData(){
        return DB::table('contact')->get();
    }
    public function data_5(){
        return DB::table('contact')->limit('5')->get();
    }
    public function getData($id){
        return DB::table('contact')->where('id',$id)->first();
    }
    public function addData($data){
        DB::table('contact')->insert($data);
    }
    public function editData($data,$id){
        DB::table('contact')->where('id',$id)->update($data);
    }
    public function deleteData($id){
        return DB::table('contact')->where('id',$id)->delete();
    }
}
