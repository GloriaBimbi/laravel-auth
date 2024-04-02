<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *  @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 150; $i++){
            $post = new Post;
            $post->title = $faker->catchPhrase();
            $post->slug = Str::slug($post->title);
            $post->content = $faker->paragraph(2, true);
            $post->save();
        }

    }
}
