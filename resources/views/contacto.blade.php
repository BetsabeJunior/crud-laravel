@extends('plantilla')

@section('contenido')
    <h1>{{ __('Contact')}}</h1>

    <form action="{{ route('contacto') }}" method="post">
        @csrf
        <input type="text" name="nombre" value="{{ old('nombre')}}">
        {!! $errors->first('nombre', '<span style="color: red">message</span>') !!}
        <br>
        <input type="email" name="correo" value="{{ old('correo')}}">
        {!! $errors->first('correo', '<span style="color: red">message</span>') !!}
        <br>
        <input type="text" name="asunto" value="{{ old('asunto')}}">
        {!! $errors->first('asunto', '<span style="color: red">message</span>') !!}
        <br>
        <textarea name="mensaje">{{ old('mensaje')}}</textarea>
        {!! $errors->first('nombre', '<span style="color: red">message</span>') !!}
        <br>
        <button type="submit">{{ __('Send')}}</button>
    </form>
@endsection
