<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Articles::paginate(4);
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_article' => 'required',
            'text_article' => 'required',
        ]);

        Articles::create($request->all());
        return redirect()->route('articles.index')->with('success', 'Artículo creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articles $article)
    {
        return view('articles.editar', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Articles $article)
    {
        $request->validate([
            'title_article' => 'required',
            'text_article' => 'required',
        ]);


        $article->update($request->all());
        return redirect()->route('articles.index')->with('success', 'Artículo actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $article = Articles::findOrFail($id);
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Artículo eliminado correctamente.');
    }
}
