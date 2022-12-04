@extends('layouts.master')

@section('title', $player->first_name)

@section('content')

<p>{{$player->first_name}}</p>
<p>{{$player->last_name}}</p>
<p>{{$player->email}}</p>
<p><a href="{{route('single-team', ['id' => $team->id])}}">{{$team->name}}</p></a>


@endsection
