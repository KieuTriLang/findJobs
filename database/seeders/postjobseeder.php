<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class postjobseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i <50;$i++) {
            DB::table('post_jobs')->insert([
                "employer_id"=>DB::table('users')->where('email','tienphongbank@gmail.com')->first()->id,
                "hire_position" => "Trưởng Nhóm Khách Hàng Cá Nhân – Khối Bán Trực Tiếp",
                "company_name" => "NGÂN HÀNG TMCP TIÊN PHONG TPBANK",
                "description" => "- Xây dựng và triển khai thực hiện chỉ tiêu kinh doanh được giao cho Nhóm và của cá nhân
            - Quản lý, tư vấn, đào tạo và giám sát đội ngũ Chuyên viên, Nhân viên, Cộng tác viên thuộc phạm vi quản lý trong việc bán các sản phẩm Ngân hàng cá nhân gồm: sản phẩm cho vay, thẻ tín dụng, tài khoản trả lương, tài khoản thanh toán cá nhân
            - Phát triển nguồn khách hàng, xây dựng mối quan hệ tốt với các đối tác trong địa bàn hoạt động,..
            - Kiểm tra, đôn đốc, hỗ trợ công tác bán hàng của các thành viên đảm bảo Nhóm tuân thủ chặt chẽ về chất lượng dịch vụ, chất lượng tín dụng và quy trình
            - Chịu trách nhiệm trước Giám đốc kinh doanh về chỉ tiêu Nhóm được giao
            - Thực hiện các công việc khác theo sự phân công của Trưởng đơn vị",
                "hardskills" => "- Tốt nghiệp Đại học trở lên thuộc chuyên nghành Kinh tế tại các Trường Kinh tế quốc dân, Ngoại Thương, Thương Mại, Học viện tài chính, Học viện ngân hàng,...
            - Có tối thiểu 03 năm kinh nghiệm làm việc trong lĩnh vực tài chính ngân hàng và 01 năm tại vị trí quản lý.",
                "softskills" => "- Kỹ năng quản lý, đào tạo và xây dựng mối quan hệ tốt
            - Kỹ năng đàm phán, thuyết phục và quản trị rủi ro tốt
            - Năng động, trung thực và khả năng chịu áp lực công việc tốt",
                "benefit" => "- Môi trường làm việc chuyên nghiệp
            - Cơ hội thăng tiến lên vị trí Chuyên viên cao cấp hoặc Trưởng nhóm nếu hoàn thành chỉ tiêu kinh doanh được giao và đạt lương kinh doanh liên tiếp trong vòng 6 tháng.",
                "salary" => "12-15 triệu",
                "location" => "Hà Nội",
                "created_at" =>date('Y-m-d'),
                "updated_at" =>date('Y-m-d'),
            ]);
        }
    }
}
