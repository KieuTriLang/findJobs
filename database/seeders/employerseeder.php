<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class employerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employers')->insert([
            'employer_id'=>DB::table('users')->where('email','tienphongbank@gmail.com')->first()->id,
            'company_name'=>'NGÂN HÀNG TMCP TIÊN PHONG TPBANK',
            'company_size'=>'500 - 999',
            'website'=>'https://TPBank.vn',
            'company_summary'=>'Ngân hàng Thương mại Cổ phần Tiên Phong (gọi tắt là “TPBank”) được thành lập từ ngày 05/05/2008. TPBank được kế thừa những thế mạnh về công nghệ hiện đại, kinh nghiệm thị trường cùng tiềm lực tài chính của các cổ đông chiến lược bao gồm:Tập đoàn Vàng bạc Đá quý DOJI, Tập đoàn Công nghệ FPT, Công ty Tài chính quốc tế ( IFC), Tổng công ty Tái bảo hiểm Việt Nam (Vinare) và Tập đoàn Tài chính SBI Ven Holding Pte. Ltd.,Singapore.
            TPBank luôn nỗ lực mang lại các giải pháp , sản phẩm tài chính ngân hàng hiệu quả nhất, hướng tới phân khúc khách hàng trẻ và năng động. Dựa trên nền tảng công nghệ tiên tiến và trình độ quản lý chuyên sâu, TPBank là ngân hàng luôn tiên phong trong các xu hướng dịch vụ ngân hàng hiện đại, hướng tới mục tiêu trở thành Ngân hàng số số một tại Việt Nam.',
            'company_logo'=>'J9UwprrpLvMEKLoAx7CWjPpTNsOCBX24869-100x100.jpg',
            'contact_name'=>'Kiều Trí Lăng',
            'position'=>'Co-founder',
            'company_address'=>'Số 57 phố Lý Thường Kiệt – phường Trần Hưng Đạo, quận Hoàn Kiếm, Hà Nội.',
            'company_phone'=>'0982171184',
        ]);
    }
}
