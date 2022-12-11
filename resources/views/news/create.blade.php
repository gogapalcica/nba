@extends('layouts.master')

@section('title', 'Create News')

@section('content')

<form method="POST" action="/news/create">

    @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">News Title</label>
      <input name = "title" type="text" class="form-control" id="exampleInputEmail1">
    </div>

    @error('title')
        @include('partials.error')
    @enderror

    <div class="form-group">
        <label for="exampleInputEmail1">Content</label>
        <input name = "content" type="text" class="form-control" id="exampleInputEmail1">
      </div>

      @error('content')
          @include('partials.error')
      @enderror

    <div class="form-group">
        <label for="teams">Choose teams:</label>

        <select name="team_id[]" id="teams" multiple="">

            @foreach (  $news->teams as $team)

                <option value={{$team->id}}>{{$team->name}}</option>

            @endforeach

        </select>
    </div>

    @error('team_id')
          @include('partials.error')
      @enderror

    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection
