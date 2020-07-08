<?php

namespace App\Http\Controllers;

use App\Post;
use App\Admin;
use Auth;

use Illuminate\Http\Request;

class PostController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
    	$post = Post::all();
    	return view('posts.index', compact('post'));
    }

    public function addpost()
    {
        return view('posts.add');
    }
}
