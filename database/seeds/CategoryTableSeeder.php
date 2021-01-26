<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('categories')->insert([
            'category_name' => 'Full Space',
        ]);
        DB::table('categories')->insert([
            'category_name' => '1 Seat',
        ]);
        DB::table('categories')->insert([
            'category_name' => '2-5 Seat',
        ]);
        DB::table('categories')->insert([
            'category_name' => '5-10 Seat',
        ]);
    }
}
