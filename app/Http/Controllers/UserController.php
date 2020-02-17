<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if(request()->has('empty')){
            $users = [];
        }else{
        $users = [
            'Tommy',
            'Jerry',
            'Luca',
            'Alonso',
            'Rigoberto',
            'Monchito'
        ];
    }
        //return view('users',[
            // 'users' =>$users;
            //'title' => 'Listado de usuarios';
        //]);

        // return view('users'->with('users',$users)
        //                    ->with('title',$title);

        return view('users.index', compact('title','users'));

      

    }

    public function show($id){
        return view('users.show',['id'=> $id]);
    }
    public function create(){
        return 'Crear un nuevo Usuario';
    }

    public function edit($id){
        return 'Editar usuario'.$id;
    }
}
