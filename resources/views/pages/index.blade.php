@forelse($posts as $post)
    @includeIf('parts.post')
@empty
    <p>Нет постов для отображения</p>
@endforelse