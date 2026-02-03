<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::paginate(5);

        return response()->json([
            'Data'=>$posts
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'body' => 'required|max:500'
        ]);

        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return response()->json([
            'Post-title' => $post->title,
            'Status' => 'Created Successfully'
        ]);
    }

    public function show(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        return response()->json([
            'Your-Post' => $post
        ]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string'
        ]);

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save(); // Missing in your code

        return response()->json([
            'Status' => 'Post updated successfully',
            'Post' => $post
        ]);
    }

    public function destroy(Request $request,$id){
        $post = Post::findOrFail($id);
        $post->delete();

        return response()->json([
            'Status'=>'Post Deleted Successfully'
        ]);

    }
}
