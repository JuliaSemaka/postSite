<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Section, App\Models\Post;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->renderSharedViews();
    }

    protected function renderSharedViews()
    {
        View::share('sectionList', [
            'path' => 'parts.shared.sectionList',
            'sections' => Section::all()
        ]);

        View::share('favoritePost', [
            'path' => 'parts.shared.favoritePost',
            'post' => Post::where('is_favorite', 1)
                    ->orderBy('id', 'DESC')
                    ->take(1)
                    ->first()
        ]);

        View::share('tagList', [
            'path' => 'parts.shared.tagList',
            'tags' => Tag::all()
        ]);

        View::share('aboutMe', [
            'name' => 'Яцко Юлия',
            'content' => 'Привет, меня зовут Юля, я PHP разработчик.',
            'image' => [
                'path' => 'assets/images/me.jpg',
                'alt' => 'Image'
            ],
            'imageMin' => 'assets/images/me90.jpg',
            'imageMax' => 'assets/images/me748.jpg'
        ]);

//        View::share('postList', [
//            'path' => 'parts.shared.postList',
//            'recentPosts' => Post::all()
//                ->inTime()
//                ->orderBy('id', 'DESC')
//                ->take(3)
//                ->get(),
//            'popularPosts' => Post::active()
//                ->inTime()
//                ->orderBy('views_count', 'DESC')
//                ->take(3)
//                ->get(),
//        ]);
    }
}
