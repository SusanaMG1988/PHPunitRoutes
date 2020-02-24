<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        return view('articulos.index', ['articulos'=>Article::all()]);
    }

    public function show($id){
        $articulo = Article::find($id);

        return view('articulos.show', compact('articulo'));
    }
}
