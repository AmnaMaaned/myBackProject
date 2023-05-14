<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LigneVente;
use App\Models\Vente;
use App\Models\Article;
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
    public function create(Request $request)
    {
    
        // Valider les données saisies dans le formulaire
        $validatedData = $request->validate([
            'date_achat' => 'required|date',
            'montant_total' => 'required|numeric|min:0',
            'lignes_achat.*.produit_id' => 'required|numeric',
            'lignes_achat.*.quantite' => 'required|numeric|min:1',
            'lignes_achat.*.prix_unitaire' => 'required|numeric|min:0',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
    {
    $vente=Vente::all();
    $article=Article::all();
    $lignevente = new LigneVente();
    $lignevente->vente_id=$request['vente_id'];
    $lignevente->article_id=$request['article_id'];
    $lignevente->quantite=$request['quantite'];
    $lignevente->tva=$request['tva'];
    $lignevente->prix_unitaire=$request['prix_unitaire'];
    $lignevente->save();
    return response()->json(['success'=>true,'message'=>'ajout effectuée avec succées!',]);

   }

   public function ajouterAchat(Request $request)
   {
       // Validation des données entrées par l'utilisateur
       $this->validate($request, [
           'date' => 'required|date',
           'fournisseur_id' => 'required|exists:fournisseurs,id',
           'produits.*.produit_id' => 'required|exists:produits,id',
           'produits.*.quantite' => 'required|numeric|min:1',
           'produits.*.prix' => 'required|numeric|min:0',
       ]);

       // Ajout des lignes d'ventes
       $articles = $request->input('articles');
       foreach ($articles as $articleData) {
           $lignevente = new LigneVente();
        //    $lignevente->vente_id = $vente->id;
           $lignevente->article_id = $articleData['article_id'];
           $lignevente->quantite = $articleData['quantite'];
           $lignevente->prix = $articleData['Prix_HTVente'];
        //    'vente_id', 'article_id', 'quantite','TVAVente', 'Prix_HTVente'
           $lignevente->save();
       }
   
       // Réponse de succès
       return response()->json(['message' => 'Achat ajouté avec succès'], 201);
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

