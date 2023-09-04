<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class NoticeController extends Controller
{
    public function index() {
        $settings = Setting::first();
        $user = Auth::user();
        $notices = Notice::orderBy("id", "DESC")->paginate(20);
        return view("admin.notices.index", compact("settings", "user", "notices"));
    }

    public function add() {
        $settings = Setting::first();
        $user = Auth::user();
        return view("admin.notices.add", compact("settings", "user"));
    }

    public function addSubmit(Request $request) {
        $validated = $request->validate([
            "title" => ["required"],
            "body" => ["required"],
            "status" => ["required", Rule::in(["0", "1"])],
        ]);
        Notice::create([
            "title" => $validated["title"],
            "body" => $validated["body"],
            "is_published" => $validated["status"],
        ]);
        return redirect()->route("admin.notices")->with("success", "Notice added!");
    }

    public function edit($id) {
        $notice = Notice::find($id);
        if ($notice) {
            $settings = Setting::first();
            $user = Auth::user();
            return view("admin.notices.edit", compact("notice", "settings", "user"));
        }
        return redirect()->route("admin.notices")->withErrors("Notice not exists!");
    }

    public function editSubmit(Request $request, $id) {
        $notice = Notice::find($id);
        if ($notice) {
            $validated = $request->validate([
                "title" => ["required"],
                "body" => ["required"],
                "status" => ["required", Rule::in(["0", "1"])],
            ]);
            $notice->title = $validated["title"];
            $notice->body = $validated["body"];
            $notice->is_published = $validated["status"];
            $notice->save();
            return redirect()->route("admin.notices")->with("success", "Notice updated!");
        }
        return redirect()->route("admin.notices")->withErrors("Notice not exists!");
    }

    public function delete($id) {
        $notice = Notice::find($id);
        if ($notice) {
            $notice->delete();
            return redirect()->route("admin.notices")->with("success", "Notice deleted!");
        }
        return redirect()->route("admin.notices")->withErrors("Notice not exists!");
    }
}
