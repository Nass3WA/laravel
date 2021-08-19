<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PlatformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('platforms')->insert([
            [
                'name'=>'PlayStation',
                'logo' =>'https://cdn.1min30.com/wp-content/uploads/2017/06/PlayStation-logo-1.jpg',
                'created_at' => now()
           
            ]    
        ]);
    }
}
