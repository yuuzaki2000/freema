<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
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
            'image' => 'storage/product_img/Armani+Mens+Clock.jpg',
            'name' => '腕時計',
            'price' => 15000,
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'condition' => '良好',
        ];
        DB::table('products')->insert($data);
        $data = [
            'id' => 2,
            'image' => 'storage/product_img/HDD+Hard+Disk.jpg',
            'name' => 'HDD',
            'price' => 5000,
            'description' => '高速で信頼性の高いハードディスク',
            'condition' => '目立った傷や汚れなし',
        ];
        DB::table('products')->insert($data);
        $data = [
            'id' => 3,
            'image' => 'storage/product_img/iLoveIMG+d.jpg',
            'name' => '玉ねぎ3束',
            'price' => 300,
            'description' => '新鮮な玉ねぎ3束のセット',
            'condition' => 'やや傷や汚れあり',
        ];
        DB::table('products')->insert($data);
        $data = [
            'id' => 4,
            'image' => 'storage/product_img/Leather+Shoes+Product+Photo.jpg',
            'name' => '革靴',
            'price' => 4000,
            'description' => 'クラシックなデザインの革靴',
            'condition' => '状態が悪い',
        ];
        DB::table('products')->insert($data);
        $data = [
            'id' => 5,
            'image' => 'storage/product_img/Living+Room+Laptop.jpg',
            'name' => 'ノートPC',
            'price' => 45000,
            'description' => '高性能なノートパソコン',
            'condition' => '良好',
        ];
        DB::table('products')->insert($data);
        $data = [
            'id' => 6,
            'image' => 'storage/product_img/Music+Mic+4632231.jpg',
            'name' => 'マイク',
            'price' => 8000,
            'description' => '高音質のレコーディング用マイク',
            'condition' => '目立った傷や汚れなし',
        ];
        DB::table('products')->insert($data);
        $data = [
            'id' => 7,
            'image' => 'storage/product_img/Purse+fashion+pocket.jpg',
            'name' => 'ショルダーバッグ',
            'price' => 3500,
            'description' => 'おしゃれなショルダーバッグ',
            'condition' => 'やや傷や汚れあり',
        ];
        DB::table('products')->insert($data);
        $data = [
            'id' => 8,
            'image' => 'storage/product_img/Tumbler+souvenir.jpg',
            'name' => 'タンブラー',
            'price' => 500,
            'description' => '使いやすいタンブラー',
            'condition' => '状態が悪い',
        ];
        DB::table('products')->insert($data);
        $data = [
            'id' => 9,
            'image' => 'storage/product_img/Waitress+with+Coffee+Grinder.jpg',
            'name' => 'コーヒーミル',
            'price' => 4000,
            'description' => '手動のコーヒーミル',
            'condition' => '良好',
        ];
        DB::table('products')->insert($data);
        $data = [
            'id' => 10,
            'image' => 'storage/product_img/Going_out_makeup_set.jpg',
            'name' => 'メイクセット',
            'price' => 2500,
            'description' => '便利なメイクアップセット',
            'condition' => '目立った傷や汚れなし',
        ];
        DB::table('products')->insert($data);
        $data = [
            'id' => 11,
            'image' => 'storage/img/product_image_sample.png',
            'name' => '商品名',
            'brand' => 'アルマーニ',
            'price' => 310000,
            'description' => '商品説明',
            'condition' => '良好',
        ];
        DB::table('products')->insert($data);
    }
}
