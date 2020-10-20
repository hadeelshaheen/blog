<?php

namespace Database\Seeders;

use App\Models\Order_Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('order__products')->insert([
//            'id'=>1,
//            'order_id'=>1,
//            'productCode'=>1,
//            'Qty'=>10
//
//
//        ]);
        factory(Order_Product::class,10)->create();

    }
}
