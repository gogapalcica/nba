@extends('layouts.master')

@section('title', $news->title)

@section('content')

    <p>Title: {{$news->title}}</p>

    <p>Content: {{$news->content}}</p>

    <p>User name: {{$news->user->name}}</p>

    <p>User id: {{$news->user->id}}</p>


    <h3>Teams:</h3>
    <ul>
        @foreach ($news->teams as $team)
            <li>{{$team->name}}</li>
        @endforeach
    </ul>
@endsection
