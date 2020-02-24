@extends('layout')

    @section('content')
        <h1>Detalles del articulo</h1>
       {{$articulo->cuerpo}}
<a href={{url()->previous()}}>Volver</a>
    @endsection
