<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $settings = Setting::first();
        $user = Auth::user();
        return view("admin.dashboard.index", compact("settings", "user"));
    }
}
