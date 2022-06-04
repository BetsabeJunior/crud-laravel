@extends('plantilla')

@section('contenido')
    <h1>{{ __('Contact') }}</h1>

    <form action="{{ url('/productos') }}" enctype="multipart/form-data" method="post">
        @csrf
        <label for="nombre">{{ 'Nombre' }}</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}">
        {!! $errors->first('nombre', '<span style="color: red">message</span>') !!}
        <br>
        <label for="precio">{{ 'Precio' }}</label>
        <input type="number" name="precio" value="{{ old('precio') }}">
        {!! $errors->first('precio', '<span style="color: red">message</span>') !!}
        <br>
        <label for="descripcion">{{ 'Descripción' }}</label>
        <input type="text" name="descripcion" value="{{ old('descripcion') }}">
        {!! $errors->first('descripcion', '<span style="color: red">message</span>') !!}
        <br>
        <label for="foto">{{ 'Imagen del Producto' }}</label>
        <input type="file" name="foto" value="{{ old('foto') }}">
        {!! $errors->first('foto', '<span style="color: red">message</span>') !!}
        <br>
        <button type="submit">{{ __('Send') }}</button>
    </form>
@endsection
