<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::all();

        return view('posts', compact('posts'));
    }

    public function show($post_id){
        $posts = Post::where('id', $post_id)->get();
        $post = $posts[0];
        dump($post);
        return view('show-post', compact('post'));
    }
}
