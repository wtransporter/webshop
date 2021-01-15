<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("INSERT INTO `categories` (`id`, `title`, `bscat_id`, `wssort`, `wsnivo`, `created_at`, `updated_at`) VALUES
            (1, 'Računari i računarska oprema', 0, 1, 1, '2020-12-31 23:00:00', '2020-12-31 23:00:00'),
            (2, 'Mobilni telefoni', 0, 1, 2, '2020-12-31 23:00:00', '2020-12-31 23:00:00'),
            (3, 'Automotive', 0, 2, 1, '2020-12-31 23:00:00', '2020-12-31 23:00:00'),
            (4, 'Lepota i zdravlje', 0, 2, 2, '2020-12-31 23:00:00', '2020-12-31 23:00:00'),
            (5, 'Kancelarijski materijal', 0, 2, 3, '2020-12-31 23:00:00', '2020-12-31 23:00:00'),
            (6, 'TV', 0, 3, 1, '2020-12-31 23:00:00', '2020-12-31 23:00:00'),
            (7, 'Kuća i bašta', 0, 4, 1, '2020-12-31 23:00:00', '2020-12-31 23:00:00'),
            (8, 'Sportska oprema', 0, 5, 1, '2020-12-31 23:00:00', '2020-12-31 23:00:00'),
            (9, 'Toys & Games', 0, 6, 1, '2020-12-31 23:00:00', '2020-12-31 23:00:00'),
            (10, 'Kamere i fotoaparati', 0, 7, 1, '2020-12-31 23:00:00', '2020-12-31 23:00:00'),
            (11, 'Konzole i oprema', 0, 8, 1, '2020-12-31 23:00:00', '2020-12-31 23:00:00'),
            (12, 'Bela tehnika', 0, 9, 1, '2020-12-31 23:00:00', '2020-12-31 23:00:00'),
            (13, 'Ostalo', 0, 10, 1, '2020-12-31 23:00:00', '2020-12-31 23:00:00')"
        );
    }
}
