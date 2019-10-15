<div class="boxed  push-down-45">

    @forelse($posts as $post)
        @includeIf('parts.post')
    @empty
        <p>Нет постов для отображения</p>
    @endforelse

</div>