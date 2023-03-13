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
        $article = new Article([
             'Réf_article' => $request->input('Réf_article'),
            'Famille' => $request->input('Famille'),
            'Designation_article' => $request->input('Designation_article'),
            'Image_article' => $request->input('Image_article'),
            'Quantité_article' => $request->input('Quantité_article'),
            'Alert_article' => $request->input('Alert_article'),
            'Prix_achat_article' => $request->input('Prix_achat_article'),
            'Prix_vente_article' => $request->input('Prix_vente_article'),
            'Tva_article' => $request->input('Tva_article'),
            'Date_Peremption_article' => $request->input('Date_Peremption_article')          
        
        ]);
            $article->save();
            return response()->json('Article créée !');
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
