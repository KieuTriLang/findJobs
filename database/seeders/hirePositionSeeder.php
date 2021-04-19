<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class hirePositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hirePositions=array(
            "Nhân viên",
            "Chuyên viên",
            "Kế toán",
            "Kỹ thuật viên",
            "Thư ký",
            "Giám sát viên",
            "Trưởng phòng",
            "Quản trị viên",
            "Lập trình viên",
            "Công nhân",
            "Kỹ sư",
        );
        foreach($hirePositions as $hirePosition){
            DB::table('hire_positions')->insert([
                "hire_position" => $hirePosition,
            ]);
        }
    }
}
