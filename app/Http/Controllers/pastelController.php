<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\http\Request;

Class PastelController extends Controller
{
    public function show(){
        $pasteles= ['tarta de queso','duquesa','tiramisu'];
        return view('pasteles.show')->with('pasteles', $pasteles);
    }
}