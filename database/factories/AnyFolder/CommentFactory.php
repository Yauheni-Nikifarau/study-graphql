<?php

namespace Database\Factories\AnyFolder;

use App\Models\AnyFolder\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use function fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $post_ids = Post::all('id');
        $posts_number = count($post_ids);
        $post_id = $post_ids[rand(0, $posts_number)]->id;

        return [
            'reply' => fake()->sentence,
            'post_id' => $post_id,
        ];
    }
}
