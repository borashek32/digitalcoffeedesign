<?php

namespace Database\Factories\Projects\Project11;

use App\Models\Projects\Project11\Cat;
use App\Models\Projects\Project11\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'text'    => $this->faker->words(30, true),
            'post_id' => $this->faker->randomElement([1, 4, 3, 2])
        ];
    }
}
