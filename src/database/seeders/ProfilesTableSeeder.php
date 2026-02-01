<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
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
            'image' => 'masa.png',
            'user_id' => 1,
            'post_code' => 6300813,
            'address' => '大阪府宝塚市春日2-38',
            'building' => 'ときわ荘'
        ];
        DB::table('profiles')->insert($data);
        $data = [
            'id' => 2,
            'image' => 'hanako.png',
            'user_id' => 2,
            'post_code' => 6300814,
            'address' => '大阪府宝塚市春日2-39',
            'building' => '湯田アパート'
        ];
        DB::table('profiles')->insert($data);
        $data = [
            'id' => 3,
            'image' => 'tarou.png',
            'user_id' => 3,
            'post_code' => 6300815,
            'address' => '大阪府宝塚市春日2-40',
            'building' => '美咲荘'
        ];
        DB::table('profiles')->insert($data);
    }
}
