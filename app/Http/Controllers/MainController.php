<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
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

    public function feedbackPost()
    {
        $this->validate($this->request, [
            'name' => 'required|max:50|min:2',
            'email' => 'required|max:255|email',
            'message' => 'required|max:10240|min:5',
        ]);

        $mailTemplate = view('mails.feedback', [
            'data' => $this->request->all()
        ])->render();
//        dump($mailTemplate);
//
//        Mail::raw($mailTemplate, function($message) {
//            $message->from('ysemaka@mail.ru');
//            $message->to('ivanyatsko@mail.ru');
//            $message->setContentType('text/html');
//            $message->subject('Письмо с блога');
//        });
//
//        return 'ok';

        Mail::to('ysemaka@mail.ru')
            ->send(new FeedbackMail($this->request->all()));

        return 'ok';
//        return view('layouts.primary', [
//            'page' => 'parts.blank',
//            'title' => 'Сообщение отправлено!',
//            'content' => 'Спасибо за ваше сообщение!',
//            'link' => '<a href="javascript:history.back()">Вернуться назад</a>',
//            'activeMenu' => 'feedback',
//        ]);
    }

    public function db(Request $request)
    {
        return view('layouts.secondary', [
            'page' => 'pages.db',
            'title' => 'DB'
        ]);
    }
}
