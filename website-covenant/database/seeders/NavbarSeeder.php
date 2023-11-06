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
                'name' => 'Aktivitas',
                'route' => 'aktivitas',
                'ordering' => 1,
            ],
            [
                'name' => 'Galleri',
                'route'=> 'galleri',
                'ordering' => 2,
            ],
            [
                'name'=> 'Tentang Kami',
                'route' => 'tentangKami',
                'ordering' => 3,
            ],
            [
                'name'=> 'Sukarelawan',
                'route' => 'sukarelawan',
                'ordering' => 4,
            ],
            [
                'name' => 'Dukungan',
                'route' => 'dukungan',
                'ordering' => 5,
            ]
        ];
        foreach($links as $key => $navbarHome){
            Navbar::create($navbarHome);
        }
    }
}
