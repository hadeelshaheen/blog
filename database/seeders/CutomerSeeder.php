<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CutomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//
//        DB::table('customers')->insert([
//            'id'=>1,
//            'salesRepEmployeeNum'=>1,
//            'name'=>'ba',
//            'lastName'=>'aa',
//            'firstName'=>'bb',
//            'phone'=>'123456',
//            'address1'=>'gaza',
//            'address2'=>'gaza',
//            'city'=>'gaza',
//            'state'=>'state',
//            'postalCode'=>123,
//            'country'=>'palestine'
//
//        ]);
        factory(Customer::class,10)->create();

    }
}
