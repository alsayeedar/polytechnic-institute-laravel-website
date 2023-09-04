<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SiteSettingController extends Controller
{
    public function index() {
        $settings = Setting::first();
        $user = Auth::user();
        return view("admin.sitesettings.index", compact("settings", "user"));
    }

    public function submit(Request $request) {
        $rule = [
            "short_title" => ["required", "string"],
            "full_title" => ["required", "string"],
            "address" => ["nullable", "string"],
            "email" => ["nullable", "email"],
            "mobile" => ["array"],
            "facebook" => ["nullable", "string"],
            "youtube" => ["nullable", "string"],
            "maps" => ["nullable", "string"],
            "notice" => ["nullable", "string"],
        ];
        if ($request->hasFile("logo")) {
            $rule["logo"] = ["image"];
        }
        $validated = $request->validate($rule);

        $settings = Setting::first();
        $settings->short_title = $validated["short_title"];
        $settings->full_title = $validated["full_title"];
        $settings->address = $validated["address"];
        $settings->email = $validated["email"];
        $settings->mobile = $validated["mobile"];
        $settings->facebook = $validated["facebook"];
        $settings->youtube = $validated["youtube"];
        $settings->maps = $validated["maps"];
        $settings->notice = $validated["notice"];
        if ($request->hasFile("logo")) {
            $image = $request->file("logo");
            $imageName = "institutesitelogo".rand(111, 9999).".".$image->extension();
            $image->move(public_path("assets/img"), $imageName);
            if (File::exists(public_path("assets/img/".$settings->logo))) {
                File::delete(public_path("assets/img/".$settings->logo));
            }
            $settings->logo = $imageName;
        }
        $settings->save();
        return redirect()->route("admin.site.settings")->with("success", "Site information updated!");
    }
}
