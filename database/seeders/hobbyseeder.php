<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class hobbyseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hobbies = array('Du Lịch','Thể thao','Đọc sách','Chơi game','Viết lách','Xem Phim','Hội họa','Làm bánh','Nghệ thuật','Thiện nguyện','Ca nhạc');
        foreach($hobbies as $hobby){
            DB::table('hobbies')->insert([
                'hobby_name'=>$hobby,
            ]);
        }
    }
}
