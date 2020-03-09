@extends('layout.plantilla')

    @section('title', 'Panel de Productos')

    @section('h1', 'Panel de Productos')

    @section('main')

      {{-- mensajes de ok --}}
      @if( session()->has('mensaje') )
      <div class="alert alert-success">
          {{ session()->get('mensaje') }}
      </div>
     @endif

        <table class="table table-hover table-striped table-bordered">
            <thead class="bg-info">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Presentacion</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th>
                    <a href="/formAgregarProducto" class="btn btn-success">
                        
                        <i class="material-icons">
                            add
                            </i>
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
        @foreach( $productos as $producto )
            <tr>
                <td>{{ $producto->prdNombre }}</td>
                <td>{{ $producto->prdPrecio }}</td>
                <td>{{ $producto->getMarca->mkNombre }}</td>
                <td>{{ $producto->getCategoria->catNombre }}</td>
                <td>{{ $producto->prdPresentacion }}</td>
                <td>{{ $producto->prdStock }}</td>
                <td><img src="/storage/images/{{ $producto->prdImagen }}" class="img-thumbnail" style="width: 200px; height: 200px;"></td>
                <td>
                    <div class="d-block"><a href="/formModificarProducto/{{$producto->idProducto}}" class="btn btn-primary ">
                        <i class="material-icons">
                            create   </i>
                    </a></div>
                    <div  class="d-block">
                    <a href="/formEliminarProducto/{{$producto->idProducto}}" class="btn btn-danger">
                        <i class="material-icons">
                            delete_sweep
                            </i>
                    </a>
                </div>
                </td>
        
            </tr>
        @endforeach
            </tbody>
        </table>
     <br>   

    @endsection
