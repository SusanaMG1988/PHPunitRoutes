@extends('layout')

@section('content')
    @foreach($pasteles as $pastel)
        <h1>Lista de pasteles</h1>
    {{"$pastel"}} <br>
    @endforeach
