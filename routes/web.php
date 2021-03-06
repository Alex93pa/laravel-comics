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
    $comicsData = config("comics");

    $datiViewArray = [
        "comicsList" => $comicsData
    ];

    return view("comics", $datiViewArray );
})->name("comics");


Route::get('/selectedComics/{index}', function ($index) {
    $comicsData = config("comics");

    $sceltaComics = $comicsData[$index];
    return view('selectedComics', ['sceltaComics'=> $sceltaComics]);
})->name("selectedComics");



// Route::get('/singleProduct/{id}', function ($id) {
//     $comicsData = config("comics");

        // if(!is_numeric(($id) || $id < 0 || $id > count($comicsData)){
        //     abort(404, "prodotto inesistente")
        // }

//     $sceltaComics = $comicsData[$id];
//     return view('singleProduct', [ "comics" => $sceltaComics]);
// })->name("Prodotto-Selezionato");