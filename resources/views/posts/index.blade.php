@extends('layouts.main')
@section('content')
    <h1>Posts</h1>
    @foreach ($posts as $post)
        <div>
            <h3>Titolo: {{ $post->title }}</h3>
            <h4>Scritto da: {{ $post->user->name }}</h4>
            <p>{{ $post->description }}</p>
            @if (!$loop->last) <hr> @endif
        </div>
    @endforeach
    {{-- Impaginazione post --}}
    <h4>
        {{ $posts->links() }}
    </h4>
@endsection