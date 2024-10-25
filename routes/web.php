<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MesaController; // Asegúrate de importar el controlador

// Ruta principal (bienvenida)
Route::get('/', function () {
    return view('welcome'); // Muestra la vista de bienvenida (login)
});

// Ruta de la página 'Sobre Nosotros'
Route::get('/sobre', function () {
    return view('sobre'); // Muestra la vista 'sobre.blade.php'
})->name('sobre');

// Ruta para el login
Route::post('/login', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    // Verificación de las credenciales
    if ($email == '123@gmail.com' && $password == '123avillo123') {
        // Redirige a la página 'sobre' si las credenciales son correctas
        return redirect()->route('sobre');
    } else {
        // Redirige de vuelta al login con un mensaje de error si las credenciales son incorrectas
        return redirect('/')->withErrors(['error' => 'Credenciales incorrectas']);
    }
})->name('login');
Route::get('/index', function () {
    return redirect()->route('mesas.index'); 
})->name('index');

// Rutas del CRUD de 'mesas'
Route::resource('mesas', MesaController::class);
