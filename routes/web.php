<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ClientesController;

Route::get('/clientes', [ClientesController::class, 'index']);

