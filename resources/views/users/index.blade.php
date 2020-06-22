@extends('layouts.main')

@section('content')
<h1>I nostri utenti</h1> <hr>

    @foreach ($users as $user)
    <div class="user">
        <h3>Immagine che ci mette una vita a caricare</h3>
        {{-- <img src="{{$user->info->image}}" alt="foto profilo"> --}}
        <h3>{{ $user->name }}</h3>
        <h4>{{ $user->email }} </h4>
        {{$user->info->phone}}
        {{$user->info->address}}
        <ul>
        @foreach ($user->posts as $post)
           <li>
                <h2>{{$post->title}}</h2>
                <p>{{$post->description}}</p>
           </li>
        @endforeach
        </ul>
        @if (!$loop->last)
        <hr>
        @endif
    </div>
    @endforeach
@endsection