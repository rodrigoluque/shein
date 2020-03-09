<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorias = Categoria::paginate(6);
        return view('adminCategorias', [ 'categorias' =>  $categorias ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('formAgregarCategoria');
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
        $categoria = new Categoria();
        ######## validacion
        $validacion = $request->validate(
            [
                'catNombre' => 'required|min:3|max:75',
            ]
        );
        $categoria->catNombre = request('catNombre');
        $categoria->save();
        return redirect('/adminCategorias')->with('mensaje', 'Categoria '.$categoria->catNombre.' agregada con éxito');
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
        $categoria = Categoria::find($id);
        return view('formModificarCategoria', [ 'categoria'=>$categoria ]);
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
        
        $Categoria = Categoria::find($request->input('idCategoria'));
        $Categoria->catNombre = $request->input('catNombre');
        $Categoria->save();
        return redirect('/adminCategorias')
            ->with('mensaje', 'Categoria '.$Categoria->catNombre.' modificada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id){
        $categoria = Categoria::find($id);
        return view('formEliminarCategoria', [ 'categoria'=>$categoria ]);
    }

    public function destroy(Request $request)
    {
        //
        $id=$request["idCategoria"];

          $categoria=Categoria::find($id);

          $categoria->delete();

          return redirect('/adminCategorias')->with('mensaje', 'La Categoria '.$categoria->catNombre.'sé elimino con éxito');

    }
}
