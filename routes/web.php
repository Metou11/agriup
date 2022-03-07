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
    $tableauMois = [
        'Mai' => [
            'oignon' => ['route'=>'/oignon','nom' => 'Oignon', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg71gN1poAcNqPh75LRNnVmdvdVUWBPYgKAWp3iWkBIFu0vNNsFwoith0MuU-e60B7PEA&usqp=CAU'],
            'carotte' => ['route'=>'/carotte','nom' => 'Carotte', 'image' => 'https://www.espace-concours.fr/uploads/2021/03/carotte2-min-2.jpeg']
        ],
        'Juin' => [
            'navet' => ['route'=>'/navet','nom' => 'Navet', 'image' => 'https://www.niokobok.com/1161-large_default/navet-blanc-1kg.jpg'],
            'gombo' => ['route'=>'/gombo','nom' => 'Gombo', 'image' => 'https://www.gastronomiac.com/wp/wp-content/uploads/2018/11/gombos.jpg']
        ]
    ];
    /**return "vous avez choisi " . request('mois');*/
    return view('maraichageliste',compact('tableauMois'));
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
