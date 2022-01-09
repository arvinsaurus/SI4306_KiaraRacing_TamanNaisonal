<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [
            [
                'judul' => '112 Tahun Penantian, 6 Komodo Pertama Lahir di Kebun Binatang Bronx AS',
                'gambar' => 'https://asset.kompas.com/crops/rcDGJyrTv2nwRFCyS_H0v7wcHnE=/11x3:748x495/750x500/data/photo/2021/12/16/61babd58bb7a0.png',
                'url' => 'https://travel.kompas.com/read/2021/12/16/123100827/112-tahun-penantian-6-komodo-pertama-lahir-di-kebun-binatang-bronx-as?page=all',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('news')->insert($news);
    }
}
