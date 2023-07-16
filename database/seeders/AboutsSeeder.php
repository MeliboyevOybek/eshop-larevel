<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("abouts")->insert([
            "title" => "Welcome To Kinle",
            "image" => "about-1.jpg",
            "sub_content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore aperiam fugit consequuntur voluptatibus ex sint iure in, distinctio sed dolorem aspernatur veritatis repellendus dolorum voluptate, animi libero officiis eveniet accusamus recusandae.",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore aperiam fugit consequuntur voluptatibus ex sint iure in, distinctio sed dolorem aspernatur veritatis repellendus dolorum voluptate, animi libero officiis eveniet accusamus recusandae. Temporibus amet ducimus sapiente voluptatibus autem dolorem magnam quas, porro suscipit. Quibusdam culpa asperiores exercitationem architecto quo distinctio sed dolorem aspernatur veritatis repellendus dolorum voluptate!"
        ]);
        
    }
}
