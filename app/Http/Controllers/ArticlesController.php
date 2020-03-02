<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        return view('articulos.index', ['articulos'=>Article::all()]);
    }

    public function show($id){
        $articulo = Article::find($id);

        return view('articulos.show', compact('articulo'));
    }

    public function crear(){
        return view('articulos.crear');
    }

    public function store(Request $request){

        $validateData = $request->validate([
            'titulo'=>'required|unique:articles|min:6',
            'cuerpo'=>'required',
            'autor'=>'required'
        
        ]);

        
        
        #Injección de dependencia: es importante injectar lo de dentreo del parentesis en la función 
        $articulo = new Article;
        $articulo->titulo = $request->titulo;
        $articulo->cuerpo = $request->cuerpo;
        $articulo->autor = $request->autor;

        $articulo->save();

        #Método helper:
        // $data= dd(request()->all());
          
        // Article::create([
        //     'titulo' => $data['titulo'],
        //     'cuerpo' => $data['cuerpo'],
        //     'autor' => $data['autor']
            
        // ]);


        //return redirect()->route('todos_articulos');
        return redirect('/articulos');
    }
    public function update($id){

        $articulo = Article::find($id);
        return view('articulos.update', ['articulo'=>$articulo]);

    }
    public function store_update(request $request, $id){

        $validateData = $request->validate([
            'titulo' => 'required|unique:articles|max:12|min:6',
            'cuerpo' => 'required',
            'autor' => 'required'
        ]);

        $articulo = Article::find($id);
        $articulo->titulo = $request->titulo;
        $articulo->cuerpo = $request->cuerpo;
        $articulo->autor = $request->autor;

        $articulo->save();

    }

    public function delete($id){



    }
}
