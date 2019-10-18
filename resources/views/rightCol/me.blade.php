@if (Auth::check())
    <div class="widget-author  boxed  push-down-30">
        {{--    @if (isset($aboutMe['image']))--}}
        {{--        <div class="widget-author__image-container">--}}
        {{--            <div class="widget-author__avatar--blurred">--}}
        {{--                <img src="{{ $aboutMe['image']['path'] }}" alt="{{ $aboutMe['image']['alt'] }}" width="90" height="90">--}}
        {{--            </div>--}}
        {{--            <img class="widget-author__avatar" src="{{ $aboutMe['imageMin'] }}" alt="{{ $aboutMe['image']['alt'] }}" width="90"--}}
        {{--                 height="90">--}}
        {{--        </div>--}}
        {{--    @endif--}}
        <div class="row">
            <div class="col-xs-10  col-xs-offset-1">
                <h4>{{ Auth::user()->name }}</h4>
                <a href="{{ route('posts.byUser', ['id' => Auth::id()]) }}"
                   class="tags__link">Мои статьи</a>
                {{--            <p>{{ $aboutMe['content'] ?? ''}}</p>--}}
            </div>
        </div>
    </div>
@endif