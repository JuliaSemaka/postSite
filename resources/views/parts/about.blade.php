<div class="boxed sticky push-down-30">
    @if ($aboutMe['image'])
        <div class="widget-author__image-container">
            <img src={{ $aboutMe['imageMax'] }} alt="Image" width="748" height="324">
        </div>
    @endif
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <div class="widget-author__content">
                <h4>{{ $aboutMe['name'] ?? 'Это я'}}</h4>
                <p>{!! $aboutMe['content'] ?? 'Пока ничего нет'!!}</p>
            </div>
        </div>
    </div>
</div>