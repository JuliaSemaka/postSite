<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $posts = [];

        return view('layouts.primary', [
            'page' => 'pages.index',
            'title' => 'Блог',
            'name' => 'Яцко Юлия',
            'content' => 'Привет, меня зовут Юля, я PHP разработчик.',
            'image' => [
                'path' => 'assets/images/me.jpg',
                'alt' => 'Image'
            ],
            'imageMin' => 'assets/images/me90.jpg',
            'activeMenu' => 'main',
            'posts' => $posts
        ]);
    }

    public function about()
    {
        return view('layouts.primary', [
            'page' => 'pages.about',
            'title' => 'Обо мне',
            'name' => 'Яцко Юлия',
            'content' => 'Привет, меня зовут Юля, я PHP разработчик.',
            'image' => [
                'path' => 'assets/images/me.jpg',
                'alt' => 'Image'
            ],
            'imageMin' => 'assets/images/me90.jpg',
            'activeMenu' => 'about',
        ]);

    }

    public function feedback()
    {
        return view('layouts.primary', [
            'page' => 'pages.feedback',
            'title' => 'Обратная связь',
            'name' => 'Яцко Юлия',
            'content' => 'Привет, меня зовут Юля, я PHP разработчик.',
            'image' => [
                'path' => 'assets/images/me.jpg',
                'alt' => 'Image'
            ],
            'imageMin' => 'assets/images/me90.jpg',
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
