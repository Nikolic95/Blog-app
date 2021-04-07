<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showHomePage(){

        $posts = Post::paginate(9);
        

        return view('home',['posts' => $posts]);
    }

    public function showUserPage(){
        $posts = Post::paginate(15);
        return view('user', ['posts' => $posts]);
    }
}
