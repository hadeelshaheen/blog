<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('payments')->insert([
//            'checkNum'=>'check1',
//            'customer_id'=>1,
//
//
//
//        ]);
        factory(Payment::class,10)->create();

    }
}
