<!DOCTYPE html>
<html lang="{{str_replace('_','-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <!--<x-slot name="header">-->
        <!--    ヘッダー名-->
        <!--</x-slot>-->
        <body class="antialiased">
            <h1>Blog Name</h1>
            <a href='/posts/create'>[create]</a>
            <div class='posts'>
                @foreach ($posts as $post)
                    <div class='post'>
                        <a href="/posts/{{ $post->id }}"><h2 class='title'>{{$post->title}}</h2></a>
                        <a href="">{{$post->category->name}}</a>
                        <p class='body'>{{$post->body}}</p>
                        <form action ="/posts/{{$post->id}}" id="form_{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                        </form> 
                    </div>
                    <br>
                @endforeach
            </div>
            ログインユーザー：{{ Auth::user()->name }}
            <div class='paginate'>{{$posts->links()}}</div>
            <script>
                function deletePost(id){
                    'use strict'
                    
                    if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </body>
    </x-app-layout>
</html>