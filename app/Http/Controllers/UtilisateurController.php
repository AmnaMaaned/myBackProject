<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Utilisateur;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilisateurs = Utilisateur::all()->toArray();
        return array_reverse($utilisateurs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $utilisateur = new Utilisateur([
            'Nom_utilisateur' => $request->input('Nom_utilisateur'),
            'Type_utilisateur' => $request->input('Type_utilisateur'),
            'Login_utilisateur' => $request->input('Login_utilisateur'),
            'Passsword_utilisateur' => $request->input('Passsword_utilisateur')
            ]);
            $utilisateur->save();
            return response()->json('Utilisateur créé !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $utilisateur = Utilisateur::find($id);
        return response()->json($utilisateur);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $utilisateur = Utilisateur::find($id);
        $utilisateur->update($request->all());
        return response()->json('Utilisateur MAJ !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $utilisateur = Utilisateur::find($id);
        $utilisateur->delete();
        return response()->json('Utilisateur supprimé !');
    }
}
