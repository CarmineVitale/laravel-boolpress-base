@extends('layouts.main')
@section('content')
    <h1>Commenti</h1>
    @foreach ($comments as $comment)
    <h2 class="text-primary">{{$comment->title}}</h2> 
    <p class="text-success">{{$comment->body}}</p> 
    @endforeach
    
@endsection