<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index(Request $request)
    {
//        $request->session()->put('key', 'value');
        dump(Auth::viaRemember(), Auth::user(), Auth::id(), $request->user()); //возвращает авторизованного пользователя
//        $request->session()->flash('status', 'Task was successful!');

        return 'ok';
    }
}
