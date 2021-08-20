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
            StudioTableSeeder::class,
            PlatformTableSeeder::class,
            GameTableSeeder::class,
            RatingTableSeeder::class,
            CategorieTableSeeder::class,
            GamePlatformTableSeeder::class,
            CategorieGameTableSeeder::class
        ]); 
    }
}
   