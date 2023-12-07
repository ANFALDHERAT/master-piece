<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            'user_id' => 1,
            'expert_id' => 1,
            'comment' => 'Great service, loved the henna design!Highly recommended!',
            'rating' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('reviews')->insert([
            'user_id' => 1,
            'expert_id' => 1,
            'comment' => 'Great service and attention to detail.Highly recommended!',
            'rating' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('reviews')->insert([
            'user_id' => 1,
            'expert_id' => 1,
            'comment' => 'Had an amazing experience. Highly recommended!',
            'rating' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('reviews')->insert([
            'user_id' => 1,
            'expert_id' => 1,
            'comment' => 'The artist was so creative, loved the intricate designs!',
            'rating' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('reviews')->insert([
            'user_id' => 1,
            'expert_id' => 1,
            'comment' => 'The henna lasted much longer than I expected!Highly recommended!',
            'rating' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('reviews')->insert([
            'user_id' => 1,
            'expert_id' => 1,
            'comment' => 'Had an amazing experience. Highly recommended!',
            'rating' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
