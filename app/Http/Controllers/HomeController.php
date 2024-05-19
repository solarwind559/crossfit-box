<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        // $paginate_posts = Post::paginate(6);
        // return view('index', compact('paginate_posts'));
            // Retrieve paginated posts
        $posts = Post::paginate(6);

        // Pass the paginated posts to the view
        return view('index', compact('posts'));


    }

    public function show($id)
    {
        // return view('post');
        $post = Post::find($id);
        return view('single-post', ['post' => $post]);
    }
}
