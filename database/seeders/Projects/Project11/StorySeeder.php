<?php

namespace Database\Seeders\Projects\Project11;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stories')->insert([
            [
                'title'       => 'Прогулка на природе',
                'img'         => '/img/projects/project_11/nature.jpg',
                'created_at'  => '10.10.2020'
            ],
            [
                'title'       => 'Сложный проект',
                'img'         => '/img/projects/project_11/project.jpg',
                'created_at'  => '10.10.2020'
            ],
            [
                'title'       => 'Новая квартира',
                'img'         => '/img/projects/project_11/flat.jpg',
                'created_at'  => '10.10.2020'
            ],
            [
                'title'       => 'Oceнь',
                'img'         => '/img/projects/project_11/autumn.jpg',
                'created_at'  => '10.10.2020'
            ],
            [
                'title'       => 'Новая квартира',
                'img'         => '/img/projects/project_11/flat.jpg',
                'created_at'  => '10.10.2020'
            ],
            [
                'title'       => 'Oceнь',
                'img'         => '/img/projects/project_11/autumn.jpg',
                'created_at'  => '10.10.2020'
            ]
        ]);
    }
}
