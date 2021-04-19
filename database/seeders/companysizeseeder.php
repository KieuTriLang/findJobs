<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class companysizeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company_sizes= array('<10','10 - 24','25 - 99','100 - 499','500 - 999','1000 -4999','5000 - 9999','10000 - 19999','20000 - 49999','>50000');
        foreach($company_sizes as $company_size){
            DB::table('company_sizes')->insert([
                'size' => $company_size,
            ]);
        }
    }
}
