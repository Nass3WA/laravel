<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'title' => 'FIFA 2000',
                'mark'=>15.5,
                'image'=>'https://lh3.googleusercontent.com/proxy/8Ev4YM1PwnF5wN3ZxR_PZ0n3C19FKWDSKlSN9lZMZ5kn_ieDHeHkmxAAn7_QEI0u1SVwyIKlxlREdm6CWMHH3nb1DTWOH2OuseqcSy5HW_gVnbKJaeYT8q_KS5g2EcxGLA',
                'description' => 'jeu de foot de notre enfance',
                'studio_id' => 0,
                'price' => 60,
                'release_date'=> '1999-11-16',
                'created_at' => now()
                
            ]    
        ]);
        
    }
}


    