<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Section;
use App\Models\Tag;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Repositories\ActionRepository;

class PostController extends Controller
{
    protected $request;
    protected $repository;

    public function __construct(Request $request, ActionRepository $repository)
    {
        parent::__construct($request);

        $this->request = $request;
        $this->repository = $repository;
    }

    public function post($id)
    {
        $post = $this->repository->getPost($id);

        return view('layouts.secondary', [
            'page' => 'pages.post',
            'title' => 'Статья',
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('layouts.primary', [
            'page' => 'pages.create',
            'title' => 'Создание нового поста',
        ]);
    }

    public function createPost()
    {
//        $post = $this->repository->createPost($this->request);
//dump($post);
//        return redirect()->route('main.index');
//
//        $request['active_from'] = Carbon::now();
//        $request['slug'] = sha1(mt_rand(1,16) . microtime(true));
//
//        $postModel = Post::create($this->request->all());
//        $postModel->slug = $postModel->id . ':' . str_slug($postModel->title, '-');
//        $postModel->save();

//        return redirect()->route('site.main.index');
//        dump(Post::find(1)->title);
        Post::create([
                'title' => 'tit',
                'slug' => 'title',
                'tagline' =>'tit',
            ]);

        return 'ok';
    }

    public function bySection($id)
    {
        $posts = $this->repository->getPostsBySection($id);
        $title = Section::find($id)->title;
//        $posts = User::find(1)->posts;

        return view('layouts.primary', [
            'page' => 'pages.index',
            'title' => $title,
            'posts' => $posts
        ]);
    }

    public function byTag($id)
    {
        $posts = $this->repository->getPostsByTag($id);
        $title = Tag::find($id)->title;

        return view('layouts.primary', [
            'page' => 'pages.index',
            'title' => $title,
            'posts' => $posts
        ]);
    }

    public function byUser($id)
    {
        $posts = $this->repository->getPostsByUser($id);

        return view('layouts.primary', [
            'page' => 'pages.index',
            'title' => 'Мои статьи',
            'posts' => $posts
        ]);
    }
}
