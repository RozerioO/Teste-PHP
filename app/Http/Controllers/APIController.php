<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index()
    {
        $post = Post::with('category')->get();
        return response()->json($post);
    }

    public function category($id)
    {
        $post = Post::where('id', $id)->with('category')->first();

        return response()->json($post);
    }
}
