<?php

namespace Database\Seeders;

use App\Models\AnyFolder\Comment;
use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Post::all()->each(function ($post) use ($faker) {
            foreach (range(1, 20) as $i) {
                Comment::create([
                    'post_id' => $post->id,
                    'reply'   => $faker->sentence,
                ]);
            }
        });
    }
}
