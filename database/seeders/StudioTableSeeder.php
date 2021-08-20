<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('studios')->insert([
            [
                'name'=>'EA SPORTS',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/0/0d/EA_Sports.PNG',
                'created_at' => now()
            ],
             [
                'name'=>'Nintendo',
                'logo' => 'https://cdn.1min30.com/wp-content/uploads/2018/06/Logo-Nintendo-1.jpg',
                'created_at' => now()
            ], 
             [
                'name'=>'konami',
                'logo' => 'https://i.ytimg.com/vi/lQGrqcVEwxM/hqdefault.jpg',
                'created_at' => now()
            ], 
             [
                'name'=>'Blizzard',
                'logo' => 'https://jeu.video/wp-content/uploads/2017/03/logo-blizzard.jpg',
                'created_at' => now()
            ],
            [
                'name'=>'Capcom',
                'logo' => 'https://cdn.1min30.com/wp-content/uploads/2019/07/Capcom-logo-1.jpg',
                'created_at' => now()
            ], 
            [
                'name'=>'namco',
                'logo' => 'https://gametimers.it/wp-content/uploads/2017/01/Namco-Logo-1200x720.png',
                'created_at' => now()
            ],
             [
                'name'=>'pubg studio',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/PUBG_Studios_Logo.svg/langfr-280px-PUBG_Studios_Logo.svg.png',
                'created_at' => now()
            ]
        ]);
    }
}
