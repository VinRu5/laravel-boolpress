<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

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
            $postObj->text = $faker->paragraph(1);
            $postObj->photo = $faker->imageUrl(640, 480, 'post', true);
            $postObj->save();
        }
    }
}
