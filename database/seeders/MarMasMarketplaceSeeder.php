<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarMasMarketplaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mar_mas_marketplace')->insert([
            'id' => 'MP0001',
            'platform' => 'SHOPEE',
            'brand' => 'OLYMPIC',
            'store_name' => 'SHOPEE - OLYMPIC'
        ]);

        DB::table('mar_mas_marketplace')->insert([
            'id' => 'MP0002',
            'platform' => 'SHOPEE',
            'brand' => 'OLYMPLAST',
            'store_name' => 'SHOPEE - OLYMPLAST'
        ]);
    }
}
