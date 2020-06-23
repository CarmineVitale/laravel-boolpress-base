@extends('layouts.main')
@section('content')
    <h1>Commenti</h1>
    @foreach ($comments as $comment)
    <h2>Titolo commento: </h2> <span>{{$comment->title}}</span> 
    <h2>Commento: </h2> <p>{{$comment->body}}</p> 
    @endforeach
    
@endsection