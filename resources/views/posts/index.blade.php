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
        <a href="/posts/create">create</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'><a href="posts/{{$post->id}}">{{ $post->title }}</a></h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
                <form action="/posts/{{$post->id}}" id="form_{{$post->id}}" method="POST" style="display:inline">
                    @csrf
                    @method("DELETE")
                    <button type="submit" onclick="return checkDelete()">削除</button>
                </form>
            @endforeach
        </div>
        <div>{{$posts->links()}}</div>
        <script>
            function checkDelete(){
                const result = window.confirm("本当に削除しますか？");
                if (result){
                    return true;
                }else{
                    return false;
                }
            }
        </script>
    </body>
</html>