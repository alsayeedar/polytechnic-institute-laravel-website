<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Technology;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $settings = Setting::first();
        $notices = Notice::where("is_published", true)->orderBy("id", "DESC")->limit(7)->get();
        $technologies = Technology::where("status", true)->orderBy("code", "ASC")->get();
        $sliders = Slider::orderBy("position", "ASC")->get();
        return view("frontend.home.index", compact("settings", "notices", "technologies", "sliders"));
    }
}
