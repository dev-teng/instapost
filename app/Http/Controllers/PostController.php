<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use Auth;

class PostController extends Controller
{
    
    public function create(Request $request) {
        $request->validate([
            'content' => 'required|string|max:255'
        ]);

        $post = new Post();
        $post->content = $request->content;
        $post->user_id = Auth::user()->id;

        $post->save();

        return redirect()->route('home');
    }
}