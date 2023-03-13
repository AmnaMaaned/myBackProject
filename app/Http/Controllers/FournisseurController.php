<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;


class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fournisseurs = Fournisseur::all()->toArray();
        return array_reverse($fournisseurs);
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
        $fournisseur = new Fournisseur([
            
            'Nom_F' => $request->input('Nom_F'),
             'Tel_F' => $request->input('Tel_F'),
             'Email_F' => $request->input('Email_F'),
             
             'adresse_F' => $request->input('adresse_F')
             
        ]);
        $fournisseur->save();
        return response()->json('Fournisseur créée !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
           
        $fournisseur = Fournisseur::find($id);
        return response()->json($fournisseur);
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
        $fournisseur = Fournisseur::find($id);
        $fournisseur->update($request->all());
       return response()->json('Fournisseur MAJ !'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fournisseur = Fournisseur::find($id);
        $fournisseur->delete();
       return response()->json('Fournisseur supprimée !');
    }
}
