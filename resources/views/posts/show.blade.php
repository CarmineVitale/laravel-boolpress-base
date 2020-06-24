@extends('layouts.main')

@section('content')
    <h1>Dettaglio Post:</h1>
    <h3>Titolo: {{ $post->title }}</h3>
    <h4>Scritto da: {{ $post->user->name }}</h4>
    <p>{{ $post->description }}</p>
    <section>
        @forelse ($post->tags as $tag)
        <span class="badge badge-pill badge-primary">{{ $tag->name }}</span>
        @empty
            Nessun tag
        @endforelse
    </section>
@endsection