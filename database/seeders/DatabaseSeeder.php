<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::truncate();
//        Category::truncate();
//        Post::truncate();
        $user =  User::factory()->create();
        Post::factory(30)->create([
            'thumbnail' => 'thumbnails/illustration-4.png'
        ]);

//        $user = User::factory()->create();
//
//        $personal = Category::create([
//             'name' => 'Personal',
//             'slug' => 'personal'
//         ]);    $family =     Category::create([
//             'name' => 'Family',
//             'slug' => 'family'
//         ]);   $work =      Category::create([
//             'name' => 'Work',
//             'slug' => 'work'
//         ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $personal->id,
//            'title' => 'My personal post',
//            'slug' => 'my-personal-post',
//            'excerpt' => '<p>Lorem mdsklovmndos nojldksjf dklsj</p>',
//            'body' => '<p>Lorem mdsklovmndos nojldksjf dklsj dfohjdsfiomiod djsvopdsjfo sdfjmdlsj</p>'
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'My family post',
//            'slug' => 'my-family-post',
//            'excerpt' => '<p>Lorem mdsklovmndos nojldksjf dklsj</p>',
//            'body' => '<p>Lorem mdsklovmndos nojldksjf dklsj dfohjdsfiomiod djsvopdsjfo sdfjmdlsj</p>'
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My work post',
//            'slug' => 'my-work-post',
//            'excerpt' => '<p>Lorem mdsklovmndos nojldksjf dklsj</p>',
//            'body' => '<p>Lorem mdsklovmndos nojldksjf dklsj dfohjdsfiomiod djsvopdsjfo sdfjmdlsj</p>'
//        ]);


    }
}
