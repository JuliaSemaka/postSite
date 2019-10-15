@extends('layouts.app')

@section('header')
    @include('parts.header')
@endsection

@section('search_panel')
    @include('parts.search-panel')
@endsection

@section('content')
    <div class="container push-down-45">
        @section('center-column')
        @show
    </div>
@endsection

@section('footer_links')
    @include('parts.footer-links')
@endsection

@section('footer_copyrights')
    @include('parts.footer-copyrights')
@endsection