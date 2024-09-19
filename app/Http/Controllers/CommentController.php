<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request, Article $article)
    {
        $request->validate([
            'title'     => 'required|string|max:255',
            'description'   => 'required|string',
        ]);

        $comment = new comment();
        $comment->title = $request->title;
        $comment->description = $request->description;
        $comment->usersId = Auth::user()->id;
        $comment->articlesId = $article->id;
        $comment->save();

        return redirect()->route('dashboard')->with('success', 'Article created successfully.');
    } 
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $comment->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Comment updated successfully.');
    }
}