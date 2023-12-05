<!DOCTYPE html>
<html lang="{{str_replace('_','-', app()->getLocale()) }}">
    <head>
        <meta cherset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?famiry=Nunito:200:600" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <a href="/posts/{{ $post->id }}"><h2 class='title'>{{$post->title}}</h2></a>
                    <p class='body'>{{$post->body}}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{$posts->links()}}
        </div>
    </body>
</html>