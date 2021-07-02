<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ApartmentSeeder::class
        ]);
        DB::table("apartment")->insert([
            "name"=>"CCMN",
            "price"=>"300000",
            "address"=>"187 Nguyen Hue",
            "status"=>"Sold",
        ]);
    }
}
