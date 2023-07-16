<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('contacts')->insert([
            "phone1" =>"+012 345 678 102",
            "phone2" =>"+012 345 678 102",
            "email1" =>"urname@email.com",
            "email2" =>"urwebsitenaem.com",
            "address" =>"Address goes here, street, Crossroad 123."
        ]);
    }
}
