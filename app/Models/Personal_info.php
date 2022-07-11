<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Personal_info extends Model
{
    use HasFactory;
    public function allData(){
        return DB::table('personal_info')->get();
    }
    public function getData($id){
        return DB::table('personal_info')->where('id',$id)->first();
    }
    public function addData($data){
        DB::table('personal_info')->insert($data);
    }
    public function editData($data,$id){
        DB::table('personal_info')->where('id',$id)->update($data);
    }
    public function deleteData($id){
        return DB::table('personal_info')->where('id',$id)->delete();
    }
}
