<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        $settings = Setting::first();
        if (Auth::check()) {
            return redirect()->route("admin.dashboard");
        }
        return view("admin.login", compact("settings"));
    }
    
    public function submit(Request $request) {
        $validated = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"],
        ]);
        if (Auth::attempt($validated, $request->has("remember") ? true : false)) {
            return redirect()->route("admin.dashboard");
        }
        return redirect()->back()->withErrors("Incorrect email address or password!");
    }
}
