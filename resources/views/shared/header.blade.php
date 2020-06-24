<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relations</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'/>
</head>
<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <h2 >Brand</h2>
            <ul class="navbar-nav ml-auto">
               <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}">Home</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Blog</a></li>
               <li class="nav-item"><a  class="nav-link" href="{{ route('posts.index') }}">Post</a></li>
               <li class="nav-item"><a  class="nav-link" href="{{ route('comments.index') }}">Commenti</a></li>
               <li class="nav-item"><a  class="nav-link" href="{{ route('posts.create') }}">Crea nuovo post</a></li>
            </ul>
        </nav>
    </header>