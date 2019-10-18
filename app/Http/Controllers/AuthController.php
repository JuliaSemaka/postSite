<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function register()
    {
        return view('layouts.secondary', [
            'page' => 'pages.register',
            'title' => 'Регистрация в блоге',
            'content' => '',
            'activeMenu' => 'register'
        ]);
    }

    public function registerPost(RegisterRequest $request)
    {
//        $request->validate([
//            'name' => 'required|min:2|max:20',
//            'email' => 'required|email|unique:users',
//            'password' => 'required|max:255|min:6',
//            'password2' => 'required|same:password',
//            /*'phone' => '/regex:/\+\d{1}\s{1}\(\d{3}\)\s{1}\d{3}\-\d{2}\-\d{2}/',
//            'phone' => 'number|min:10|max:15',*/
//            'is_confirmed' => 'accepted'
//        ]);

        $request->validated();

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

//        dump($user->id);
//        return 'ok';
        $user->profile()->create([
            'user_id' => $user->id,
            'phone' => $request->input('phone'),
            'birthday' => $request->input('birthday')
        ]);

        return redirect()->route('main.index');
    }

    public function login()
    {
        return view('layouts.secondary', [
            'page' => 'pages.login',
            'title' => 'Вход в систему',
            'content' => 'Привет, меня зовут Юля, я PHP разработчик.',
            'activeMenu' => 'login',
        ]);
    }

    public function loginPost(Request $request)
    {
//        $dbDate = DB::table('users')->where('email', '=', $request->input('email'))->first();
//        dump($dbDate);
//        return 'OK';

//        $email = $request->input('email');
//        $pass = $request->input('password');
//
//        if(Auth::attempt(['email' => $email, 'password' => $pass])){
//            return redirect()->route('home');
//        }else{
//            dump('oshibka');
//
//        }

        $remember = $request->input('remember') ? true : null;
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $remember)) {
            // Authentication passed...
            return redirect()->route('main.index');
        }
        return redirect()->route('auth.login')->withInput();
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('main.index');
    }
}
