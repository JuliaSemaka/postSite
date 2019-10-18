@if (!empty($tagList['tags']))
    <div class="tags  widget-tags">
        <h6>Тэги</h6>
        <hr>
        @foreach($tagList['tags'] as $tag)
            <a href="{{ route('posts.byTag', ['id' => $tag->id]) }}" class="tags__link">{{ $tag->title }}</a>
        @endforeach
    </div>
@endif