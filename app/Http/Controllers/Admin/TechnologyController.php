<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class TechnologyController extends Controller
{
    public function index() {
        $settings = Setting::first();
        $user = Auth::user();
        $technologies = Technology::orderBy("code", "DESC")->paginate(20);
        return view("admin.technologies.index", compact("settings", "user", "technologies"));
    }

    public function add() {
        $settings = Setting::first();
        $user = Auth::user();
        return view("admin.technologies.add", compact("settings", "user"));
    }

    public function addSubmit(Request $request) {
        $validated = $request->validate([
            "name" => ["required", "string"],
            "code" => ["required", Rule::unique("technologies", "code")],
            "logo" => ["required", "image"],
            "description" => ["required", "string"],
            "teachers" => ["required", "string"],
            "course_structure" => ["required", "string"],
            "class_routine" => ["required", "string"],
            "color" => ["required", "string"],
            "status" => ["required", Rule::in(["0", "1"])],
        ]);
        $logo = $request->file("logo");
        $logoname = $validated["code"].rand(111, 9999).".".$logo->extension();
        $logo->move(public_path("assets/img"), $logoname);
        Technology::create([
            "name" => $validated["name"],
            "code" => $validated["code"],
            "logo" => $logoname,
            "description" => $validated["description"],
            "teachers" => $validated["teachers"],
            "course_structure" => $validated["course_structure"],
            "class_routine" => $validated["class_routine"],
            "color" => $validated["color"],
            "status" => $validated["status"],
        ]);
        return redirect()->route("admin.technologies")->with("success", "Technology added!");
    }

    public function edit($id) {
        $technology = Technology::find($id);
        if ($technology) {
            $settings = Setting::first();
            $user = Auth::user();
            return view("admin.technologies.edit", compact("technology", "settings", "user"));
        }
        return redirect()->route("admin.technologies")->withErrors("Technology not exists!");
    }

    public function editSubmit(Request $request, $id) {
        $technology = Technology::find($id);
        if ($technology) {
            $rules = [
                "name" => ["required", "string"],
                "code" => ["required", Rule::unique("technologies", "code")->ignore($id)],
                "description" => ["required", "string"],
                "teachers" => ["required", "string"],
                "course_structure" => ["required", "string"],
                "class_routine" => ["required", "string"],
                "color" => ["required", "string"],
                "status" => ["required", Rule::in(["0", "1"])],
            ];
            if ($request->hasFile("logo")) {
                $rules["logo"] = ["required", "image"];
            }
            $validated = $request->validate($rules);
            $technology->name = $validated["name"];
            $technology->code = $validated["code"];
            $technology->description = $validated["description"];
            $technology->teachers = $validated["teachers"];
            $technology->course_structure = $validated["course_structure"];
            $technology->class_routine = $validated["class_routine"];
            $technology->color = $validated["color"];
            $technology->status = $validated["status"];
            if ($request->hasFile("logo")) {
                $logo = $request->file("logo");
                $logoname = $validated["code"].rand(111, 9999).".".$logo->extension();
                $logo->move(public_path("assets/img"), $logoname);
                if (File::exists(public_path("assets/img/".$technology->logo))) {
                    File::delete(public_path("assets/img/".$technology->logo));
                }
                $technology->logo = $logoname;
            }
            $technology->save();
            return redirect()->route("admin.technologies")->with("success", "Technology updated!");
        }
        return redirect()->route("admin.technologies")->withErrors("Technology not exists!");
    }

    public function delete($id) {
        $technology = Technology::find($id);
        if ($technology) {
            if (File::exists(public_path("assets/img/".$technology->logo))) {
                File::delete(public_path("assets/img/".$technology->logo));
            }
            $technology->delete();
            return redirect()->route("admin.technologies")->with("success", "Technology deleted!");
        }
        return redirect()->route("admin.technologies")->withErrors("Technology not exists!");
    }
}
