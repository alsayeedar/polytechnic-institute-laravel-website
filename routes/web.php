<?php

use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NoticeController as AdminNoticeController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TechnologyController as AdminTechnologyController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\NoticeController;
use App\Http\Controllers\FrontEnd\PageController;
use App\Http\Controllers\FrontEnd\TechnologyController;
use App\Models\Page;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::name("frontend.")->group(function() {
    Route::get("/", [HomeController::class, "index"])->name("index");
    Route::get("/notices", [NoticeController::class, "index"])->name("notices");
    Route::get("/notice/{id}", [NoticeController::class, "show"])->name("notice.show");
    Route::get("/technology/{code}", [TechnologyController::class, "show"])->name("technology.show");
    Route::get("/page/{slug}", [PageController::class, "show"])->name("page.show");
});

Route::get("/admin", [LoginController::class, "index"])->name("admin.login");
Route::post("/admin", [LoginController::class, "submit"])->name("admin.login.submit");

Route::name("admin.")->middleware(["admin"])->prefix("/admin")->group(function() {
    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");

    Route::get("/notices", [AdminNoticeController::class, "index"])->name("notices");
    Route::get("/notices/add", [AdminNoticeController::class, "add"])->name("notices.add");
    Route::post("/notices/add", [AdminNoticeController::class, "addSubmit"])->name("notices.add.submit");
    Route::get("/notices/edit/{id}", [AdminNoticeController::class, "edit"])->name("notices.edit");
    Route::post("/notices/edit/{id}", [AdminNoticeController::class, "editSubmit"])->name("notices.edit.submit");
    Route::get("/notices/delete/{id}", [AdminNoticeController::class, "delete"])->name("notices.delete");

    Route::get("/pages", [AdminPageController::class, "index"])->name("pages");
    Route::get("/pages/add", [AdminPageController::class, "add"])->name("pages.add");
    Route::post("/pages/add", [AdminPageController::class, "addSubmit"])->name("pages.add.submit");
    Route::get("/pages/edit/{id}", [AdminPageController::class, "edit"])->name("pages.edit");
    Route::post("/pages/edit/{id}", [AdminPageController::class, "editSubmit"])->name("pages.edit.submit");
    Route::get("/pages/delete/{id}", [AdminPageController::class, "delete"])->name("pages.delete");
    
    Route::get("/technologies", [AdminTechnologyController::class, "index"])->name("technologies");
    Route::get("/technologies/add", [AdminTechnologyController::class, "add"])->name("technologies.add");
    Route::post("/technologies/add", [AdminTechnologyController::class, "addSubmit"])->name("technologies.add.submit");
    Route::get("/technologies/edit/{id}", [AdminTechnologyController::class, "edit"])->name("technologies.edit");
    Route::post("/technologies/edit/{id}", [AdminTechnologyController::class, "editSubmit"])->name("technologies.edit.submit");
    Route::get("/technologies/delete/{id}", [AdminTechnologyController::class, "delete"])->name("technologies.delete");
    
    Route::get("/menus/header", [MenuController::class, "header"])->name("menus.header");
    Route::post("/menus/header", [MenuController::class, "headerSubmit"])->name("menus.header.submit");
    Route::get("/menus/footer", [MenuController::class, "footer"])->name("menus.footer");
    Route::post("/menus/footer", [MenuController::class, "footerSubmit"])->name("menus.footer.submit");


    Route::get("/slider", [SliderController::class, "index"])->name("slider");
    Route::post("/slider", [SliderController::class, "add"])->name("slider.add");
    Route::post("/slider/edit/{id}", [SliderController::class, "edit"])->name("slider.edit");
    Route::get("/slider/delete/{id}", [SliderController::class, "delete"])->name("slider.delete");

    Route::get("/site-settings", [SiteSettingController::class, "index"])->name("site.settings");
    Route::post("/site-settings", [SiteSettingController::class, "submit"])->name("site.settings.submit");

    Route::get("/settings", [AdminSettingController::class, "index"])->name("settings");
    Route::post("/update-account", [AdminSettingController::class, "info"])->name("settings.update.info");
    Route::post("/update-password", [AdminSettingController::class, "password"])->name("settings.update.password");

    Route::get("/logout", LogoutController::class)->name("logout");
});
