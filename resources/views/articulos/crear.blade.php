@extends('layout')
    
    @section('content')
    {{-- Formulario para las entradas --}}


    <h1>Crea un nuevo artículo</h1>

    @if($errors->any())
    <div class=" alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
        <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

        <form method="POST" action={{url('articulos/store')}}>
            {{csrf_field()}}
            
            <label for="nombre">Título</label>
            <input class="form-control" id="titulo" type="text" name="titulo" value={{old('titulo')}}/>
            <label for="cuerpo">Cuerpo</label>
            <textarea name="cuerpo" id="cuerpo" cols="30" rows="10" value={{old('cuerpo')}}></textarea>
            <label for="autor">Autor</label>
            <input class="form-control" id="autor" type="text" name="autor" value={{old('autor')}}/>
            <button type="submit">Enviar</button> 
        </form>  

    @endsection
