@extends('layout')

    @section('content')
        <h1>Listado de Articulos</h1>
        <ul style="list-style: none;">
        @foreach($articulos as $articulo)
           <li>{{$articulo->id}}</li>
           <li>Título:{{$articulo->titulo}}</li>
           <li>Cuerpo:{{$articulo->cuerpo}}</li>
           <li>Autor:{{$articulo->autor}}</li>
        @endforeach
        </ul>
    @endsection
