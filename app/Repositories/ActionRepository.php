<?php namespace App\Repositories;

use App\Models\Post;
use App\Models\Section;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ActionRepository
{
    public function getPosts()
    {
        return Post::all();
    }

    public function getPost($id)
    {
        return Post::find($id);
    }

    public function getPostsByUser($id)
    {
        return User::find($id)
            ->posts
            ->all();
    }

    public function createPost($request)
    {
//        dump($request->input('title'));
//        return 'ok';

//        return Auth::user()
//            ->posts()
//            ->create([
//                'title' => $request->input('title'),
//                'slug' => $request->input('title'),
//                'tagline' =>$request->input('tagline'),
//                'announce' => $request->input('announce'),
//                'fulltext' => $request->input('fulltext')
//            ]);
    }

    public function getPostsBySection($id)
    {
        return Section::find($id)
            ->posts
            ->all();
    }

    public function getPostsByTag($id)
    {
        return Tag::find($id)
            ->posts
            ->all();
    }

    //и тд
}