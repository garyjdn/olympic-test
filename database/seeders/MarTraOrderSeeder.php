<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarTraOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mar_tra_order')->insert([
            'id' => 'SO20090001',
            'created_at' => Carbon::create('2020-09-25 15:00:00')->format('Y-m-d H:i:s'), 
            'customer_id' => 'CUS0001',
            'marketplace_id' => 'MP0002',
            'expedition_id' => 'EKS0001',
        ]);

        DB::table('mar_tra_order')->insert([
            'id' => 'SO20090002',
            'created_at' => Carbon::create('2020-09-26 15:00:00')->format('Y-m-d H:i:s'), 
            'customer_id' => 'CUS0002',
            'marketplace_id' => 'MP0001',
            'expedition_id' => 'EKS0001',
        ]);

        DB::table('mar_tra_order')->insert([
            'id' => 'SO20090003',
            'created_at' => Carbon::create('2020-09-27 15:00:00')->format('Y-m-d H:i:s'), 
            'customer_id' => 'CUS0003',
            'marketplace_id' => 'MP0002',
            'expedition_id' => 'EKS0001',
        ]);

        DB::table('mar_tra_order')->insert([
            'id' => 'SO20090004',
            'created_at' => Carbon::create('2020-09-28 15:00:00')->format('Y-m-d H:i:s'), 
            'customer_id' => 'CUS0003',
            'marketplace_id' => 'MP0002',
            'expedition_id' => 'EKS0002',
        ]);

        DB::table('mar_tra_order')->insert([
            'id' => 'SO20100001',
            'created_at' => Carbon::create('2020-10-02 15:00:00')->format('Y-m-d H:i:s'), 
            'customer_id' => 'CUS0004',
            'marketplace_id' => 'MP0001',
            'expedition_id' => 'EKS0002',
        ]);

        DB::table('mar_tra_order')->insert([
            'id' => 'SO20100002',
            'created_at' => Carbon::create('2020-10-03 15:00:00')->format('Y-m-d H:i:s'), 
            'customer_id' => 'CUS0001',
            'marketplace_id' => 'MP0002',
            'expedition_id' => 'EKS0002',
        ]);

        DB::table('mar_tra_order')->insert([
            'id' => 'SO20100003',
            'created_at' => Carbon::create('2020-10-04 15:00:00')->format('Y-m-d H:i:s'), 
            'customer_id' => 'CUS0005',
            'marketplace_id' => 'MP0002',
            'expedition_id' => 'EKS0001',
        ]);

        DB::table('mar_tra_order')->insert([
            'id' => 'SO20100004',
            'created_at' => Carbon::create('2020-10-05 15:00:00')->format('Y-m-d H:i:s'), 
            'customer_id' => 'CUS0001',
            'marketplace_id' => 'MP0002',
            'expedition_id' => 'EKS0001',
        ]);

        DB::table('mar_tra_order')->insert([
            'id' => 'SO20100005',
            'created_at' => Carbon::create('2020-10-06 15:00:00')->format('Y-m-d H:i:s'), 
            'customer_id' => 'CUS0005',
            'marketplace_id' => 'MP0002',
            'expedition_id' => 'EKS0002',
        ]);

        DB::table('mar_tra_order')->insert([
            'id' => 'SO20100006',
            'created_at' => Carbon::create('2020-10-07 15:00:00')->format('Y-m-d H:i:s'), 
            'customer_id' => 'CUS0001',
            'marketplace_id' => 'MP0002',
            'expedition_id' => 'EKS0002',
        ]);
    }
}
