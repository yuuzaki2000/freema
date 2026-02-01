<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
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
            'name' => 'masa',
            'email' => 'masa0813@gmail.com',
            'password' => bcrypt('masa0813'),
        ];
        DB::table('users')->insert($data);
        $data = [
            'id' => 2,
            'name' => 'hanako',
            'email' => 'hanako0813@gmail.com',
            'password' => bcrypt('hanako0813'),
        ];
        DB::table('users')->insert($data);
        $data = [
            'id' => 3,
            'name' => 'tarou',
            'email' => 'tarou0813@gmail.com',
            'password' => bcrypt('tarou0813'),
        ];
        DB::table('users')->insert($data);
    }
}
