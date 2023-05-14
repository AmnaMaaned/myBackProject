<?php

namespace App\Http\Controllers;
use App\Models\Vente;

use Illuminate\Http\Request;


class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventes = Vente::all()->toArray();
        return array_reverse($ventes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }
     
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {       
        $ventes = new Vente();
         $ventes->date_achat=$request['datevente'];
        $ventes->montant_total=$request['totalvente'];
        $ventes->save();
        return response()->json(['success'=>true,'message'=>'ajout effectuée avec succées!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ventes = Vente::find($id);
        return response()->json($ventes);
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
        $vente = Vente::find($id);
        $vente->update($request->all());
       return response()->json('Vente MAJ !'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vente = Vente::find($id);
        $vente->delete();
     return response()->json('vente supprimée !');
    }
}
