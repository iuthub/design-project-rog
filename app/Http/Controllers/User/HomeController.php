<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class HomeController extends Controller
{
    public function index(){
$posts = Post::all();
      return view('user.home', compact('posts'));
    }
    public function about(){
      return view('user.about');

    }
    public function gallery(){
      return view('user.gallery');
    }
    public function posts(){
      return view('user.posts');

    }
    public function contact(){
      return view('user.contact');

    }
}
