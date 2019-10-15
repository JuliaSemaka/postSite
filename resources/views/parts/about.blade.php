<div class="boxed sticky push-down-30">
    @if (isset($image))
        <div class="widget-author__image-container">
            <img src="assets/images/me748.jpg" alt="Image" width="748" height="324">
        </div>
    @endif
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <div class="widget-author__content">
                <h4>{{ $name ?? 'Это я'}}</h4>
                <p>{!! $content ?? 'Пока ничего нет'!!}</p>
            </div>
        </div>
    </div>
</div>