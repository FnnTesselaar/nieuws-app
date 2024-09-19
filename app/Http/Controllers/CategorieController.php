<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('categories.index', compact('categories'));
    }
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('categories.index')->with('success', 'Categorie deleted successfully.');
    }
    public function edit(Categorie $categorie)
    {
        return view('categories.edit', compact('categorie'));
    }

    public function update(Request $request, Categorie $categorie)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $categorie->update([
            'title' => $request->title,
        ]);

        return redirect()->route('categories.index')->with('success', 'Categorie updated successfully.');
    }
    
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|string|max:255',
            'description'   => 'required|string',
        ]);

        $categorie = new Categorie();
        $categorie->title = $request->title;
        $categorie->description = $request->description;
        $categorie->save();

        return redirect()->route('categories.index')->with('success', 'categorie created successfully.');
    }
}

