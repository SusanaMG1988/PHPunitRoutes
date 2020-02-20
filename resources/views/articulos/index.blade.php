@extends('layout')

    @section('content')
        <h1>Listado de Articulos</h1>
        <ul>
        @foreach($articulos as $articulo)
           <li> {{$articulo->name}}</li>
        @endforeach
        </ul>
    @endsection
