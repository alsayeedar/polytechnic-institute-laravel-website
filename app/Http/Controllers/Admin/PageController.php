<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
    public function index() {
        $settings = Setting::first();
        $user = Auth::user();
        $pages = Page::orderBy("id", "DESC")->paginate(20);
        return view("admin.pages.index", compact("settings", "user", "pages"));
    }

    public function add() {
        $settings = Setting::first();
        $user = Auth::user();
        return view("admin.pages.add", compact("settings", "user"));
    }

    public function addSubmit(Request $request) {
        $validated = $request->validate([
            "title" => ["required"],
            "body" => ["required"],
            "status" => ["required", Rule::in(["0", "1"])],
        ]);
        Page::create([
            "title" => $validated["title"],
            "slug" => $validated["title"],
            "body" => $validated["body"],
            "status" => $validated["status"],
        ]);
        return redirect()->route("admin.pages")->with("success", "Page added!");
    }

    public function edit($id) {
        $page = Page::find($id);
        if ($page) {
            $settings = Setting::first();
            $user = Auth::user();
            return view("admin.pages.edit", compact("page", "settings", "user"));
        }
        return redirect()->route("admin.pages")->withErrors("Page not exists!");
    }

    public function editSubmit(Request $request, $id) {
        $page = Page::find($id);
        if ($page) {
            $validated = $request->validate([
                "title" => ["required"],
                "body" => ["required"],
                "status" => ["required", Rule::in(["0", "1"])],
            ]);
            $page->title = $validated["title"];
            $page->slug = $validated["title"];
            $page->body = $validated["body"];
            $page->status = $validated["status"];
            $page->save();
            return redirect()->route("admin.pages")->with("success", "Page updated!");
        }
        return redirect()->route("admin.pages")->withErrors("Page not exists!");
    }

    public function delete($id) {
        $page = Page::find($id);
        if ($page) {
            $page->delete();
            return redirect()->route("admin.pages")->with("success", "Page deleted!");
        }
        return redirect()->route("admin.pages")->withErrors("Page not exists!");
    }
}
