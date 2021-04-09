<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class hardskillseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hardskill= array('.Net/C#','ACCA','AccNet','Kế Toán/Kiểm Toán','Adobe After Effect','Adobe Illustrator','Adobe Photoshop','Adobe Premier','Quảng cáo/Marketing/PR','Android','Hoạt Hình (Animation)','Kiến Trúc','ASP.NET','Tự Động Hóa','Hàng Không/Sân Bay','Backend','Tài Chính/Ngân Hàng','Bảo Hiểm Và Tiền Lương (C&B)','Pha Chế Cafe (Barista)','Pha Chế Rượu (Bartender)','Hành Lý','Bếp Trưởng','Big Data/Hadoop','Công Nghệ Sinh Học','Quản Trị Thương Hiệu (Branding)','C/C++','CAD/CAM','Chăm Sóc Khách Hàng','Chăn Nuôi','Chế Tạo Máy','Hóa Học/Hóa Chất','Chứng Từ','Kỹ Sư Cầu Nối','Công Nhân');
        foreach($hardskill as $skill){
            DB::table('hardskills')->insert([
                'hardskill_name'=>$skill,
            ]);
        }
    }
}
