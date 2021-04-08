<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class skillcategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_skill= array('hardSkill','softSkill','language','hobby');
        foreach($category_skill as $skill){
            DB::table('skillcategories')->insert([
                'category_skill'=>$skill,
            ]);
        }
    }
}
