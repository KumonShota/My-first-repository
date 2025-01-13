<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
<<<<<<< HEAD
        return $post->get();
=======
        return view('posts.index')->with(['posts' => $post->get()]);
>>>>>>> e722705 (Merge remote-tracking branch 'origin/main' into dev_basis02)
    }
}
