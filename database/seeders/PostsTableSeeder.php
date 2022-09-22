<?php

namespace Database\Seeders;

use App\Models\Post;
use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        User::all()->each(function ($user) use ($faker) {
            foreach (range(1, 5) as $i) {
                Post::create([
                    'author_id' => $user->id,
                    'title'   => $faker->sentence,
                    'content' => $faker->sentence,
                ]);
            }
        });
    }
}
