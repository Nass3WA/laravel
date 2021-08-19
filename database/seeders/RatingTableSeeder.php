<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->insert([
            [
                'mark'=>15.5,
                'content' => 'excellent',
                'user_id' => 1,
                'game_id' => 0,
                'created_at' => now()
            ]    
        ]);
    }
}
