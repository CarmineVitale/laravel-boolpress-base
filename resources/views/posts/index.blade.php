@extends('layouts.main')
@section('content')
    <h1>Posts</h1>
    @foreach ($posts as $post)
        <div>
            <h3>Titolo: {{ $post->title }}</h3>
            <h4>Scritto da: {{ $post->user->name }}</h4>
            <p>{{ $post->description }}</p>
            <h4>Commenti</h4>
            <ul>
                @forelse ($post->comments as $item)
                <li> <small>Titolo commento:</small>{{$item->title}} <br> <small>Corpo commento:</small> {{$item->body}} </li>
                @empty
                   <h2>Commenti non presenti</h2>
                @endforelse
            </ul>
            
            {{-- //@dump($post->comments) --}}
            
            @if (!$loop->last) <hr> @endif
            
        </div>
    @endforeach
    {{-- Impaginazione posts --}}
    <h4>
        {{ $posts->links() }}
    </h4>
@endsection