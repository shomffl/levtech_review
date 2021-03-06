<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div>
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{old("post.title")}}"/>
                <p style="color:red">{{$errors->first("post.title")}}</p>
            </div>
            <div>
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="本文" >{{old("post.body")}}</textarea>
                <p style="color:red">{{$errors->first("post.body")}}</p>
            </div>
            <input type="submit" value="保存" />
        </form>
        <a href="/">戻る</a>
    </body>
</html>