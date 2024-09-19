<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    // public function create()
    // {
    //     return view('articles.create');
    // }
    public function create(Article $newspost, Request $request)
    {
        $categories = Categorie::all();
        $tags = tag::all();
        return view('articles.create', compact('categories', 'tags'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|exists:categories,id',
        ]);

        // Create the article
        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->usersId = Auth::user()->id;
        $article->categoriesId = $request->category;
        $article->save();

        // Attach tags to the article
        if ($request->has('tags')) {
            $article->tags()->attach($request->tags);
        }

        return redirect()->route('dashboard')->with('success', 'Article created successfully.');
    }
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('dashboard')->with('success', 'Article deleted successfully.');
    }
    public function edit(Article $article)
    {
        $categories = Categorie::all();
        $tags = Tag::all();
        $chosenTags = $article->tags;

        return view('articles.edit', compact('article', 'categories', 'tags', 'chosenTags'));
    }

    public function update(Request $request, Article $article)
    {

        // dd($request->all(), $article);
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|exists:categories,id',
        ]);

        $article->title        = $request->title;
        $article->description  = $request->description;
        $article->categoriesId = $request->category;
        $article->save();

        $article->tags()->sync($request->tags);

        return redirect()->route('dashboard')->with('success', 'Article updated successfully.');
    }
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }
}
