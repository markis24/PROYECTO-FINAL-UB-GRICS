<?php

namespace App\Http\Controllers;

use App\Models\Projectes;
use Illuminate\Http\Request;

class ProjectesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectes = Projectes::paginate(4);
        return view('projectes.index', compact('projectes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projectes.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_projecte' => 'required',
            'text_projecte' => 'required',
            'text_resultat' => 'required',
        ], [
            'title_projecte.required' => 'El título del proyecto es obligatorio.',
            'text_projecte.required' => 'La descripción del proyecto es obligatoria.',
            'text_resultat.required' => 'El resultado del proyecto es obligatorio.',
        ]);

        Projectes::create($request->all());
        return redirect()->route('projectes.index')->with('success', 'Proyecto creado correctamente.');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projectes $projecte)
    {
        return view('projectes.editar', compact('projecte'));
    }


    public function update(Request $request, Projectes $projecte)
    {
        $request->validate([
            'title_projecte' => 'required',
            'text_projecte' => 'required',
            'text_resultat' => 'required',
        ]);


         $projecte->update($request->all());
        return redirect()->route('projectes.index')->with('success', 'Proyecto actualizado correctamente.');
    }

        public function destroy($id)
    {
        $projecte = Projectes::findOrFail($id);
        $projecte->delete();
        return redirect()->route('projectes.index')->with('success', 'Proyecto eliminado correctamente.');
    }
}
