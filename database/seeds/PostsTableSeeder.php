<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++){
            $postObj = new Post();
            $postObj->title_post = $faker->words(4, true);
            $postObj->author = $faker->name();
            $postObj->text = $faker->paragraphs(3, true);
            $postObj->photo = 'https://loremflickr.com/640/480/view';
            $postObj->save();
        }
    }
}
