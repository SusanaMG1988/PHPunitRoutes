@extends('layout')

    @section('content')
        <h1>Detalles del articulo</h1>
        {{$articulo->cuerpo}}
        <a href={{url()->previous()}}>Volver</a>
    @endsection

    @section('sidebar')
    @parent
       <a href={{route('modificar_articulo', ['id'=> $articulo->id])}}>Modificar entrada</a>
       <a href={{route('eliminar_articulo', ['id'=> $articulo->id])}}>Eliminar entrada</a>
    @endsection

