<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nama' => 'User Satu',
                'email' => 'user1@example.com',
                'password' => bcrypt('12345'),
                'level' => 'user',
                'remember_token' => Str::random(60),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Admin Satu',
                'email' => 'admin1@example.com',
                'password' => bcrypt('12345'),
                'level' => 'admin',
                'remember_token' => Str::random(60),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('users')->insert($user);
    }
}
