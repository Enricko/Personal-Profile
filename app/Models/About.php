<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class About extends Model
{
    use HasFactory;
    public function allData(){
        return DB::table('about')->get();
    }
    public function data_1(){
        return DB::table('about')->limit('1')->get();
    }
    public function getData($id){
        return DB::table('about')->where('id',$id)->first();
    }
    public function addData($data){
        DB::table('about')->insert($data);
    }
    public function editData($data,$id){
        DB::table('about')->where('id',$id)->update($data);
    }
    public function deleteData($id){
        return DB::table('about')->where('id',$id)->delete();
    }
}
