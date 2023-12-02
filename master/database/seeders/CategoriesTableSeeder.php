<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'Henna',
            'image' => '22.PNG',
        ]);
        Service::create([
            'name' => 'Bride Makeup',
            'image' => 'bride.PNG',
        ]);
        Service::create([
            'name' => 'Make Up',
            'image' => 'mac2.jpg',
        ]);
        Service::create([
            'name' => 'Bidecer and Minecer',
            'image' => 'a3.jpg',
        ]);
    }
}
