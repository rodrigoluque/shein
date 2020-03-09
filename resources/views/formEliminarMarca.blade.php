@extends('layout.plantilla')

    @section('title', 'Formulario de eliminar una Marca')

    @section('h1', 'Fornulario de eliminar una Marca')

    @section('main')



    <div class="alert bg-light p-4">
    <h6>¿Esta seguro que quiere eliminar la marca? :  {{ $marca->mkNombre }} </h6>

        <form action="/eliminarMarca" method="post">
            @csrf
            <input type="hidden" name="idMarca" value="{{ $marca->idMarca }}">
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


