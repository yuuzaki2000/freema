<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            'id' => 1,
            'user_id' => 2,
            'product_id' => 1, 
        ];
        DB::table('listings')->insert($data);
        $data = [
            'id' => 2,
            'user_id' => 2,
            'product_id' => 2,
        ];
        DB::table('listings')->insert($data);
        $data = [
            'id' => 3,
            'user_id' => 2,
            'product_id' => 3,
        ];
        DB::table('listings')->insert($data);
        $data = [
            'id' => 4,
            'user_id' => 2,
            'product_id' => 4,
        ];
        DB::table('listings')->insert($data);
        $data = [
            'id' => 5,
            'user_id' => 2,
            'product_id' => 5,
        ];
        DB::table('listings')->insert($data);
        $data = [
            'id' => 6,
            'user_id' => 3,
            'product_id' => 6,
        ];
        DB::table('listings')->insert($data);
        $data = [
            'id' => 7,
            'user_id' => 3,
            'product_id' => 7,
        ];
        DB::table('listings')->insert($data);
        $data = [
            'id' => 8,
            'user_id' => 3,
            'product_id' => 8,
        ];
        DB::table('listings')->insert($data);
        $data = [
            'id' => 9,
            'user_id' => 3,
            'product_id' => 9,
        ];
        DB::table('listings')->insert($data);
        $data = [
            'id' => 10,
            'user_id' => 3,
            'product_id' => 10,
        ];
        DB::table('listings')->insert($data);
    }
}
