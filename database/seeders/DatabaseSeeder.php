<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ModelHasRolesSeeder::class);

        $this->call(CategorySeeder::class);
        $this->call(ProjectSeeder::class);

        // project 11
        $this->call(Projects\Project11\StorySeeder::class);

        $this->call(Projects\Project11\CatSeeder::class);
        $this->call(Projects\Project11\PostSeeder::class);

        $this->call(Projects\Project11\AreaSeeder::class);
        $this->call(Projects\Project11\WorkSeeder::class);
        // $this->call(Projects\Project11\AreaWorkSeeder::class);

        \App\Models\Projects\Project11\Comment::factory(10)->create();
    }
}
