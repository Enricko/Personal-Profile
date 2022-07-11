<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Carousel extends Model
{
    use HasFactory;
    public function allData(){
        return DB::table('carousel')->get();
    }
    public function data_5(){
        return DB::table('carousel')->limit('5')->get();
    }
    public function getData($id){
        return DB::table('carousel')->where('id',$id)->first();
    }
    public function addData($data){
        DB::table('carousel')->insert($data);
    }
    public function editData($data,$id){
        DB::table('carousel')->where('id',$id)->update($data);
    }
    public function deleteData($id){
        return DB::table('carousel')->where('id',$id)->delete();
    }
}
