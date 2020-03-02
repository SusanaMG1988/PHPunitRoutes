@extends('layout')

    @section('content')
        <h1>Listado de Articulos</h1>
    
        <ul style="list-style: none;">
        @foreach($articulos as $articulo)
           <li>{{$articulo->titulo}}</li>
         
           <a href={{action('ArticlesController@show',['id'=>$articulo->id])}}>Ver detalle</a> 
            {{-- otras formas de hacerlo:
             dentro de href asset("articles/$articulo->id");
            usar url: url("articulos/algo",[$articulos->id]);
            
            poner nombres a las rutas (ver en rutas) añadir un nombre a rutas ->name()

            mejor metodo segun el profesor 
            
            {{Route('detalles_articulo', 'id'=>$articulo->id)}}''
                
            --}}
        @endforeach
        </ul>
    @endsection

    @section('sidebar')
    @parent
       <a href={{route('articulo_nuevo')}}>Crear nueva entrada</a>
    @endsection

   