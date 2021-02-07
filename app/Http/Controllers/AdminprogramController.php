<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Programa;
use App\Models\Ficha;
use App\Models\Jornada;
use App\Models\Estado;


class AdminprogramController extends Controller
{
    //
public function index(){

    $adminprograms=Programa::all();
    return view('adminprogram.index',compact('adminprograms'));
}

    public function create(){
        $jornadas = Jornada::all();
        $programas = Programa::all();
        $estados = Estado::all();
        return view ( 'adminprogram.create', compact('jornadas','programas'))->with(compact('estados'));
    }

// registrar un programa
public function store(Request $request){
    $adminprograms=Programa::create($request->all());
    Return redirect()->route('adminprogram.index')->with([
        'message'=>'Se ha creado correctamente el programa',
        'type'=>'success'
    ]);
}


}
