<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

use Illuminate\Support\Facades\Response;

class PostApiController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return Response::json(array(
            'posts' => $posts
        ));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return Response::json(array(
            'post' => $post
        ));
    }
}
