<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relations</title>
</head>
<body>
    <header>
        <nav>
            <h2>Brand</h2>
            <ul>
               <li><a href="{{ route('welcome') }}">Home</a></li>
               <li><a href="{{ route('users.index') }}">Blog</a></li>
               <li><a href="{{ route('posts.index') }}">Post</a></li>
               <li><a href="{{ route('comments.index') }}">Commenti</a></li>
            </ul>
        </nav>
    </header>