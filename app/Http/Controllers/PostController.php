<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //インポートしたPostをインスタンス化して$postとして使用。
    public function index(Post $post)
    {
        return $post->get();//$postの中身を戻り値にする。
    }
}
