<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = Post::all();

        for ($i = 0; $i < 4; $i++) {
            $newComment = new Comment();

            $newComment->title = $faker->text(10);
            $newComment->body = $faker->text(100);
            $newComment->posts_id = $posts->random()->id;

            $newComment->save();

        }
    }
}
