<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post($id)
    {
        $post = [];

        return view('layouts.secondary', [
            'page' => 'pages.post',
            'title' => 'Статья',
            'post' => $post
        ]);
    }
}
