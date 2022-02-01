<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>編集</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>編集画面</h1>
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method("PUT")
             <div>
                <h2>タイトル</h2>
                <input name="post[title]" value="{{$post->title}}"/>
            </div>
            <div>
                <h3>本文</h3>
                <textarea name="post[body]">{{$post->body}}</textarea>
            </div>
            <input type="submit" value="保存" />
        </form>
       
        <a href="/">戻る</a>
    </body>
</html>