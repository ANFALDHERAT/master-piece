<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'yanal',
            'email' => 'yanal@example.com',
            'password' => Hash::make('password'),
            'address' => 'irbid',
            'phone' => '077278492',
            'city' => 'Example City',
            'user_type' => 'customer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'abdallah',
            'email' => 'abdallah@example.com',
            'password' => Hash::make('password'),
            'address' => '456 Example Avenue',
            'phone' => '9876543210',
            'city' => 'irbid',
            'user_type' => 'customer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
