<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Programa;
use App\Models\Ficha;
use App\Models\Jornada;
use App\Models\Estado;
use App\Models\Tipo_Programa;

class AdminprogramController extends Controller
{
    //
public function index(){
    $adminprograms=Programa::all();
    return view('adminprogram.index',compact('adminprograms'));
}

    public function create(){
        $tipos_programas=Tipo_Programa::all();
        return view ('adminprogram.create',compact('tipos_programas'));
    }

// registrar un programa
public function store(Request $request){
    $adminprograms=Programa::create($request->all());
    Return redirect()->route('adminprogram.index')->with([
        'message'=>'Se ha creado correctamente el programa',
        'type'=>'success'
    ]);
}
//actualizar datos de programa
    public function edit($id){
        $programas = Programa::find($id)
            ->where('id', '=', $id)
            ->get();
        return view('adminprogram.edit',compact('programas'));
    }


}
