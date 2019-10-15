<div class="widget-author  boxed  push-down-30">
    @if (isset($image))
        <div class="widget-author__image-container">
            <div class="widget-author__avatar--blurred">
                <img src="{{ $image['path'] }}" alt="{{ $image['alt'] }}" width="90" height="90">
            </div>
            <img class="widget-author__avatar" src="{{ $imageMin }}" alt="{{ $image['alt'] }}" width="90"
                 height="90">
        </div>
    @endif
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <h4>{{ $name ?? ''}}</h4>
            <p>{{ $content ?? ''}}</p>
        </div>
    </div>
</div>