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
                'name'=>'PlayStation 1',
                'logo' =>'https://cdn.1min30.com/wp-content/uploads/2017/06/PlayStation-logo-1.jpg',
                'created_at' => now()
           
            ],
            [
                'name'=>'Nintendo 64',
                'logo' =>'https://www.nintenderos.com/wp-content/uploads/2018/10/Nintendo-64.jpg',
                'created_at' => now()
           
            ],
            [
                'name'=>'PC',
                'logo' =>'https://www.creativefabrica.com/wp-content/uploads/2019/03/Monogram-PC-Logo-Design-by-Greenlines-Studios-580x386.jpg',
                'created_at' => now()
           
            ],
            [
                'name'=>'megadrive',
                'logo' =>'https://p.kindpng.com/picc/s/178-1780067_https-i-imgur-com-akpvvh9-sega-png-download.png',
                'created_at' => now()
           
            ],
            [
                'name'=>'Ps4',
                'logo' =>'https://lh3.googleusercontent.com/proxy/qJbulD8N6B0IBMNzUjUFpWiOs7Eja6AeJ3NJwUbiLnB9yxYhG_-2cnxVluS3c39eqdEtLqWNemYUw0eZkApCKbkCbxDMvb22mz5t_caBsbygslqSFA_koD0-WZkFYbsyLTVWZQXl',
                'created_at' => now()
           
            ],
        ]);
    }
}
