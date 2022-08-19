<?php

namespace Database\Seeders\Projects\Project11;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            [
                'name' => 'дизайн'
            ],
            [
                'name' => 'создание сайта'
            ],
            [
                'name' => 'SMM'
            ],
        ]);
    }
}
