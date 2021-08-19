<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Appel de tous les seeders
        $this->call([
            UserTableSeeder::class,
            GameTableSeeder::class,
            RatingTableSeeder::class,
            StudioTableSeeder::class,
            PlatformTableSeeder::class
        ]); 
    }
}
   