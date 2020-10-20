<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('offices')->insert([
//            'id'=>1,
//            'city'=>'gaza',
//            'phone'=>'133554',
//            'address1'=>'gaza',
//            'address2'=>'gaza',
//            'state'=>'state1',
//            'country'=>'palestine',
//            'PastalCode'=>12345,
//            'Temitory'=>'Temitory'
//
//
//        ]);
        factory(Office::class,10)->create();

    }
}
