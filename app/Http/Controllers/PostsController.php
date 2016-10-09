<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function getDashboard()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('dashboard', ['posts' => $posts]);
    }

    public function postCreatePost(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);
        $post = new Post();
        $post->body = $request['body'];
        $message = "there wan an error";
        if ($request->user()->posts()->save($post)){
            $message = "Successfully Posted";
        }
        return redirect()->route('dashboard')->with(['message' => $message]);
    }

    public function getDeletePost($postid)
    {
        $post = Post::where('id', $postid)->first();
        if (Auth::user() != $post->user) {
            return redirect()->back();
        }
        $post->delete();
        return redirect()->route('dashboard')->with(['message' => 'Post Deleted']);
    }

    public function postEditPost(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);
        $post = Post::find($request['postId']);
        if (Auth::user() != $post->user) {
            return redirect()->back();
        }
        $post->body = $request['body'];
        $post->update();
        return response()->json(['new-body' => $post->body], 200);
    }
}
