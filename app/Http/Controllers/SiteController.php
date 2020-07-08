<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SiteController extends Controller
{
    public function singlepost($slug)
    {
    	$post = Post::where('slug','=',$slug)->first();
    	return view('posts.singlepost', compact('post'));
    }

    public function postberita()
    {
    	$post = Post::all();
    	return view('munas', compact('post'));
    }
    
    public function speed()
    {
    	return view('index');
    }
}
