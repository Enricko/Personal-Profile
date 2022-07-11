<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Pengalaman;
use App\Models\Service;
use App\Models\Carousel;
use App\Models\About;
use App\Models\Skill;
use App\Models\Personal_info;
use App\Models\Program;
use App\Models\Contact;

class Admin extends Controller
{
    public function __construct()
    {
        $this->portfolio = new Portfolio();
        $this->pengalaman = new Pengalaman();
        $this->service = new Service();
        $this->carousel = new Carousel();
        $this->about = new About();
        $this->skill = new Skill();
        $this->program = new Program();
        $this->personal_info = new Personal_info();
        $this->contact = new Contact();
        $this->middleware('auth');
    }
    public function index(){
        return view('admin.index');
    }
    public function portfolio(){
        $data['portfolio'] = $this->portfolio->allData();
        return view('admin.pages.portfolio.portfolio', $data);
    }
    public function pengalaman(){
        $data['pengalaman'] = $this->pengalaman->allData();
        return view('admin.pages.pengalaman.pengalaman', $data);
    }
    public function service(){
        $data['service'] = $this->service->allData();
        return view('admin.pages.service.service', $data);
    }
    public function carousel(){
        $data['carousel'] = $this->carousel->allData();
        return view('admin.pages.carousel.carousel', $data);
    }
    public function about(){
        $data['about'] = $this->about->allData();
        return view('admin.pages.about.about', $data);
    }
    public function skill(){
        $data['skill'] = $this->skill->allData();
        return view('admin.pages.skill.skill', $data);
    }
    public function personal_info(){
        $data['personal_info'] = $this->personal_info->allData();
        return view('admin.pages.personal_info.personal_info', $data);
    }
    public function program(){
        $data['program'] = $this->program->allData();
        return view('admin.pages.program.program', $data);
    }
    public function contact(){
        $data['contact'] = $this->contact->allData();
        return view('admin.pages.contact.contact', $data);
    }
}
