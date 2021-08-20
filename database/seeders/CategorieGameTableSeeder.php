<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorieGameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_games')->insert([
            [
                'game_id' => 1,
                'category_id'=>1,
                
                
            ]
            
        ]);
    }
}
