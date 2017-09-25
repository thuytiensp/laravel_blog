<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Session\Store;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getIndex(Store $session)
    {
    	$post = new Post();
    	$posts = $post->getPosts($session);
    	return view('blog.index', ['posts'=>$posts]);
    }
}
