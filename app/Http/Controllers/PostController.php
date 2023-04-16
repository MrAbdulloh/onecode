<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::query()->latest()->paginate(10);
//        $posts = Post::query()->limit(12)->offset(2)->get();
        return view('post.index')->with('posts', $posts);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(StorePostRequest $request)
    {
        session(['create' => __('Post Create')]);
        Post::query()->firstOrCreate([
            'title' => $request->title,
        ], [
            'body' => $request->body,
            'published_at' => new Carbon($request->published_at),
            'user_id' => User::query()->value('id')
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
