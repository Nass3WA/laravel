<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categories')->insert([
            [
                'name' => 'sport',
                'created_at' => now()
                
            ],
            [
                'name' => 'RPG',
                'created_at' => now()
                
            ],
            [
                'name' => 'FPS',
                'created_at' => now()
                
            ],
            [
                'name' => 'simulation',
                'created_at' => now()
                
            ],
            [
                'name' => 'aventure',
                'created_at' => now()
            ]  
            
        ]);
    }
}
