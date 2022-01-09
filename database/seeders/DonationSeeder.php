<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $donation = [
            [
                'users_id' => 1,
                'nominal' => 300000,
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('donations')->insert($donation);
    }
}
