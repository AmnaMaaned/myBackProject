<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LigneVente;
class VenteachatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lignevente = LigneVente::all()->toArray();
        return array_reverse($lignevente);
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

    $lignevente = new LigneVente();
    $lignevente->achat_id=$request['achat_id'];
    $lignevente->article_id=$request['article_id'];
    $lignevente->quantite=$request['quantite'];
    $lignevente->tva=$request['tva'];
    $lignevente->prix_unitaire=$request['prix_unitaire'];
    $lignevente->save();
    return response()->json(['success'=>true,'message'=>'ajout effectuée avec succées!']);

   }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lignevente = LigneVente::find($id);
        return response()->json($lignevente);
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
        $lignevente = LigneVente::find($id);
        $lignevente->update($request->all());
       return response()->json('Lignevente MAJ !'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lignevente = LigneVente::find($id);
        $lignevente->delete();
     return response()->json('Lignevente supprimée !');
    }

}

