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
                'image'=>'https://lh3.googleusercontent.com/proxy/VJr2UpKc-gCwxQuwozDEsfpWqJKvY0ThdRYN5_-vKbnUGEq8e_1FZCXTHW7FguVpbr7-kM5sSP1y6AWhmfL2ue5IjgTeLJYGvLQu_P3DqKiawmRKswjQo91iY5jW8MP9YA',
                'description' => 'jeu de foot de notre enfance',
                'studio_id' => 1,
                'price' => 60,
                'release_date'=> '1999-11-16',
                'created_at' => now()
                
            ],  
            [
                'title' => 'zelda ocarina of time',
                'mark'=>18,
                'image'=>'https://upload.wikimedia.org/wikipedia/fr/thumb/5/54/The_Legend_of_Zelda_Ocarina_of_Time_Logo.png/220px-The_Legend_of_Zelda_Ocarina_of_Time_Logo.png',
                'description' => 'jeu d\'aventure',
                'studio_id' => 2,
                'price' => 75,
                'release_date'=> '1998-12-11',
                'created_at' => now()
                
            ],
            [
                'title' => 'Metal Gear Solid',
                'mark'=>17.4,
                'image'=>'https://www.warlegend.net/wp-content/uploads/EiwywV7WkAE0cU_.jpg',
                'description' => "Metal Gear Solid, communément abrégé MGS, est un jeu vidéo d'action-infiltration créé, produit et réalisé par Hideo Kojima employé de Konami, sorti en 1998 sur PlayStation. Troisième épisode de la série Metal Gear, le jeu fait suite à Metal Gear 2: Solid Snake et précède Metal Gear Solid 2: Sons of Liberty.",
                'studio_id' => 3,
                'price' => 55,
                'release_date'=> '1998-09-03',
                'created_at' => now()
                
            ],
            [
                'title' => 'Warcraft3',
                'mark'=>18,
                'image'=>'https://assets.vg247.com/current//2015/02/warcraft-3-logo.jpg',
                'description' => 'Warcraft III: Reforged est une édition remastérisée sortie le 28 janvier 2020 du jeu vidéo de stratégie en temps réel Warcraft III: Reign of Chaos et de son extension Warcraft III: The Frozen Throne, sortis respectivement en 2002 et 2003.',
                'studio_id' => 4,
                'price' => 59,
                'release_date'=> '2002-07-03',
                'created_at' => now()
                
            ],
            [
                'title' => 'Street Fighter',
                'mark'=>15.2,
                'image'=>'https://upload.wikimedia.org/wikipedia/fr/e/e9/Street_Fighter_Logo.png',
                'description' => "Street Fighter est un jeu vidéo de combat de Capcom sorti sur système d'arcade 68000 Based en 1987. Il sera porté en 1988 sur Amiga, Amstrad CPC, Atari ST, Commodore 64, MS-DOS, PC-Engine, ZX Spectrum, puis en 2006 sur PlayStation 2 et Xbox et PlayStation Portable.",
                'studio_id' =>5,
                'price' => 71,
                'release_date'=> '1991-02-14',
                'created_at' => now()
                
            ],
            [
                'title' => 'tekken',
                'mark'=>14.6,
                'image'=>'https://m.media-amazon.com/images/I/51hVGNhU-CL._AC_SX466_.jpg',
                'description' => "Tekken 3 est un jeu vidéo de combat, développé et édité par Namco sur borne d'arcade en 1997 puis adapté sur PlayStation en 1998. Il est le troisième épisode de la série Tekken",
                'studio_id' => 6,
                'price' => 62,
                'release_date'=> '1997-03-20',
                'created_at' => now()
               
            ],
            [
                'title' => 'FIFA 2001',
                'mark'=>13,
                'image'=>'https://lh3.googleusercontent.com/proxy/VJr2UpKc-gCwxQuwozDEsfpWqJKvY0ThdRYN5_-vKbnUGEq8e_1FZCXTHW7FguVpbr7-kM5sSP1y6AWhmfL2ue5IjgTeLJYGvLQu_P3DqKiawmRKswjQo91iY5jW8MP9YA',
                'description' => 'jeu de foot de notre enfance',
                'studio_id' => 1,
                'price' => 46,
                'release_date'=> '2000-11-16',
                'created_at' => now()
                
            ],
            [
                'title' => 'FIFA 2010',
                'mark'=>12.5,
                'image'=>'https://lh3.googleusercontent.com/proxy/VJr2UpKc-gCwxQuwozDEsfpWqJKvY0ThdRYN5_-vKbnUGEq8e_1FZCXTHW7FguVpbr7-kM5sSP1y6AWhmfL2ue5IjgTeLJYGvLQu_P3DqKiawmRKswjQo91iY5jW8MP9YA',
                'description' => 'jeu de foot de notre enfance',
                'studio_id' => 1,
                'price' => 63,
                'release_date'=> '2009-11-21',
                'created_at' => now()
                
            ],
            [
                'title' => 'FIFA 2015',
                'mark'=>16.5,
                'image'=>'https://lh3.googleusercontent.com/proxy/VJr2UpKc-gCwxQuwozDEsfpWqJKvY0ThdRYN5_-vKbnUGEq8e_1FZCXTHW7FguVpbr7-kM5sSP1y6AWhmfL2ue5IjgTeLJYGvLQu_P3DqKiawmRKswjQo91iY5jW8MP9YA',
                'description' => 'jeu de foot de notre enfance',
                'studio_id' => 1,
                'price' => 75,
                'release_date'=> '2014-09-16',
                'created_at' => now()
                
            ],
            [
                'title' => 'FIFA 2020',
                'mark'=>13.5,
                'image'=>'https://lh3.googleusercontent.com/proxy/VJr2UpKc-gCwxQuwozDEsfpWqJKvY0ThdRYN5_-vKbnUGEq8e_1FZCXTHW7FguVpbr7-kM5sSP1y6AWhmfL2ue5IjgTeLJYGvLQu_P3DqKiawmRKswjQo91iY5jW8MP9YA',
                'description' => 'jeu de foot de notre enfance',
                'studio_id' => 1,
                'price' => 89,
                'release_date'=> '2019-11-16',
                'created_at' => now()
                
            ],
            [
                'title' => 'FIFA 2022',
                'mark'=>19,
                'image'=>'https://lh3.googleusercontent.com/proxy/VJr2UpKc-gCwxQuwozDEsfpWqJKvY0ThdRYN5_-vKbnUGEq8e_1FZCXTHW7FguVpbr7-kM5sSP1y6AWhmfL2ue5IjgTeLJYGvLQu_P3DqKiawmRKswjQo91iY5jW8MP9YA',
                'description' => 'jeu de foot de notre enfance',
                'studio_id' => 1,
                'price' => 60,
                'release_date'=> '2021-12-16',
                'created_at' => now()
                
            ],
            [
                'title' => "PlayerUnknown's Battlegrounds",
                'mark'=>17.5,
                'image'=>'https://play-lh.googleusercontent.com/JRd05pyBH41qjgsJuWduRJpDeZG0Hnb0yjf2nWqO7VaGKL10-G5UIygxED-WNOc3pg',
                'description' => "Le PLAYERUNKNOWN'S BATTLEGROUNDS officiel conçu exclusivement pour les appareils mobiles. Jouez gratuitement partout et à tout moment. PUBG MOBILE offre l’action multijoueur gratuite la plus intense sur mobile. Parachutez-vous, équipez-vous et affrontez les autres. Survivez lors de batailles classiques et épiques à 100 joueurs et dans les modes Charge, Match à mort par équipe 4v4 au rythme effréné et Zombie. La survie est primordiale, le dernier debout est le vainqueur. Lorsque le devoir appelle, tirez à volonté !",
                'studio_id' => 7,
                'price' => 29,
                'release_date'=> '2017-11-16',
                'created_at' => now()
                
            ],
        ]);
        
    }
}


    