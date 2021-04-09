<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class industriesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $industries = array('Bán hàng / Tiếp thị','Dịch vụ','Chăm sóc sức khỏe','Sản xuất','Hàng tiêu dùng','Máy tính / Công nghệ thông tin','Hành chánh / Nhân sự','Kế toán / Tài chính','Truyền thông / Media','Xây dựng','Giao thông vận tải','Internet','Giáo dục / Đào tạo','Khoa học/ Kỹ thuật','Khách sạn / Du lịch','Nhóm ngành khác');
        foreach($industries as $industry){
            DB::table('industries')->insert([
                'industry_name'=>$industry,
            ]);
        }
    }
}
