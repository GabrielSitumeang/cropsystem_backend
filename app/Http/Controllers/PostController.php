<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required|string',
            'image' => 'nullable|image',
        ]);

        $firebaseUserId = $request->attributes->get('firebase_user_id');

        $post = new Post();
        $post->user_id = $firebaseUserId;
        $post->body = $request->input('body');

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $post->image = $path;
        }

        $post->save();

        return response()->json(['post' => $post], 201);
    }
}
