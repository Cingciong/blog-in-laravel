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
        $this->post = Post::find(rand(1, 200));

        return [
            'post_id' => $this->post->id,
            'user_id' => $userID,
            'commentContent' => $this->faker->paragraph,
            'images' => NULL,
            'userName' => $user->name,
            'created_at' => $this-> post->created_at,
            'updated_at' => $this-> post->updated_at,
        ];
    }
}
