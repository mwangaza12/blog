<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class PostController extends Controller
{

    use AuthorizesRequests;
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $imagePath,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('posts.index');
    }


    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('image')) 
        {
            $imagePath = $request->file('image')->store('images', 'public');
            $post->update([
                'title' => $request->title,
                'body' => $request->body,
                'image' => $imagePath,
            ]);
        } else 
        {
            $post->update($request->only(['title', 'body']));
        }

        return redirect()->route('posts.index');
    }


    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return redirect()->route('posts.index');
    }

}
