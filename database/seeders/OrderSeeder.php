<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('orders')->insert([
//            'id'=>1,
//            'customer_id'=>1,
//            'status'=>1,
//            'comments'=>'comment1'
//
//
//        ]);

        factory(Order::class,10)->create();

    }
}
