@extends('plantilla')

@section('contenido')
    <h1>Formulario De Registro</h1>
    <div class="col-md-8">
    <form action="{{ url('/productos') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-row">
            <div class="col">
                <label for="nombre">{{ 'Nombre' }}</label>
                <input class="form-control" type="text" name="nombre" value="{{ old('nombre') }}"
                    placeholder="Ingresa el nombre del producto">
                {!! $errors->first('nombre', '<span style="color: red">message</span>') !!}

                <label for="precio">{{ 'Precio' }}</label>
                <input class="form-control" type="number" name="precio" value="{{ old('precio') }}">
                {!! $errors->first('precio', '<span style="color: red">message</span>') !!}
            </div>
        </div>
        <label for="descripcion">{{ 'Descripción' }}</label>
        <textarea class="form-control" name="descripcion">{{ old('descripcion') }}</textarea>
        {!! $errors->first('descripcion', '<span style="color: red">message</span>') !!}
        <br>
        <label for="foto">{{ 'Imagen del Producto' }}</label>
        <input class="form-control" type="file" name="foto" value="{{ old('foto') }}">
        {!! $errors->first('foto', '<span style="color: red">message</span>') !!}
        <hr>
        <button class="btn btn-success" type="submit">{{ __('Send') }}</button>
    </form>
</div>
@endsection

@section('titulo', 'Inicio')
