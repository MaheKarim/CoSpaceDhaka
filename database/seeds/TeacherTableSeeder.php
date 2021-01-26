<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('teachers')->insert([
            'id' => '1',
            'user_id' => '2',
            'about_me' => \Illuminate\Support\Str::random(150),
            'area_name_id' => '1',
            'category_name_id' => '1',
            'created_at' => Carbon::now(),
        ]);
    }
}
