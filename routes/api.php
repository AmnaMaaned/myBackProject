<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('api')->group(function () {
    Route::resource('utilisateurs', UtilisateurController::class);
    });
Route::middleware('api')->group(function () {
     Route::resource('fournisseurs', FournisseurController::class);
    }); 
Route::middleware('api')->group(function () {
    Route::resource('clients', ClientController::class);
    });   
Route::middleware('api')->group(function () {
    Route::resource('familles', FamilleController::class);
    });  

Route::middleware('api')->group(function () {
    Route::resource('articles', ArticleController::class);
     }); 

  Route::middleware(['cors'])->group(function () {
        Route::post('/hogehoge', 'Controller@hogehoge');
        Route::resource('fournisseurs', FournisseurController::class);
    });
  
Route::post('/AddClient', [ClientController::class, 'store']);

//Route::post('/AddArticle', [App\Http\Controllers\ArticleController::class, 'store']);
Route::post('/AddFourniseur', [FournisseurController::class, 'store']);
Route::get('/ListFourniseur', [FournisseurController::class, 'index']);

Route::put('/UpdateFourniseur/{id}', [ApFournisseurController::class, 'update']);
Route::delete('/DeleteFourniseur', [ApFournisseurController::class, 'destroy']);
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
        ], function ($router) {
     Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    });