<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/comics', function () {
    $comicsData = config("comics");

    $datiViewArray = [
        "comicsList" => $comicsData
    ];

    return view("products", $datiViewArray );
})->name("pagina-comics");


Route::get('/singleProduct/{index}', function ($index) {
    $comicsData = config("comics");

    $sceltaComics = $comicsData[$index];
    return view('singleProduct', ['product'=> $sceltaComics]);
})->name("Prodotto-Selezionato");



// Route::get('/singleProduct/{id}', function ($id) {
//     $comicsData = config("comics");

        // if(!is_numeric(($id) || $id < 0 || $id > count($comicsData)){
        //     abort(404, "prodotto inesistente")
        // }

//     $sceltaComics = $comicsData[$id];
//     return view('singleProduct', [ "comics" => $sceltaComics]);
// })->name("Prodotto-Selezionato");