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
            hardskillseeder::class,
            softskillseeder::class,
            Languageseeder::class,
            hobbyseeder::class,
            Cityseeder::class,
            userseeder::class,
            employerseeder::class,
            postjobseeder::class,
            question::class,
        ]);
    }
}
