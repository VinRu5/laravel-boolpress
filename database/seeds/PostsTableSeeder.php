<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\User;
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

        $categoryList = [
            'cronaca',
            'turismo',
            'tecnologia',
            'divertimento',
            'finanza',
            'biografia',
            'libri',
            'musica',
            'sport',
            'cinema'
        ];

        $listOfCategoryID = [];

        foreach($categoryList as $category) {
            $categoryObj = new Category();
            $categoryObj->name = $category;
            $categoryObj->save();
            $listOfCategoryID[] = $categoryObj->id;
        }

        $listOfUserID = [1];

        for ($i = 0; $i < 20; $i++){
            $user = new User();
            $user->name = $faker->name();
            $user->email = $faker->email();
            $user->password = $faker->password(8, 10);
            $user->save();
            $listOfUserID[] = $user->id;
        }


        for($i = 0; $i < 50; $i++){

            $postObj = new Post();
            $postObj->title_post = $faker->words(3, true);
            $randUserKey = array_rand($listOfUserID, 1);
            $userID = $listOfUserID[$randUserKey];
            $postObj->user_id = $userID;
            $postObj->text = $faker->paragraphs(3, true);
            $postObj->photo = 'https://loremflickr.com/640/480/view';
            $randCategoryKey = array_rand($listOfCategoryID, 1);
            $categoryID = $listOfCategoryID[$randCategoryKey];
            $postObj->category_id = $categoryID;
            $postObj->save();
        }
    }
}
