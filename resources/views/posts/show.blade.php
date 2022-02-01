<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>{{$post->title}}</h1>
        <div>
            <h3>本文</h3>
            <p>{{$post->body}}</p>
        </div>
        <a href="/">戻る</a>
    </body>
</html>