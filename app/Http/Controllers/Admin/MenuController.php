<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function header() {
        $settings = Setting::first();
        $user = Auth::user();
        $menu = json_encode($settings->header_menu);
        return view("admin.menus.header", compact("settings", "user", "menu"));
    }

    public function headerSubmit(Request $request) {
        $validated = $request->validate([
            "menudata" => ["required", "json"]
        ]);
        $settings = Setting::first();
        $settings->header_menu = json_decode($validated["menudata"], true);
        $settings->save();
        return redirect()->route("admin.menus.header")->with("success", "Menu updated!");
    }
    
    public function footer() {
        $settings = Setting::first();
        $user = Auth::user();
        $menu = json_encode($settings->footer_menu);
        return view("admin.menus.footer", compact("settings", "user", "menu"));
    }
    
    public function footerSubmit(Request $request) {
        $validated = $request->validate([
            "menudata" => ["required", "json"]
        ]);
        $settings = Setting::first();
        $settings->footer_menu = json_decode($validated["menudata"], true);
        $settings->save();
        return redirect()->route("admin.menus.footer")->with("success", "Menu updated!");
    }
}
