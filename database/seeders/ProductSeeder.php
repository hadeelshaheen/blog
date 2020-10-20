<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('products')->insert([
//            'id'=>1,
//            'productline_id'=>1,
//            'name'=>'product1',
//            'scale'=>12,
//            'vendor'=>'vendor',
//            'PdtDescription'=>'Description',
//            'QtyInStock'=>1,
//            'MSRP'=>'MSRP'
//        ]);

        factory(Product::class,10)->create();

    }
}
