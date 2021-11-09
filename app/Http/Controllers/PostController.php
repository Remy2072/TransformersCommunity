<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    function __construct()
    {
        View::share('user', Auth::user());
    }

    public function index(){
        $posts = Post::all();
        return view('index',['posts'=>$posts]);
    }
}

