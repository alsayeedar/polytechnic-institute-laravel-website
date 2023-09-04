<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($slug) {
        $page = Page::where("slug", $slug)->where("status", true);
        if ($page->count() > 0) {
            $page = $page->first();
            $settings = Setting::first();
            $title = "{$page->title} - {$settings->short_title}";
            return view("frontend.page.show", compact("page", "settings", "title"));
        }
        return abort(404);
    }
}
