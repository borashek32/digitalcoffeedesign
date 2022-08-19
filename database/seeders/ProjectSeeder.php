<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'title'        => 'Organic',
                'slug'         => 'organic',
                'category_id'  => '2',
                'description'  => 'Lorem ipsum dolor sit amet consectetur',
                'img'          => '/files/organic.jpg',
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50',
                'visability'   => '1'
            ],
            [
                'title'        => 'Creative Agency',
                'slug'         => 'creative-agency',
                'category_id'  => '2',
                'description'  => 'Lorem ipsum dolor sit amet consectetur',
                'img'          => '/files/creativeAgency.jpg',
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50',
                'visability'   => '1'
            ],
            [
                'title'        => 'Calm',
                'slug'         => 'calm',
                'category_id'  => '1',
                'description'  => 'Lorem ipsum dolor sit amet consectetur',
                'img'          => '/files/calm.jpg',
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50',
                'visability'   => '1'
            ],
            [
                'title'        => 'Velocity',
                'slug'         => 'velocity',
                'category_id'  => '1',
                'description'  => 'Lorem ipsum dolor sit amet consectetur',
                'img'          => '/files/velocity.jpg',
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50',
                'visability'   => '1'
            ],
            [
                'title'        => 'Designer Portfolio Site',
                'slug'         => 'designer-portfolio-site',
                'category_id'  => '1',
                'description'  => 'Lorem ipsum dolor sit amet consectetur',
                'img'          => '/files/somePortfolioSite.jpg',
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50',
                'visability'   => '1'
            ],
            [
                'title'        => 'Choose Your Colors',
                'slug'         => 'choose-your-colors',
                'category_id'  => '1',
                'description'  => 'Lorem ipsum dolor sit amet consectetur',
                'img'          => '/files/colors.jpg',
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50',
                'visability'   => '1'
            ],
            [
                'title'        => 'Go Corona',
                'slug'         => 'go-corona',
                'category_id'  => '1',
                'description'  => 'Lorem ipsum dolor sit amet consectetur',
                'img'          => '/files/goCorona.jpg',
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50',
                'visability'   => '1'
            ],
            [
                'title'        => 'Relvise',
                'slug'         => 'relvise',
                'category_id'  => '1',
                'description'  => 'Lorem ipsum dolor sit amet consectetur',
                'img'          => '/files/relvise.jpg',
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50',
                'visability'   => '1'
            ],

            [
                'title'        => 'Grid Layout',
                'slug'         => 'grid-layout',
                'category_id'  => '3',
                'description'  => 'Lorem ipsum dolor sit amet consectetur',
                'img'          => '/files/building.jpg',
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50',
                'visability'   => '1'
            ],
            [
                'title'        => 'Sliders',
                'slug'         => 'sliders',
                'category_id'  => '3',
                'description'  => 'Lorem ipsum dolor sit amet consectetur',
                'img'          => '/files/sliders.jpg',
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50',
                'visability'   => '1'
            ],
            [
                'title'        => 'Flex Box',
                'slug'         => 'flex-box',
                'category_id'  => '3',
                'description'  => 'Lorem ipsum dolor sit amet consectetur',
                'img'          => '/files/flexBox.jpg',
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50',
                'visability'   => '1'
            ],
            [
                'title'        => 'Menu Burger',
                'slug'         => 'menu-burger',
                'category_id'  => '3',
                'description'  => 'Lorem ipsum dolor sit amet consectetur',
                'img'          => '/files/menuBurger.jpg',
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50',
                'visability'   => '1'
            ],
            [
                'title'        => 'Personal Blog',
                'slug'         => 'personal-blog',
                'category_id'  => '2',
                'description'  => 'Lorem ipsum dolor sit amet consectetur',
                'img'          => '/files/personal-blog.jpg',
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50',
                'visability'   => '1'
            ],
        ]);
    }
}
