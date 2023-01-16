<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($slug)
    {

//        $post = DB::table('posts')->where('slug', $slug)->first();

        $post = Post::where('slug', $slug)->firstOrFail();



//        $posts = [
//            'my-first-post' => 'Hello! This my first blog post',
//            'my-second-post' => 'Hello!This my second blog post'
//        ] ;

//        if (! array_key_exists($post, $posts)) {
//            abort(404, "Sorry post was not found");
//        }

        return view('post', [
            'post' => $post
        ]);
    }
}
