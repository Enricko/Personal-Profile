<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Skill extends Model
{
    use HasFactory;
    public function allData(){
        return DB::table('skill')->get();
    }
    public function data_5(){
        return DB::table('skill')->limit('5')->get();
    }
    public function getData($id){
        return DB::table('skill')->where('id',$id)->first();
    }
    public function addData($data){
        DB::table('skill')->insert($data);
    }
    public function editData($data,$id){
        DB::table('skill')->where('id',$id)->update($data);
    }
    public function deleteData($id){
        return DB::table('skill')->where('id',$id)->delete();
    }
}
