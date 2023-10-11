<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Notice;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            "name" => "Admin",
            "email" => "admin@admin.com",
            "password" => "admin"
        ]);

        \App\Models\Notice::create([
            "title" => "Test Notice Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem deserunt, vel voluptate laboriosam et iusto aliquid maiores error optio reiciendis sequi eius unde distinctio vitae nisi nobis repellendus minus laborum.</p>",
            "is_published" => 1,
        ]);

        \App\Models\Technology::create([
            "name" => "Computer",
            "code" => "66",
            "logo" => "computer.png",
            "description" => "Enter description...",
            "teachers" => "Teachers...",
            "course_structure" => "Course Structure...",
            "class_routine" => "Class Routine...",
            "color" => "#EB1D37",
            "status" => 1,
        ]);

        \App\Models\Technology::create([
            "name" => "Civil",
            "code" => "64",
            "logo" => "civil.png",
            "description" => "Enter description...",
            "teachers" => "Teachers...",
            "course_structure" => "Course Structure...",
            "class_routine" => "Class Routine...",
            "color" => "#FBB501",
            "status" => 1,
        ]);

        \App\Models\Technology::create([
            "name" => "Electrical",
            "code" => "67",
            "logo" => "elec.png",
            "description" => "Enter description...",
            "teachers" => "Teachers...",
            "course_structure" => "Course Structure...",
            "class_routine" => "Class Routine...",
            "color" => "#84bb26",
            "status" => 1,
        ]);

        \App\Models\Page::create([
            "title" => "About Us",
            "slug" => "About Us",
            "body" => "About Us...",
            "status" => 1,
        ]);

        \App\Models\Slider::create([
            "image" => "slide1.jpg",
            "position" => "1"
        ]);

        \App\Models\Slider::create([
            "image" => "slide2.jpg",
            "position" => "2"
        ]);

        \App\Models\Slider::create([
            "image" => "slide3.jpg",
            "position" => "3"
        ]);

        \App\Models\Setting::create([
            "short_title" => "BASATI",
            "full_title" => "Badiul Alam Science & Technology Institute, Kasba",
            "logo" => "logo.png",
            "address" => "P4WP+W46, Road, Kasba, Brahmanbaria",
            "email" => "basatibbaria@gmail.com",
            "facebook" => "https://www.youtube.com/@AlSayeed",
            "youtube" => "https://www.youtube.com/channel/UCRbc5d4bmQLRDrksr5pcESQ",
            "maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.0027855234134!2d91.13270177469738!3d23.747280078672528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375474a8074c7039%3A0xaee75cf65ecd310d!2sBadiul%20Alam%20Science%20%26%20Technology%20Institute!5e0!3m2!1sen!2sbd!4v1690903306849!5m2!1sen!2sbd",
            "mobile" => ["01833878264", "01833878264"],
            "header_menu" => [["text" => "Home","href" => "http://127.0.0.1:8000/","icon" => "","tooltip" => "","children" => []],["text" => "About Us","href" => "","icon" => "","tooltip" => "","children" => [["text" => "About Us","href" => "http://127.0.0.1:8000/page/about-us","icon" => "","tooltip" => "","children" => []]]],["text" => "Technologies","href" => "","icon" => "","tooltip" => "","children" => [["text" => "Electrical Technology","href" => "http://127.0.0.1:8000/technology/68","icon" => "","tooltip" => "","children" => []],["text" => "Computer Technology","href" => "http://127.0.0.1:8000/technology/66","icon" => "","tooltip" => "","children" => []],["text" => "Civil Technology","href" => "http://127.0.0.1:8000/technology/64","icon" => "","tooltip" => "","children" => []]]],["text" => "Contact Us","href" => "#","icon" => "","tooltip" => "","children" => []]],
            "footer_menu" => [["text" => "Home", "href" => "http://127.0.0.1:8000/", "icon" => "", "tooltip" => "", "children" => []], ["text" => "Test", "href" => "#", "icon" => "", "tooltip" => "", "children" => []], ["text" => "Contact Us", "href" => "#", "icon" => "", "tooltip" => "", "children" => []]],
            "notice" => "Custom Notice From Database. Custom Notice From Database. Custom Notice From Database.",
        ]);
    }
}
