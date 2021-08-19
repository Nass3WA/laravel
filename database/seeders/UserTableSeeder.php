<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'robert',
                'display_name'=>'roro13',
                'is_admin'=>true,
                'email' => 'robert@laravel.dev',
                'password' => bcrypt('adminadmin'),
                'created_at' => now()
            ]    
        ]);
        
        // Créer 50 utilisateurs fictifs
        \App\Models\User::factory(50)->create();
    }
}







  