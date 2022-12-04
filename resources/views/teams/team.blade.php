@extends('layouts.master')

@section('title', $team->name)

@section('content')

    <p>{{$team->name}}</p>
    <p>{{$team->email}}</p>
    <p>{{$team->address}}</p>
    <p>{{$team->city}}</p>

    @foreach ($team->players as $player)
        <li><a href="{{route('single-player', ['id' => $player->id])}}">{{$player->first_name}}</a></li>
    @endforeach
@endsection
