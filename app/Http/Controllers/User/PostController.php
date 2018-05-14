<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{

  public function posts(){
    $posts=Post::all();
    return view('user.posts', compact('posts'));

  }
  public function post(Post $post){
    return view('user.post', compact('post'));

  }


}
