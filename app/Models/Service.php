<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Service extends Model
{
    use HasFactory;
    public function allData(){
        return DB::table('service')->orderByDesc('id')->get();
    }
    public function data_4(){
        return DB::table('service')->limit('4')->get();
    }
    public function getData($id){
        return DB::table('service')->where('id',$id)->first();
    }
    public function addData($data){
        DB::table('service')->insert($data);
    }
    public function editData($data,$id){
        DB::table('service')->where('id',$id)->update($data);
    }
    public function deleteData($id){
        return DB::table('service')->where('id',$id)->delete();
    }
}
