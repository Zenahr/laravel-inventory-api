<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('items', function() {
    return InventoryItem::all();
});

Route::get('items/{id}', function($id) {
    return Article::find($id);
});

Route::post('items', function(Request $request) {
    return Article::create($request->all);
});

Route::put('items/{id}', function(Request $request, $id) {
    $article = Article::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('items/{id}', function($id) {
    Article::find($id)->delete();

    return 204;
})