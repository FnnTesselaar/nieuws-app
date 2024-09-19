<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create()
    {
        return view('tags.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|string|max:255',
            'description'   => 'required|string',
        ]);

        $tag = new tag();
        $tag->title = $request->title;
        $tag->description = $request->description;
        $tag->save();

        return redirect()->route('tags.index')->with('success', 'Article created successfully.');
    }
    public function index()
    {

        $tags = tag::all();
        return view('tags.index', compact('tags'));
    }
    public function destroy(tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index')->with('success', 'Article deleted successfully.');
    }
    public function edit(tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    public function update(Request $request, tag $tag)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $tag->update($request->only(['title', 'description']));

        return redirect()->route('tags.index')->with('success', 'Article updated successfully.');
    }
}
