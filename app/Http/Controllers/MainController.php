<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\ActionRepository;

class MainController extends Controller
{
    public function index(ActionRepository $repository)
    {
        $posts = $repository->getPosts();

        return view('layouts.primary', [
            'page' => 'pages.index',
            'title' => 'Блог',
            'activeMenu' => 'main',
            'posts' => $posts
        ]);
    }

    public function about()
    {
        return view('layouts.primary', [
            'page' => 'pages.about',
            'title' => 'Обо мне',
            'activeMenu' => 'about',
        ]);

    }

    public function feedback()
    {
        return view('layouts.primary', [
            'page' => 'pages.feedback',
            'title' => 'Обратная связь',
            'activeMenu' => 'feedback',
        ]);
    }

    public function db(Request $request)
    {
        return view('layouts.secondary', [
            'page' => 'pages.db',
            'title' => 'DB'
        ]);
    }
}
