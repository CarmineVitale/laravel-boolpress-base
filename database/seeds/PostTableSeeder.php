<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;
use Faker\Generator as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Post::truncate();
        $users = User::all();

        for($i = 0; $i < 8; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->text(10);
            $newPost->description = $faker->text(200);
            $newPost->user_id = $users->random()->id;

            $newPost->save();
        }
    }
}
