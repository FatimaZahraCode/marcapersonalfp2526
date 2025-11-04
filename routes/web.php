<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hola', function () {
    return '¡Hola mundo!';
})->name('hola.mundo');
Route::match(array('POST', 'PUT', 'DELETE'), 'foo/bar', function () {
    return '¡Hola mundo!';
});

Route::any('foo/bar', function () {
    return '¡Hola mundo!';
});

Route::get('saluda/{nombre?}', function ($nombre = null) {
    return '¡Hola ' . $nombre . '!';
})->where('nombre', '[A-Za-z]+');
Route::get('/suma/{num1}/{num2}', function ($num1, $num2) {
    $suma = $num1 + $num2;
    return "La suma de $num1 y $num2 es: $suma";
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);
//------------------------------------------------

Route::get('/', function () {
    return 'Pantalla principal';
});
Route::get('login', function () {
    return 'Login usuario';
});
Route::get('logout', function () {
    return 'Logout usuario';
});

Route::prefix('proyectos')->group(function () {

    Route::get('/', function () {
        return 'Listado proyectos';
    });

    Route::get('/show/{id}', function ($id) {
        return "Vista detalle proyecto $id";
    })-> where ('id', '[0-9]+');

    Route::get('/create', function () {
        return 'Añadir proyecto';
    })-> where ('id', '[0-9]+');

    Route::get('/edit/{id}', function ($id) {
        return 'Modificar proyecto ' . $id;
    })-> where ('id', '[0-9]+');

});

Route::get('perfil/{id?}', function ($id = null) {
    if ($id == null) {
        return 'Visualizar el currículo propio';
    } else {
        return 'Visualizar el currículo de ' . $id;
    }
})-> where ('id', '[0-9]+');
