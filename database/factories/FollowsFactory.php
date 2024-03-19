<?php

namespace Database\Factories;

use App\Models\Follows;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FollowsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Follows::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'follower_id' => rand(1, 100),
            'followed_id' => rand(1, 100),
        ];
    }
}
