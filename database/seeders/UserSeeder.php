<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin1',
                'email' => 'rkhairul4nm@gmail.com',
                'email_verified_at' => now(),
                'role' => 'Admin',
                'password' => Hash::make('123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@a.com',
                'email_verified_at' => now(),
                'role' => 'Admin',
                'password' => Hash::make('123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'admin3',
                'email' => 'admin3@a.com',
                'email_verified_at' => now(),
                'role' => 'Admin',
                'password' => Hash::make('123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'admin4',
                'email' => 'admin4@a.com',
                'email_verified_at' => now(),
                'role' => 'Admin',
                'password' => Hash::make('123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
