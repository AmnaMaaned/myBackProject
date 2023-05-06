<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all()->toArray();
       return array_reverse($clients);
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

    $clients = new Client();
    $clients->Nom_client=$request['Nom_client'];
    $clients->Type_client=$request['Type_client'];
    $clients->Tel_client=$request['Tel_client'];
    $clients->Email_client=$request['Email_client'];
    $clients->Adresse_client=$request['Adresse_client'];
    
    $clients->save();
    return response()->json(['success'=>true,'message'=>'ajout effectuée avec succées!']);

   }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::find($id);
        return response()->json($client);
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
        $client = Client::find($id);
        $client->update($request->all());
       return response()->json('Client MAJ !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);
        $client->delete();
       return response()->json('Client supprimée !');
    }
}
