<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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
})->name('contactos');

Route::get('/', function(){
    echo "<a href='". route('contactos') ."'>Contactos 1</a>";
    echo "<a href='". route('contactos') ."'>Contactos 2</a>";
    echo "<a href='". route('contactos') ."'>Contactos 3</a>";
    echo "<a href='". route('contactos') ."'>Contactos 4</a>";
    echo "<a href='". route('contactos') ."'>Contactos 5</a>";
});
