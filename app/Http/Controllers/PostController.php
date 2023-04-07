<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index')->with('posts', $posts);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return redirect()->route('post.index');
    }

    public function edit(Post $post)
    {
//        $post = Post::query()->findOrFail($id);

        return view('post.edit')->with('post', $post);

    }

    public function update(Request $request, Post $post)
    {
//        $post = Post::query()->findOrFail($id);
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('post.index');
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('post', $post);
    }
}
