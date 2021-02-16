<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        for($i = 1; $i < 4; $i++){
            DB::table('categories')->insert([
                'title' => 'Category ' .$i,
                'image' => 'banner-'.$i.'.jpg',
                'alias' => 'category' .$i,
            ]);
        }
    }
}
