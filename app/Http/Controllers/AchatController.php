<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Achat;


class AchatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achats = Achat::all()->toArray();
        return array_reverse($achats);
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

    $achats = new Achat();
    $achats->date_achat=$request['date_achat'];
    $achats->montant_total=$request['montant_total'];
    $achats->save();
    return response()->json(['success'=>true,'message'=>'ajout effectuée avec succées!']);

   }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $achat = Achat::find($id);
        return response()->json($achat);
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
        $achat = Achat::find($id);
        $achat->update($request->all());
       return response()->json('Achat MAJ !'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $achat = Achat::find($id);
        $achat->delete();
     return response()->json('Achat supprimée !');
    }

}
