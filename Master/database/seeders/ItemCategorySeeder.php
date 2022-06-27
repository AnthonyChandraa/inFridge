<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_categories')->insert([
            'id' => Str::uuid(),
            'name' => 'Meat',
            'type' => 'Freezer',
            'best_before' => '120'
        ]);

        DB::table('item_categories')->insert([
            'id' => Str::uuid(),
            'name' => 'Meat',
            'type' => 'Refrigerator',
            'best_before' => '4'
        ]);

        DB::table('item_categories')->insert([
            'id' => Str::uuid(),
            'name' => 'Eggs',
            'type' => 'Refrigerator',
            'best_before' => '7'
        ]);

        DB::table('item_categories')->insert([
            'id' => Str::uuid(),
            'name' => 'Fish',
            'type' => 'Freezer',
            'best_before' => '90'
        ]);

        DB::table('item_categories')->insert([
            'id' => Str::uuid(),
            'name' => 'Fish',
            'type' => 'Refrigerator',
            'best_before' => '2'
        ]);

        DB::table('item_categories')->insert([
            'id' => Str::uuid(),
            'name' => 'Fruit',
            'type' => 'Refrigerator',
            'best_before' => '7'
        ]);

        DB::table('item_categories')->insert([
            'id' => Str::uuid(),
            'name' => 'Other',
            'type' => 'Freezer',
            'best_before' => '0'
        ]);

        DB::table('item_categories')->insert([
            'id' => Str::uuid(),
            'name' => 'Other',
            'type' => 'Refrigerator',
            'best_before' => '0'
        ]);
    }
}
