@extends('plantilla')

@section('contenido')
    <h1>Listado De Producto</h1>
    <div class="col-md-8">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($productos as $p)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><img src="{{ $p->foto }}" width="50px"></td>
                        <td>{{ $p->nombre }}</td>
                        <td>${{ str_replace(",",".",number_format($p->precio,0)) }}</td>
                        <td>
                            <a href="{{ url('/productos/'.$p->id.'/edit')}}" class="btn btn-warning">Actualizar</a>
                            <a>
                             <form method="POST" action="{{ url('/productos/'.$p->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Realmente desea eliminar el registro')" class="btn btn-danger">Eliminar</button>
                             </form>   
                            </a>  
                        </td>
                @empty
                    <tr>
                        <td colspan="5"> No hay Productos..</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>

@endsection

@section('titulo', 'Inicio')
