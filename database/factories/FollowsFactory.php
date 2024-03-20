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
        $follower_id = rand(1, 100);
        $followed_id = rand(1, 100);
        while(1) {
            $followed_id = rand(1, 100);
            if($follower_id != $followed_id)
                break;
        }
        return [
            'follower_id' => $follower_id,
            'followed_id' => $followed_id,
        ];
    }
}
