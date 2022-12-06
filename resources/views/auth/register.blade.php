@extends('layouts.master')

@section('title','Sign Up')



@section('content')
    <form method="POST" action = "/register">

        @csrf

            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input name= "name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your name">
            </div>


        @error('name')
        @include('partials.error')
        @enderror

            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Email</label>
            <input name= "email" class="form-control" id="exampleFormControlTextarea1">
            </div>

            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">password</label>
            <input type="password" name="password" class="form-control" id="exampleFormControlTextarea1">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">password_confirmation</label>
                <input type="password" name="password" class="form-control" id="exampleFormControlTextarea1">
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>

@endsection
