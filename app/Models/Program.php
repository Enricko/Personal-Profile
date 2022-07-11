<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Program extends Model
{
    use HasFactory;
    public function allData(){
        return DB::table('program')->get();
    }
    public function getData($id){
        return DB::table('program')->where('id',$id)->first();
    }
    public function addData($data){
        DB::table('program')->insert($data);
    }
    public function editData($data,$id){
        DB::table('program')->where('id',$id)->update($data);
    }
    public function deleteData($id){
        return DB::table('program')->where('id',$id)->delete();
    }
}
