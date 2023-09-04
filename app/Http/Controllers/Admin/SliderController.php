<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index() {
        $settings = Setting::first();
        $user = Auth::user();
        $sliders = Slider::all();
        return view("admin.slider.index", compact("settings", "user", "sliders"));
    }

    public function add(Request $request) {
        $validated = $request->validate([
            "image" => ["required", "image"],
            "position" => ["required", "integer"],
        ]);
        $image = $request->file("image");
        $name = md5(rand(11111, 99999)).".".$image->extension();
        $image->move(public_path("assets/img"), $name);
        Slider::create([
            "image" => $name,
            "position" => $validated["position"],
        ]);
        return redirect()->route("admin.slider")->with("success", "Item added to slider!");
    }

    public function edit(Request $request, $id) {
        $slider = Slider::find($id);
        if ($slider) {
            $validated = $request->validate([
                "position" => ["required", "integer"],
            ]);
            $slider->position = $validated["position"];
            $slider->save();
            return redirect()->route("admin.slider")->with("success", "Item edited from slider!");
        }
        return redirect()->route("admin.slider")->withErrors("Item not exists!");
    }

    public function delete($id) {
        $slider = Slider::find($id);
        if ($slider) {
            if (File::exists(public_path("assets/img/".$slider->image))) {
                File::delete(public_path("assets/img/".$slider->image));
            }
            $slider->delete();
            return redirect()->route("admin.slider")->with("success", "Item deleted from slider!");
        }
        return redirect()->route("admin.slider")->withErrors("Item not exists!");
    }
}
