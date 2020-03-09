@extends('layout.plantilla')

    @section('title', 'Formulario de eliminar una categoria')

    @section('h1', 'Formulario de eliminar una categoria')

    @section('main')



    <div class="alert bg-light p-4">
    <h6>¿Esta seguro que quiere eliminar la categoria? :  {{ $categoria->catNombre }} </h6>

        <form action="/eliminarCategoria" method="post">
            @csrf
            <input type="hidden" name="idCategoria" value="{{ $categoria->idCategoria }}">
            <br>
            <a href="/adminMarcas" class="btn btn-info">
                <i class="material-icons">
                    reply
                    </i>
                </a>
            <button class="btn btn-danger"><i class="material-icons">
                delete_sweep
                </i></button>
            
      </form>
    </div>

    @endsection 
