<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $booking = [
            [
                'users_id' => 1,
                'tanggal_tiket' => '2022-02-05',
                'tiket_dewasa' => 1,
                'tiket_anak' => 2,
                'total' => 550000,
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('bookings')->insert($booking);
    }
}
