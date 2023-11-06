<?php

namespace Database\Seeders;

use App\Models\Navbar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            [
                'name' => 'Home', 
                'route' => 'home',
                'ordering' => 1,
            ],
            [
                'name' => 'Aktivitas',
                'route' => 'aktivitas',
                'ordering' => 2,
            ],
            [
                'name' => 'Galleri',
                'route'=> 'galleri',
                'ordering' => 3,
            ],
            [
                'name'=> 'Tentang Kami',
                'route' => 'tentangKami',
                'ordering' => 4,
            ],
            [
                'name'=> 'Sukarelawan',
                'route' => 'sukarelawan',
                'ordering' => 5,
            ],
            [
                'name' => 'Dukungan',
                'route' => 'dukungan',
                'ordering' => 6,
            ]
        ];
        foreach($links as $key => $navbarHome){
            Navbar::create($navbarHome);
        }
    }
}
