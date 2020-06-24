@extends('layouts.main')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Crea Nuovo Post:</h1>
    <form action="{{ route('posts.store') }}" method="POST">
       @csrf
       @method('POST') 
       <div class="form-group">
           <label for="title">Titolo</label>
           <input class="form-control" type="text" name="title" id="title" value="{{ old('title')}}">
       </div>
       <div class="form-group">
            <label for="body">Corpo</label>
            <textarea class="form-control" name="description" id="description" value="{{ old('description')}}"></textarea>
        </div>
        @foreach ($tags as $tag)
        
        <input type="checkbox" name="tags[]" id="tag-{{ $loop->iteration }}" value="{{ $tag->id }}">
        <label  for="tag-{{ $loop->iteration }}">{{ $tag->name }}</label>
        @endforeach
        <input class="btn btn-primary" type="submit" value="Crea">
    </form>
    
@endsection