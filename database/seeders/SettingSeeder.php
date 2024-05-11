<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     Setting::create([
        'id'=>1,
        'address'=>"asd",
        'phone'=>"050215684",
        'email'=>"taha@gmail.com",
        'facebook'=>"asdasd",
        'youtube'=>"asdasd",
        'instagram'=>"asdasd",
        'twitter'=>"asdasd",
        'linkedin'=>"asdasd",

    ]);
    }
}
