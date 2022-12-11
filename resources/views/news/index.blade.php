@extends('layouts.master')

@section('title', 'News')

@section('content')

    <h1>NEWS:</h1>

    <ul>
        @foreach ($news as $new)
            <p><a href="{{route('single-news', ['id' => $new->id ])}}">{{$new->title}}</a></p>
            <li>
                {{$new->content}}
                {{$new->user->name}}
                {{$new->user->id}}
            </li>
        @endforeach
    </ul>

    {{ $news->onEachSide(10)->links() }}

@endsection
