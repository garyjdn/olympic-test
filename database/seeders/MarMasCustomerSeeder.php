<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarMasCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mar_mas_customer')->insert([
            'id' => 'CUS0001',
            'name' => 'Dara Arafah',
            'province' => 'SUMATERA SELATAN',
            'city' => 'PALEMBANG',
            'address' => 'Jl. Bahagia no 12'
        ]);

        DB::table('mar_mas_customer')->insert([
            'id' => 'CUS0002',
            'name' => 'Raditya Dika',
            'province' => 'DKI Jakarta',
            'city' => 'JAKARTA PUSAT',
            'address' => 'Jl. Kemerdekaan no 45'
        ]);

        DB::table('mar_mas_customer')->insert([
            'id' => 'CUS0003',
            'name' => 'Jhonathan Christie',
            'province' => 'Jawa Tengah',
            'city' => 'Semarang',
            'address' => 'Jl. Tengah no 99'
        ]);

        DB::table('mar_mas_customer')->insert([
            'id' => 'CUS0004',
            'name' => 'Desta Mahendra',
            'province' => 'Jawa Timur',
            'city' => 'Malang',
            'address' => 'Jl. Ditempat no 105B'
        ]);

        DB::table('mar_mas_customer')->insert([
            'id' => 'CUS0005',
            'name' => 'Irfan Hakim',
            'province' => 'Jawa Timur',
            'city' => 'Kediri',
            'address' => 'Jl. Sapu-Sapu no 67'
        ]);
    }
}
