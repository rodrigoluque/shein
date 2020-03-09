@extends('layout.plantilla')

    @section('title', 'Formulario de modificación una producto')

    @section('h1', 'Formulario de modificación una producto')

    @section('main')

            <div class="alert bg-light p-4">
                <form action="/modificarProducto" method="post" enctype="multipart/form-data">
                    @csrf
                
                    <label>Nombre:</label>
                    <input type="text" name="prdNombre" value="{{ $producto->prdNombre }}" class="form-control">
                    
                    <div class="form-group">
                        <label for="prdPrecio">Precio:</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                            <input type="number" name="prdPrecio" value="{{ $producto->prdPrecio }}" class="form-control" id="prdPrecio" placeholder="0" min="0" step="0" required>
                        </div>
                        </div>
                                         
                    <div class="form-group">
                        <label>Marca:</label>
                        <select name="idMarca" class="form-control" required>
                            <option value="">Seleccione marca...</option>
                    @foreach ( $marcas as $marca )
                            <option value="{{ $marca->idMarca }}">{{ $marca->mkNombre }}</option>
                    @endforeach
                        </select>
                        </div>

                  <!--  <input type="text" name="idCategoria" value="{{ $producto->idCategoria }}" class="form-control"> -->
                   
                    <div class="form-group">
                        <label>Categoría:</label>
                        <select name="idCategoria" class="form-control" required>
                            <option value="">Seleccione una Categoría</option>
                    @foreach( $categorias as $categoria )
                            <option value="{{ $categoria->idCategoria }}">{{ $categoria->catNombre }}</option>
                    @endforeach
                        </select>
                        </div>

                     <label>Presentación:</label>
                    <input type="text" name="prdPresentacion" value="{{ $producto->prdPresentacion }}" class="form-control">
                   
                    <label>Stock:</label>
                    <input type="text" name="prdStock" value="{{ $producto->prdStock }}" class="form-control">
                   
                    <label>Imagen:</label>
                    <input type="file" name="prdImagen" class="form-control" value="{{ $producto->prdImagen }}">

                    <input type="hidden" name="idProducto" value="{{ $producto->idProducto }}">
                    <br>
                    <button class="btn btn-dark">Agregar</button>

                </form>
            </div>

    @endsection