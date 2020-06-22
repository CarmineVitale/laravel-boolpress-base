@extends('layouts.main')

@section('content')
<h1>I nostri utenti</h1>
    @foreach ($users as $user)
    <div class="user">
        <h1>Immagin</h1>
        {{-- <img src="{{$user->info->image}}" alt="foto profilo"> --}}
        <h3>{{ $user->name }}</h3>
        <h4>{{ $user->email }} </h4>
        {{$user->info->phone}}
        {{$user->info->address}}
        
        @if (!$loop->last)
        <hr>
        @endif
    </div>
    @endforeach
@endsection