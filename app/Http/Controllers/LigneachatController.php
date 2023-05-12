<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LigneAchat;
class LigneachatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ligneachat = LigneAchat::all()->toArray();
        return array_reverse($ligneachat);
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

    $ligneachat = new LigneAchat();
    $ligneachat->achat_id=$request['achat_id'];
    $ligneachat->article_id=$request['article_id'];
    $ligneachat->quantite=$request['quantite'];
    $ligneachat->tva=$request['tva'];
    $ligneachat->prix_unitaire=$request['prix_unitaire'];
    $ligneachat->save();
    return response()->json(['success'=>true,'message'=>'ajout effectuée avec succées!']);

   }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ligneachat = LigneAchat::find($id);
        return response()->json($ligneachat);
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
        $ligneachat = LigneAchat::find($id);
        $ligneachat->update($request->all());
       return response()->json('Ligneachat MAJ !'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ligneachat = LigneAchat::find($id);
        $ligneachat->delete();
     return response()->json('Ligneachat supprimée !');
    }

}
