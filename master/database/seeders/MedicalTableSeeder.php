<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Medical;
class MedicalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medical::create([
            'name'=> 'Glowing Skin Clinic',
            'service_area'=> 'Dermatology and Aesthetics',
            'description'=>'A premier center offering a range of dermatological and aesthetic services, including skin rejuvenation, anti-aging treatments, and acne therapy.',
            'image'=>'mid4.jfif',
            'average_rating'=>'2',
        ]);
        Medical::create([
            'name'=> 'Glowing Skin Clinic',
            'service_area'=> 'irbid',
            'description'=>'A premier center offering a range of dermatological and aesthetic services, including skin rejuvenation, anti-aging treatments, and acne therapy.',
            'image'=>'mid2.jfif',
            'average_rating'=>'4.8',
        ]);
        Medical::create([
            'name'=> 'Radiant Beauty Institute',
            'service_area'=> 'irbid',
            'description'=>'A premier center offering a range of dermatological and aesthetic services, including skin rejuvenation, anti-aging treatments, and acne therapy.',
            'image'=>'mid2.jfif',
            'average_rating'=>'3',
        ]);
        Medical::create([
            'name'=> 'Bella Aesthetics Center',
            'service_area'=> 'irbid',
            'description'=>'A premier center offering a range of dermatological and aesthetic services, including skin rejuvenation, anti-aging treatments, and acne therapy.',
            'image'=>'mid3.jfif',
            'average_rating'=>'5',
        ]);
    }
}
