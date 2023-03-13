<?php

namespace App\Http\Controllers;
use App\Models\Famille;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $familles = Famille::all()->toArray();
       return array_reverse($familles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $famille = new Famille([
             'Nom_famille' => $request->input('Nom_famille'),
             'Image_famille' => $request->input('Image_famille')
        ]);
        $famille->save();
        return response()->json('Famille créée !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $famille = Famille::find($id);
        return response()->json($famille);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $famille = Famille::find($id);
        $famille->update($request->all());
       return response()->json('Famille MAJ !'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $famille = Famille::find($id);
        $famille->delete();
       return response()->json('Famille supprimée !');
    }
}
