<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('employees')->insert([
//            'id'=>1,
//            'OfficeCode_id'=>1,
//            'reportsTo'=>91,
//            'lastName'=>'aa',
//            'firstName'=>'bb',
//            'extension'=>'extension',
//            'email'=>'aa@gmail.com',
//            'jobTitle'=>'backend developer'
//
//        ]);

        factory(Employee::class,10)->create();


    }
}
