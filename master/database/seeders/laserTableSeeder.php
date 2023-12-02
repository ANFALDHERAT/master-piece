<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laser;
class laserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laser::create([
            'name' => 'Sarah Beauty Laser Expert',
            'image' => 'mid4.jfif',
            'service_area'=>'irbid',
            'description'=>'Experienced in various laser beauty treatments including hair removal and skin rejuvenation.',
            'average_rating'=>'4',
        ]);

        Laser::create([
            'name' => 'Emily Beauty Laser Expert',
            'image' => 'mid5.jfif',
            'service_area'=>'irbid',
            'description'=>'Experienced in various laser beauty treatments including hair removal and skin rejuvenation.',
            'average_rating'=>'5',
        ]);

        Laser::create([
            'name' => 'Emily Beauty Laser Expert',
            'image' => 'laser2.jpg',
            'service_area'=>'irbid',
            'description'=>'Experienced in various laser beauty treatments including hair removal and skin rejuvenation.',
            'average_rating'=>'5',
        ]);
        Laser::create([
            'name' => 'Emily Beauty Laser Expert',
            'image' => 'laser.jpg',
            'service_area'=>'irbid',
            'description'=>'Experienced in various laser beauty treatments including hair removal and skin rejuvenation.',
            'average_rating'=>'5',
        ]);

        Laser::create([
            'name' => 'Emily Beauty Laser Expert',
            'image' => 'mid2.jfif',
            'service_area'=>'irbid',
            'description'=>'Experienced in various laser beauty treatments including hair removal and skin rejuvenation.',
            'average_rating'=>'5',
        ]);

        Laser::create([
            'name' => 'Emily Beauty Laser Expert',
            'image' => 'mid1.jpg',
            'service_area'=>'irbid',
            'description'=>'Experienced in various laser beauty treatments including hair removal and skin rejuvenation.',
            'average_rating'=>'5',
        ]);
    }
}
