<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarMasExpeditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mar_mas_expedition')->insert([
            'id' => 'EKS0001',
            'name' => 'ABC EXPRESS',
        ]);

        DB::table('mar_mas_expedition')->insert([
            'id' => 'EKS0002',
            'name' => 'ITU CARGO',
        ]);
    }
}
