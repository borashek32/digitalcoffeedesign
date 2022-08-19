<?php

namespace Database\Seeders\Projects\Project11;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('area_work')->insert([
            [
                'area_id' => '1',
                'work_id' => '1'
            ],
            [
                'area_id' => '2',
                'work_id' => '1'
            ],
            [
                'area_id' => '3',
                'work_id' => '1'
            ],
            [
                'area_id' => '1',
                'work_id' => '2'
            ],
            [
                'area_id' => '2',
                'work_id' => '2'
            ],
            [
                'area_id' => '2',
                'work_id' => '3'
            ]
        ]);
    }
}
