<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/Accueil', function () {
    return view('Accueil');
});

/*Route::get('/Accueil', function () {
    return redirect()->route('Accueil');
});
*/

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->get('/', function () {
    return view('propos');
})->name('home');

Route::get('/home', function () {
    return redirect()->route('home');
});


Route::get('/welcome', function () {
    return redirect()->route('welcome');
});


Route::get('/propos', function () {
    return redirect()->route('propos');
});

Route::get('/maraichage', function () {
    return view('maraichage');
    request('mois');
});



Route::post('/maraichage', function () {
    /**return "vous avez choisi " . request('mois');*/
    return view('maraichageliste');
});

Route::get('/maraichageliste', function () {
    return view('maraichageliste');
});

Route::get('/oignon', function () {
    return view('oignon');
});

Route::get('/tomate', function () {
    return view('tomate');
});
Route::get('/pomme', function () {
    return view('pomme');
});
Route::get('/poivron', function () {
    return view('Poivron');
});
Route::get('/piment', function () {
    return view('piment');
});
Route::get('/gombo', function () {
    return view('gombo');
});
Route::get('/melon', function () {
    return view('melon');
});
Route::get('/laitue', function () {
    return view('laitue');
});
Route::get('/concombre', function () {
    return view('concombre');
});
Route::get('/carotte', function () {
    return view('carotte');
});
Route::get('/aubergine', function () {
    return view('aubergine');
});
Route::get('/chou', function () {
    return view('chou');
});
