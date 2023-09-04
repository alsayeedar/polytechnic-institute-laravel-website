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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Setting::factory()->create([
        //     "short_title" => "BASATI",
        //     "full_title" => "Badiul Alam Science & Technology Institute",
        //     "logo" => "logo.png",
        //     "address" => "P4WP+W46, Road, Kasba, Brahmanbaria",
        //     "email" => "basatibbaria@gmail.com",
        //     "facebook" => "https://www.facebook.com/basatibd",
        //     "youtube" => "",
        //     "maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.0027855234134!2d91.13270177469738!3d23.747280078672528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375474a8074c7039%3A0xaee75cf65ecd310d!2sBadiul%20Alam%20Science%20%26%20Technology%20Institute!5e0!3m2!1sen!2sbd!4v1690903306849!5m2!1sen!2sbd",
        //     "mobile" => ["01833878264", "01833878264"]
        // ]);

        Notice::factory(20)->create();
    }
}
