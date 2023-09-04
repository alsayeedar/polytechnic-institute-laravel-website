<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminSettingController extends Controller
{
    public function index() {
        $settings = Setting::first();
        $user = Auth::user();
        return view("admin.settings.index", compact("settings", "user"));
    }

    public function info(Request $request) {
        $validated = $request->validate([
            "name" => ["required"],
            "email" => ["required", "email"],
            "password" => ["required", "current_password"],
        ]);
        $user = User::find(Auth::user()->id);
        $user->name = $validated["name"];
        $user->email = $validated["email"];
        $user->save();
        return redirect()->route("admin.settings")->with("success", "Account information updated!");
    }

    public function password(Request $request) {
        $validated = $request->validate([
            "current_password" => ["required", "current_password"],
            "password" => ["required", "confirmed"],
            "password_confirmation" => ["required", "min:6"],
        ]);
        $user = User::find(Auth::user()->id);
        $user->password = $validated["password_confirmation"];
        $user->save();
        return redirect()->route("admin.settings")->with("success", "Password updated!");
    }
}
