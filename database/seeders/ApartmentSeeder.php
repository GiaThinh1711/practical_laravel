<?php

namespace Database\Seeders;

use App\Models\Apratment;
use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apratment::factory(6)->count(20)->create();
    }
}
