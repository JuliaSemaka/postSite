@extends('layouts.two-column')

@section('left-column')
    @includeIf($page)
@endsection

@section('right-column')
    @includeIf('rightCol.me')
    <div class="sidebar boxed push-down-30">
        <div class="row">
            <div class="col-xs-10  col-xs-offset-1">
                @includeIf('rightCol.categories')
                @includeIf('rightCol.featured-post')
                @includeIf('rightCol.posts')
                @includeIf('rightCol.tags')
            </div>
        </div>
    </div>
@endsection