<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Languageseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $language= array('Tiếng Anh','Tiếng Trung Quốc','Tiếng Hindi','Tiếng Pháp','Tiếng Nga','Tiếng Đức','Tiếng Nhật','Tiếng Thổ Nhĩ Kì','Tiếng Hàn','Tiếng Việt','Tiếng Italia','Tiếng Thái');
        foreach($language as $lang){
            DB::table('languages')->insert([
                'language_name'=>$lang,
            ]);
        }
    }
}
