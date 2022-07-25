<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Pengalaman;
use App\Models\Carousel;
use App\Models\About;
use App\Models\Skill;
use App\Models\Personal_info;
use App\Models\Program;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class Frontend extends Controller
{
    public function __construct()
    {
        $this->portfolio = new Portfolio();
        $this->pengalaman = new Pengalaman();
        $this->service = new Service();
        $this->carousel = new carousel();
        $this->about = new About();
        $this->skill = new Skill();
        $this->personal_info = new Personal_info();
        $this->program = new Program();
    }
    public function index(){
        $data['port'] = $this->portfolio->allData();
        $data['pengalaman_6'] = $this->pengalaman->data_6();
        $data['service_4'] = $this->service->data_4();
        $data['carousel_5'] = $this->carousel->data_5();
        $data['about'] = $this->about->data_1();
        $data['skill'] = $this->skill->allData();
        $data['personal_info'] = $this->personal_info->allData();
        return view('frontend.index',$data);
    }
    public function cv(){
        $data['port'] = $this->portfolio->allData();
        $data['pengalaman'] = $this->pengalaman->allData();
        $data['service'] = $this->service->allData();
        $data['carousel'] = $this->carousel->allData();
        $data['about'] = $this->about->allData();
        $data['skill'] = $this->skill->allData();
        $data['personal_info'] = $this->personal_info->allData();
        $data['program'] = $this->program->allData();
        return view('frontend.cv',$data);
    }
    public function all_port(){
        $count = $this->portfolio->allData();
        if($count->count() <= 6){
            return redirect()->to('/#portfolio');
        }else{
            $data['port'] = DB::table('portfolio')->orderByDesc('id')->paginate('9');
            return view('frontend.all.all_portfolio',$data);
        }
        
    }
    public function all_pengalaman(){
        $count = $this->pengalaman->allData();
        if($count->count() <= 6){
            return redirect()->to('/#pengalaman');
        }else{
            $data['pengalaman'] = DB::table('pengalaman')->orderByDesc('id')->paginate('9');
            return view('frontend.all.all_pengalaman',$data);
        }
    }
    public function all_service(){
        $count = $this->service->allData();
        if($count->count() <= 4){
            return redirect()->to('/#service');
        }else{
            $data['service'] = DB::table('service')->orderByDesc('id')->paginate('9');
            return view('frontend.all.all_service',$data);
        }
    }
}
