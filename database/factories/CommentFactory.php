<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userID = rand(1, 100);
        $user = User::find($userID);

        return [
            'post_id' => rand(1, 200),
            'user_id' => $userID,
            'commentContent' => $this->faker->paragraph,
            'images' => NULL,
            'userName' => $user->name,
        ];
    }
}
