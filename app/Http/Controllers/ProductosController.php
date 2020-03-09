<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Marca;
use App\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Producto::with('getMarca', 'getCategoria')->get();
        return view('adminProductos',
            [
                'productos'=>$productos
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $marcas = Marca::all();
        $categorias = Categoria::all();
        return view('formAgregarProducto',
            [
                'marcas'=>$marcas,
                'categorias'=>$categorias
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    /*  $validacion = $request->validate([
            'prdImagen' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = 'noDisponible.jpg';
        if( $request->file('prdImagen') ) {
            //$imageName = time().'.'.request()->prdImagen->getClientOriginalExtension();
            $imagen = $request->file('prdImagen');
            //$imagen->getClientOriginalExtension();
            $imageName = $request->prdImagen->getClientOriginalName();
            $request->prdImagen->move(public_path('images/productos'), $imageName);
        }
       return $imageName;*/
       $validacion = $request->validate([
        'prdImagen' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);
      
    $ruta=$request->file("prdImagen")->store("public/images");
    $nombreArchivo=basename($ruta); 


        $prdNombre = $request->input('prdNombre');
        $prdPrecio = $request->input('prdPrecio');
        $idMarca = $request->input('idMarca');
        $idCategoria = $request->input('idCategoria');
        $prdPresentacion = $request->input('prdPresentacion');
        $prdStock = $request->input('prdStock');
        $prdImagen = $nombreArchivo;
        
        $Producto= new Producto;
        $Producto->prdNombre = $prdNombre;
        $Producto->prdPrecio = $prdPrecio;
        $Producto->idMarca = $idMarca;
        $Producto->idCategoria = $idCategoria;
        $Producto->prdPresentacion = $prdPresentacion;
        $Producto->prdStock = $prdStock;
        $Producto->prdImagen = $prdImagen;
        $Producto->save();
        return redirect('/adminProductos')
            ->with('mensaje', 'El Producto '.$Producto->prdNombre.' sé agregó con éxito');

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $marcas = Marca::all();
        $categorias = Categoria::all();
        $producto = Producto::find($id);
        return view('formModificarProducto', [ 'categorias'=>$categorias,
                                               'marcas'=>$marcas,
                                               'producto'=>$producto ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         //
         $validacion = $request->validate([
            'prdImagen' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
          
        $ruta=$request->file("prdImagen")->store("public/images");
        $nombreArchivo=basename($ruta);


        $Producto = Producto::find($request->input('idProducto'));
        $Producto->prdNombre = $request->input('prdNombre');
        $Producto->prdPrecio = $request->input('prdPrecio');
        $Producto->idMarca = $request->input('idMarca');
        $Producto->idCategoria = $request->input('idCategoria');
        $Producto->prdPresentacion = $request->input('prdPresentacion');
        $Producto->prdStock = $request->input('prdStock');
        $Producto->prdImagen= $nombreArchivo;

        $Producto->save();
        return redirect('/adminProductos')
            ->with('mensaje', 'Producto '.$Producto->prdNombre.' modificada con éxito');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id){
        $producto = Producto::find($id);
        return view('formEliminarProducto', [ 'producto'=>$producto ]);
    }

    public function destroy(Request $request)
    {
        //
        $id=$request["idProducto"];

        $producto=Producto::find($id);

        $producto->delete();

        return redirect('/adminProductos');
    }
}
