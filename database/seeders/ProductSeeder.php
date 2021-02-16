<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Caster\EnumStub;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // $collection = collect(['None', 'New', 'Sale']);
        $collection = collect([1, 2, 3]);

        for($i = 1; $i < 18; $i++){
            DB::table('products')->insert([
                'title' => 'Product ' .$i,
                'image' => 'item-'.$i.'.jpg',
                'price' => rand(100, 5000) / 10,
                'mark' => $collection->random(),
                'category_id' => random_int(1,3),
            ]);
        }
    }
}
