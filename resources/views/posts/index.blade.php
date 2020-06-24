@extends('layouts.main')
@section('content')
    <h1>Posts</h1>
    @foreach ($posts as $post)
        <div>
            <h3 class="text-success">{{ $post->title }}</h3>
            <p class="text-primary">Scritto da: {{ $post->user->name }}</p>
            <p>{{ $post->description }}</p>
            <a href="{{ route('posts.show', $post->slug )}}">Dettagli</a>
            
            <ul>
                @forelse ($post->comments as $item)
                <li> <small>Titolo commento:</small>{{$item->title}} <br> <small>Corpo commento:</small> {{$item->body}} </li>
                @empty
                   <h2 class="text-danger">Commenti non presenti</h2>
                @endforelse
            </ul>
            
            {{-- //@dump($post->comments) --}}
            
            @if (!$loop->last) <hr> @endif
            
        </div>
    @endforeach
    {{-- Impaginazione posts --}}
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection