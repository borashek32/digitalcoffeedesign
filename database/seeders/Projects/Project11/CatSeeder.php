<?php

namespace Database\Seeders\Projects\Project11;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cats')->insert([
            [
                'name' => 'IT выставки'
            ],
            [
                'name' => 'Проекты'
            ],
            [
                'name' => 'Без категории'
            ]
        ]);
    }
}
