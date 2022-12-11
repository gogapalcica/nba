@extends('layouts.master')

@section('title','CommentReceived')

@section('content')

<p>imate novi komentar od {{auth()->user()->name}}</p>

@endsection
