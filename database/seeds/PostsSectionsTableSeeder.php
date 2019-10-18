<?php

use App\Models\Post;
use App\Models\Section;
use Illuminate\Database\Seeder;

class PostsSectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        $sectionsCount = Section::all()->count();

        foreach ($posts as $post) {
            $rand1 = mt_rand(1,$sectionsCount);
            $rand2 = mt_rand(1,$sectionsCount);
            $post->sections()->sync([$rand1, $rand2]);
        }

//        Post::find(1)->sections()->attach([1,2]);
//        Post::find(2)->sections()->attach([2,3]);
//        Post::find(3)->sections()->attach([3,4]);
//        Post::find(4)->sections()->attach([4,1]);
//        Post::find(5)->sections()->attach([1,2]);
//        Post::find(6)->sections()->attach([2,3]);
//        Post::find(7)->sections()->attach([3,4]);
//        Post::find(8)->sections()->attach([4,1]);
//        Post::find(9)->sections()->attach([1,2]);
//        Post::find(10)->sections()->attach([2,3]);

    }
}
