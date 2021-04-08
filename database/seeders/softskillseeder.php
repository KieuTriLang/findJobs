<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class softskillseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $softskill= array('Thuyết trình','Quản lí thời gian','Giao tiếp','Giải quyết vấn đề','Làm việc nhóm','Đàm phán','Năng động','Sáng tạo','Lãnh đạo','Phân tích','Lập kế hoạch','Hòa đồng','Xây dựng quan hệ');
        foreach($softskill as $skill){
            DB::table('softskills')->insert([
                'softskill_name'=>$skill,
            ]);
        }
    }
}
