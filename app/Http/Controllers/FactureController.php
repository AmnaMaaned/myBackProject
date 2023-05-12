<?php

namespace App\Http\Controllers;
use App\Models\Facture;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $factures = Facture::all()->toArray();
        return array_reverse($factures);
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
       $factures = new Facture();
       $factures->dateFacture=$request['dateFacture'];
       $factures->montantTotal=$request['montantTotal'];
       $factures->Nom_client=$request['Nom_client'];
       $factures->save();
    return response()->json(['success'=>true,'message'=>'ajout effectuée avec succées!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $facture = Facture::find($id);
        return response()->json($facture);
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
          $facture = Facture::find($id);
       $facture->update($request->all());
      return response()->json('Facture MAJ !'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $facture = Facture::find($id);
        $facture->delete();
     return response()->json('Facture supprimée !');
    }
}
