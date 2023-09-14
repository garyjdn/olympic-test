<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarTraOrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mar_tra_order_detail')->insert([
            'id' => '1001',
            'created_at' => Carbon::create('2020-09-25 15:00:00')->format('Y-m-d H:i:s'), 
            'order_id' => 'SO20090001',
            'item_id' => 'ITM0003',
            'qty' => '4',
        ]);

        DB::table('mar_tra_order_detail')->insert([
            'id' => '1002',
            'created_at' => Carbon::create('2020-09-26 15:00:00')->format('Y-m-d H:i:s'), 
            'order_id' => 'SO20090002',
            'item_id' => 'ITM0001',
            'qty' => '1',
        ]);

        DB::table('mar_tra_order_detail')->insert([
            'id' => '1003',
            'created_at' => Carbon::create('2020-09-26 15:00:00')->format('Y-m-d H:i:s'), 
            'order_id' => 'SO20090002',
            'item_id' => 'ITM0002',
            'qty' => '1',
        ]);

        DB::table('mar_tra_order_detail')->insert([
            'id' => '1004',
            'created_at' => Carbon::create('2020-09-27 15:00:00')->format('Y-m-d H:i:s'), 
            'order_id' => 'SO20090003',
            'item_id' => 'ITM0003',
            'qty' => '8',
        ]);

        DB::table('mar_tra_order_detail')->insert([
            'id' => '1005',
            'created_at' => Carbon::create('2020-09-28 15:00:00')->format('Y-m-d H:i:s'), 
            'order_id' => 'SO20090004',
            'item_id' => 'ITM0004',
            'qty' => '1',
        ]);

        DB::table('mar_tra_order_detail')->insert([
            'id' => '1006',
            'created_at' => Carbon::create('2020-10-02 15:00:00')->format('Y-m-d H:i:s'), 
            'order_id' => 'SO20100001',
            'item_id' => 'ITM0001',
            'qty' => '1',
        ]);

        DB::table('mar_tra_order_detail')->insert([
            'id' => '1007',
            'created_at' => Carbon::create('2020-10-02 15:00:00')->format('Y-m-d H:i:s'), 
            'order_id' => 'SO20100001',
            'item_id' => 'ITM0002',
            'qty' => '2',
        ]);

        DB::table('mar_tra_order_detail')->insert([
            'id' => '1008',
            'created_at' => Carbon::create('2020-10-02 15:00:00')->format('Y-m-d H:i:s'), 
            'order_id' => 'SO20100001',
            'item_id' => 'ITM0003',
            'qty' => '2',
        ]);

        DB::table('mar_tra_order_detail')->insert([
            'id' => '1009',
            'created_at' => Carbon::create('2020-10-02 15:00:00')->format('Y-m-d H:i:s'), 
            'order_id' => 'SO20100001',
            'item_id' => 'ITM0004',
            'qty' => '4',
        ]);

        DB::table('mar_tra_order_detail')->insert([
            'id' => '1010',
            'created_at' => Carbon::create('2020-10-03 15:00:00')->format('Y-m-d H:i:s'), 
            'order_id' => 'SO20100002',
            'item_id' => 'ITM0004',
            'qty' => '1',
        ]);

        DB::table('mar_tra_order_detail')->insert([
            'id' => '1011',
            'created_at' => Carbon::create('2020-10-04 15:00:00')->format('Y-m-d H:i:s'), 
            'order_id' => 'SO20100003',
            'item_id' => 'ITM0004',
            'qty' => '1',
        ]);

        DB::table('mar_tra_order_detail')->insert([
            'id' => '1012',
            'created_at' => Carbon::create('2020-10-05 15:00:00')->format('Y-m-d H:i:s'), 
            'order_id' => 'SO20100004',
            'item_id' => 'ITM0003',
            'qty' => '1',
        ]);

        DB::table('mar_tra_order_detail')->insert([
            'id' => '1013',
            'created_at' => Carbon::create('2020-10-06 15:00:00')->format('Y-m-d H:i:s'), 
            'order_id' => 'SO20100005',
            'item_id' => 'ITM0004',
            'qty' => '3',
        ]);

        DB::table('mar_tra_order_detail')->insert([
            'id' => '1014',
            'created_at' => Carbon::create('2020-10-07 15:00:00')->format('Y-m-d H:i:s'), 
            'order_id' => 'SO20100006',
            'item_id' => 'ITM0003',
            'qty' => '2',
        ]);

        DB::table('mar_tra_order_detail')->insert([
            'id' => '1015',
            'created_at' => Carbon::create('2020-10-07 15:00:00')->format('Y-m-d H:i:s'), 
            'order_id' => 'SO20100006',
            'item_id' => 'ITM0004',
            'qty' => '2',
        ]);
    }
}
