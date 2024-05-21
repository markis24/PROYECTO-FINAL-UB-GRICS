<?php

namespace App\Http\Controllers;

use App\Models\Projectes;
use Illuminate\Http\Request;

class ProjectesApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectes = Projectes::paginate(4);
        return response()->json($projectes);
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
        ]);

        $projecte = Projectes::create($request->all());
        return response()->json($projecte, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $projecte = Projectes::findOrFail($id);
        return response()->json($projecte);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title_projecte' => 'required',
            'text_projecte' => 'required',
            'text_resultat' => 'required',
        ]);

        $projecte = Projectes::findOrFail($id);
        $projecte->update($request->all());

        return response()->json($projecte, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $projecte = Projectes::findOrFail($id);
        $projecte->delete();

        return response()->json(null, 204);
    }
}
