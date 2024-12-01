<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    // Método para mostrar los clientes
    public function index()
    {
        // Recuperar todos los clientes desde la base de datos
        $clientes = Cliente::all();

        // Pasar los datos a la vista
        return view('clientes.index', compact('clientes'));
    }
}
