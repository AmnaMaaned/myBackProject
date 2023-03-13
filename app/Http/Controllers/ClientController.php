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
        $client = new Client([
            'Nom_client' => $request->input('Nom_client'),
            'Type_client' => $request->input('Type_client'),
            'Tel_client' => $request->input('Tel_client'),
            'Email_client' => $request->input('Email_client'),
            'Adresse_client' => $request->input('Adresse_client')
          

        ]);
        $client->save();
        return response()->json('Client créée !');
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
