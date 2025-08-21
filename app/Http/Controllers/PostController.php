<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::with('category')->latest()->paginate(5);
        return view('posts.index', compact('posts'));
    }

    // Show create form
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    // Store new post
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'content'     => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        Post::create($request->only('title','content','category_id'));

        return redirect()->route('posts.index')->with('success','Post created successfully!');
    }
}
