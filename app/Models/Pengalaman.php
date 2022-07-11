<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengalaman extends Model
{
    use HasFactory;
    public function allData(){
        return DB::table('pengalaman')->get();
    }
    public function data_6(){
        return DB::table('pengalaman')->limit('6')->get();
    }
    public function getData($id){
        return DB::table('pengalaman')->where('id',$id)->first();
    }
    public function addData($data){
        DB::table('pengalaman')->insert($data);
    }
    public function editData($data,$id){
        DB::table('pengalaman')->where('id',$id)->update($data);
    }
    public function deleteData($id){
        return DB::table('pengalaman')->where('id',$id)->delete();
    }
}
