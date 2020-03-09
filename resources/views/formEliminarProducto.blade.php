@extends('layout.plantilla')

    @section('title', 'Formulario de eliminar una Producto')

    @section('h1', 'Formulario de eliminar una Producto')

    @section('main')

    

    <div class="alert bg-light p-4">
    <h6>¿Esta seguro que quiere eliminar el producto? :  {{ $producto->prdNombre }} </h6>
    
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/storage/images/{{ $producto->prdImagen }}"  alt="Card image cap">
        <div class="card-body">
          
        <form action="/eliminarProducto" method="post">
            @csrf
            <input type="hidden" name="idProducto" value="{{ $producto->idProducto }}">
            <a href="/adminProductos" class="btn btn-info">
                <i class="material-icons">
                    reply
                    </i>
                </a>
            <button class="btn btn-danger"><i class="material-icons">
                delete_sweep
                </i></button>
            
      </form>
        </div>
      </div>


    </div>

    @endsection 
