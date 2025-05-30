<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*Route::get('/', function () {
    return "Hola desde la pagina";
});

Route::get('contacto', function(){
    return "Hola desde contacto";
});


Route::get('saludo/{nombre?}', function($nombre='invitado'){
    return "Hola " . $nombre;
});


// Rutas con nombres

Route::get('contactanos', function(){
    return "Seccion de contactos";
})->name('contactos');*/

/*Route::get('/', function(){
    $nombre = 'Jorge';
    return view('home')->with(['nombre' => $nombre]);
})->name('home');*/

Route::view('/', 'home', ['nombre' => 'Jorge'])->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::view('/contact', 'contact')->name('contact');

