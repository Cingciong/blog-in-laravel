<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $images = [];
        if(rand(1,10) == 5 or rand(1,10) == 6 or rand(1,10) == 7) {
            $images = ['https://picsum.photos/800/600'];
        }
        if (rand(1,10) == 8 or rand(1,10) == 9) {
            $images = ['https://picsum.photos/1000/600', 'https://picsum.photos/1200/700'];
        }

        $userID = rand(1, 100);
        $user = User::find($userID);


        return [
            'user_id' => $userID,
            'images' => json_encode($images),
            'userTag' => $user->tag,
            'postContent' => $this->faker->paragraph,
            'userName' => $user->name,
        ];
    }
}
