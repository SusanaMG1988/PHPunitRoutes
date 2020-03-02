@extends('layout')
    
    @section('content')
    {{-- Formulario para las entradas --}}


<h1>Modificar articulo {{$articulo->id}}</h1>
    
    {{-- @if($errors->any())
    <div class=" alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
        <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

        <form method="POST" action={{url("/articulos/update/{$articulo->id}")}}>
            {{csrf_field()}}
            {{-- <input type="hidden" name='id' value={{$articulo->id}}> --}}
            
            <input class="form-control" id="titulo" type="text" name="titulo" placeholder="Título" value={{$articulo->titulo}}>
            
            {{-- control de errores nombre --}}
            @if($errors->has('titulo'))
            <div class="alert alert-danger">{{ $errors->first('titulo') }}</div>
            @endif
           
            <textarea name="cuerpo" id="cuerpo" cols="30" rows="10" placeholder="Escribe aquí tu contenido" value={{$articulo->cuerpo}}></textarea>
            
            {{-- control de errores cuerpo --}}
            @if($errors->has('cuerpo'))
            <div class="alert alert-danger">{{ $errors->first('cuerpo') }}</div>
            @endif
            
            <input class="form-control" id="autor" type="text" name="autor" placeholder="autor" value={{$articulo->autor}}>
            
            {{-- control de errores autor --}}
            @if($errors->has('autor'))
            <div class="alert alert-danger">{{ $errors->first('autor') }}</div>
            @endif
            <button type="submit">Enviar</button>  
           
        </form>  

    @endsection
