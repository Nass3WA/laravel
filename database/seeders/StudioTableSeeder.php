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
            ]    
        ]);
    }
}
