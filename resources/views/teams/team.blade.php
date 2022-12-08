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

    <div>
        <h2>Leave a comment:</h2>

        <form method="POST" action="/teams/{{ $team->id }}/comments">

            @csrf

            <div class="mb-3">
                <input type="text" name="content" class="form-control" id="exampleFormControlInput1" placeholder="comment">
            </div>

            @error('content')
                @include('partials.error')
            @enderror

            <button type="submit">Send comment</button>
        </form>
    </div>

    <form method= "POST" action="/team/{{ $team->id }}/comments">
        <div>
            <h2>Comments:</h2>

            <ul>
                @foreach ($team->comments as $comment)
                    <li>
                        {{$comment->content}}
                    </li>
                @endforeach
            </ul>
        </div>
    </form>
@endsection
