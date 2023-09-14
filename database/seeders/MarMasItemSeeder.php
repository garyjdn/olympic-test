<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarMasItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mar_mas_item')->insert([
            'id' => 'ITM0001',
            'name' => 'Lemari 2 Pintu',
            'brand' => 'OLYMPIC',
            'price' => 2000
        ]);

        DB::table('mar_mas_item')->insert([
            'id' => 'ITM0002',
            'name' => 'Meja Tulis',
            'brand' => 'OLYMPIC',
            'price' => 800
        ]);

        DB::table('mar_mas_item')->insert([
            'id' => 'ITM0003',
            'name' => 'Rak Plastik',
            'brand' => 'OLYMPLAST',
            'price' => 950
        ]);

        DB::table('mar_mas_item')->insert([
            'id' => 'ITM0004',
            'name' => 'Kursi Anak',
            'brand' => 'OLYMPLAST',
            'price' => 400
        ]);
    }
}
