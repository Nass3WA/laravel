<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GamePlatformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('game_platforms')->insert([
            [
                'game_id' => 1,
                'platform_id'=>1,
                
            ]
            
        ]);
    }
}
