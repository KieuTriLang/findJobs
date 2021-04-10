<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'NGÂN HÀNG TMCP TIÊN PHONG TPBANK',
            'email'=>'tienphongbank@gmail.com',
            'password'=>Hash::make('123123123'),
            'user_type'=>'2'
        ]);
    }
}
