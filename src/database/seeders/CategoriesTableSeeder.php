<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
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
            'content' => 'ファッション'
        ];
        DB::table('categories')->insert($data);
        $data = [
            'id' => 2,
            'content' => '家電'
        ];
        DB::table('categories')->insert($data);
        $data = [
            'id' => 3,
            'content' => 'インテリア'
        ];
        DB::table('categories')->insert($data);
        $data = [
            'id' => 4,
            'content' => 'レディース'
        ];
        DB::table('categories')->insert($data);
        $data = [
            'id' => 5,
            'content' => 'メンズ'
        ];
        DB::table('categories')->insert($data);
        $data = [
            'id' => 6,
            'content' => 'コスメ'
        ];
        DB::table('categories')->insert($data);
        $data = [
            'id' => 7,
            'content' => '本'
        ];
        DB::table('categories')->insert($data);
        $data = [
            'id' => 8,
            'content' => 'ゲーム'
        ];
        DB::table('categories')->insert($data);
        $data = [
            'id' => 9,
            'content' => 'スポーツ'
        ];
        DB::table('categories')->insert($data);
        $data = [
            'id' => 10,
            'content' => 'キッチン'
        ];
        DB::table('categories')->insert($data);
        $data = [
            'id' => 11,
            'content' => 'ハンドメイド'
        ];
        DB::table('categories')->insert($data);
        $data = [
            'id' => 12,
            'content' => 'アクセサリー'
        ];
        DB::table('categories')->insert($data);
        $data = [
            'id' => 13,
            'content' => 'おもちゃ'
        ];
        DB::table('categories')->insert($data);
        $data = [
            'id' => 14,
            'content' => 'ベビー・キッズ'
        ];
        DB::table('categories')->insert($data);
    }
}
