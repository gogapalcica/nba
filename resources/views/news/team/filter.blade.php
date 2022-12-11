@extends('layouts.master')

@section('title', $team->name)

@section('content')

    <ul>
        @foreach ($news as $new)
            <li>{{$new->content}}</li>
        @endforeach
    </ul>

    {{ $news->onEachSide(5)->links() }}

@endsection
