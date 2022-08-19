<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'text'     => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
                'post_id'  => '2',
            ],
            [
                'text'     => 'Quae, debitis aut. Optio dolor sunt fugit sequi.',
                'post_id'  => '1',
            ],
            [
                'text'     => 'Ullam mollitia veritatis quod facilis maiores expedita earum nostrum odio rerum doloribus illo non.',
                'post_id'  => '1',
            ]
        ]);
    }
}
