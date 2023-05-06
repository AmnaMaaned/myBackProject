<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all()->toArray();
       return array_reverse($articles);
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
       
    
    $articles = new Article();
    $articles->reference=$request['reference'];
    $articles->famille=$request['famille'];
    $articles->designation_article=$request['designation_article'];
    $articles->image_article=$request['image_article'];
    $articles->quantite_article=$request['quantite_article'];
    $articles->alert_article=$request['alert_article'];
    $articles->prix_achat_article=$request['prix_achat_article'];
    $articles->prix_vente_article=$request['prix_vente_article'];
    $articles->tva_article=$request['tva_article'];
    $articles->date_peremption_article=$request['date_peremption_article'];
    $articles->save();
    return response()->json(['success'=>true,'message'=>'ajout effectuée avec succées!']);

   }
       
       

       
       
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);
        return response()->json($article);
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
        $article = Article::find($id);
       $article->update($request->all());
      return response()->json('Article MAJ !'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);
        $article->delete();
     return response()->json('Article supprimée !');
    }
}
