<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function show($code) {
        $technology = Technology::where("code", $code)->where("status", true);
        if ($technology->count() == 1) {
            $settings = Setting::first();
            $technology = $technology->first();
            $title = "{$technology->name} Technology - {$settings->short_title}";
            return view("frontend.technology.show", compact("title", "technology", "settings"));
        }
        return abort(404);
    }
}
