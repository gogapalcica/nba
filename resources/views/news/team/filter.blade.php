@extends('layouts.master')

@section('title', $team->name)

@section('content')

    <ul>
        @foreach ($team->news as $news)
            <li>{{$news->content}}</li>
        @endforeach
    </ul>

@endsection
