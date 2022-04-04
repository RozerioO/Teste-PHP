<?php

namespace App\Http\Controllers;



use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();

        return view('Pages.Posts.mainposts', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('Pages.Posts.createposts', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate(['text'=>'required','title'=>'required','subtitle'=>'required','category_id'=>'required']);
        $post = Post::create([
            'text' => $request->get('text'),
            'subtitle' => $request->get('subtitle'),
            'title' => $request->get('title'),
            'category_id' => $request->get('category_id'),
            'user_id' => Auth::user()->id
        ]);
        return redirect('/posts');
    }

    public function show(Request $request, $id)
    {

        $categories = Category::all();
        $post = Post::find($id);
        return view('Pages.Posts.editpost', ["post" => $post],["categories"=> $categories]);
    }

    public function edit(Request $request, $id)
    {
        $request->validate(['text'=>'required','title'=>'required','subtitle'=>'required','category_id'=>'required']);
        $post = Post::find($id);
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->text = $request->text;
        $post->category_id = $request->category_id;
        $post->user_id = Auth::user()->id;
        $post->save();

        return redirect('/posts');
    }

    public function destroy(Request $request)
    {
        Post::destroy($request->get("id"));

        return redirect('/posts');
    }
}

