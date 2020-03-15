<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Marca;
use App\Producto;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        //
        $productos = Producto::with('getMarca', 'getCategoria')->get();
        return view('inicio',
            [
                'productos'=>$productos
            ]);
    }

    public function producto($id)
    {   $producto = Producto::find($id);
        $vac = compact('producto');
        return view('producto', $vac);
    }

}