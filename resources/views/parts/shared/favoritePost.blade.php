@if (!empty($favoritePost['post']))
    <div class="widget-featured-post  push-down-30">
        <h6>Избранный пост</h6>
        <img src="{{ $favoritePost['post']->image }}" alt="Featured post" width="293" height="127">
        <h4>
            <a href="{{ route('posts.post', ['id' => $favoritePost['post']->id]) }}">{{ $favoritePost['post']->title }}</a>
        </h4>
        <p>{{ $favoritePost['post']->announce }}</p>
    </div>
@endif