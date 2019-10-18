@if (!empty($sectionList['sections']))
    <div class="widget-categories  push-down-30">
        <h6>РАЗДЕЛЫ</h6>
        <ul>
            @foreach($sectionList['sections'] as $section)
                <li>
                    <a href="{{ route('posts.bySection', ['id' => $section->id]) }}">{{ $section->title }} &nbsp; <span class="widget-categories__text">({{ $section->posts()->count() }})</span> </a>
                </li>
            @endforeach
        </ul>
    </div>
@endif