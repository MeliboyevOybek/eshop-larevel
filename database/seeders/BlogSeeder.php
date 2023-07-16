<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("blog")->insert([
            "title" => "This is Third Post For XipBlog",
            "image" => "blog-1.jpg",
            "cotegory_id" => 1,
            "video" => "https://youtu.be/QQHLGlB4Dpk?list=PLk25BQFrj7wHgCkzPuejFXJTiFIam-MVq",
            "sub_content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus expedita quo voluptate, esse ratione facilis quibusdam vel ad, quas ut reiciendis neque voluptates adipisci laborum, dolor saepe natus.",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat.",
            "date" => Date::create(2023,7,16,12,00),
            "user_id" => 1
        ]);

    }
}
