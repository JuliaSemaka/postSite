<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class PostsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        $tagsCount = Tag::all()->count();

        foreach ($posts as $post) {
            $rand1 = mt_rand(1,$tagsCount);
            $rand2 = mt_rand(1,$tagsCount);
            $post->tags()->sync([$rand1, $rand2]);
        }

//        Post::find(1)->tags()->attach([1,2]);
//        Post::find(1)->tags()->attach([1,2]);
//        Post::find(2)->tags()->attach([2,3]);
//        Post::find(3)->tags()->attach([3,4]);
//        Post::find(4)->tags()->attach([4,1]);
//        Post::find(5)->tags()->attach([1,2]);
//        Post::find(6)->tags()->attach([2,3]);
//        Post::find(7)->tags()->attach([3,4]);
//        Post::find(8)->tags()->attach([4,1]);
//        Post::find(9)->tags()->attach([1,2]);
//        Post::find(10)->tags()->attach([2,3]);
    }
}
