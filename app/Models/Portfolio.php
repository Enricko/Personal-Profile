<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Portfolio extends Model
{
    use HasFactory;

    public function allData(){
        return DB::table('portfolio')->get();
    }
    public function getData($id){
        return DB::table('portfolio')->where('id',$id)->first();
    }
    public function addData($data){
        DB::table('portfolio')->insert($data);
    }
    public function editData($data,$id){
        DB::table('portfolio')->where('id',$id)->update($data);
    }
    public function deleteData($id){
        return DB::table('portfolio')->where('id',$id)->delete();
    }
}
