<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Models\Setting;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public $settings;

    public function __construct() {
        $this->settings = Setting::first();
    }

    public function index() {
        $settings = $this->settings;
        $title = "Notices Board - {$settings->short_title}";
        $notices = Notice::where("is_published", true)->orderBy("id", "DESC")->paginate(21);
        return view("frontend.notice.index", compact("settings", "title", "notices"));
    }
    
    public function show($id) {
        $notice = Notice::where("id", $id)->where("is_published", true);
        if ($notice->count() == 1) {
            $settings = $this->settings;
            $notice = $notice->first();
            $title = "{$notice->title} - {$settings->short_title}";
            return view("frontend.notice.show", compact("settings", "notice", "title"));
        }
        return abort(404);
    }
}
