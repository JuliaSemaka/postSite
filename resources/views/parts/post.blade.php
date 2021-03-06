<div class="boxed  push-down-45">
    <div class="meta">
        @if ($post->image)
            <img class="wp-post-image" src="{{ $post->image }}" alt="Blog image" width="748"
                 height="324">
        @endif
        <div class="row">
            <div class="col-xs-12  col-sm-10  col-sm-offset-1">
                <div class="meta__container--without-image">
                    <div class="row">
                        <div class="col-xs-12  col-sm-8">
                            <div class="meta__info">
                                <a href="#">Статьи</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="meta__comments">
                                <span class="meta__date"><span class="glyphicon glyphicon-calendar"></span> &nbsp; {{ $post->active_from ?? 'date unknown' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <div class="post-content--front-page">
                <h2 class="front-page-title">
                    <a href="{{ route('posts.post', ['id' => $post->id]) }}">{{ $post->caption }}</a>
                </h2>
                @if ($post->tagline)
                    <h3>{{ $post->tagline }}</h3>
                @endif
                @if ($post->announce)
                    <p>{!! $post->announce !!}</p>
                @endif
            </div>
            <a href="{{ route('posts.post', ['id' => $post->id]) }}">
                <div class="read-more">
                    Читать далее <span class="glyphicon glyphicon-chevron-right"></span>
                    <div class="comment-icon-counter">
                        <span class="glyphicon glyphicon-comment comment-icon"></span>
                        <span class="comment-counter">{{ $post->comments->count() }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>