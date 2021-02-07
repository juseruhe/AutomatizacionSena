<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ficha;
use App\Models\Jornada;
    use App\Models\Programa;
use App\Models\Estado;


class AdminfichaController extends Controller
{
    //
    public function index(){

        $adminfichas=Ficha::all();
        return view('adminficha.index',compact('adminfichas'));
    }

    public function create(){
        $jornadas = Jornada::all();
        $programas = Programa::all();
        $estados = Estado::all();
        return view ( 'adminficha.create', compact('jornadas','programas'))->with(compact('estados'));
    }

// registrar nueva ficha
    public function store(Request $request){
        $adminfichas=Ficha::create($request->all());
        return redirect()->route('adminficha.index')->with([
            'message'=>'Se ha creado correctamente la ficha',
            'type'=>'success'
        ]);
    }

    public function edit($id){
        $jornadas = Jornada::all();
        $programas = Programa::all();
        $adminfichas = Ficha::find($id)
        ->where('id', '=', $id)
        ->get();
        return view('adminficha.edit', compact('adminfichas','jornadas'))->with(compact('programas'));


    }

    //Actualizar una ficha
    public function update(Request $request, $id){
        $adminfichas=Ficha::find($id)->update($request->all());
        return redirect()->route('adminficha.index')->with([
            'message'=>'Se ha actualizado correctamente la ficha',
            'type'=>'warning'
        ]);
    }




    public function deactivate($id){

        $estados = Estado::all();

        $adminfichas = Ficha::find($id)
        ->where('id', '=', $id)
        ->get();

        return view('adminficha.deactivate', compact('adminfichas', 'estados'));

    }

    public function deactivated(Request $request, $id){
        $adminfichas=Ficha::find($id)->update($request->all());
        return redirect()->route('adminficha.index')->with([
            'message'=>'Se ha cambiado el estado de la ficha',
            'type'=>'warning'
        ]);
    }



public function show(){

    $adminfichas = Ficha::select('*')->orderBy('jornada_id', 'asc')->get();

    return view('adminficha.journey',compact('adminfichas'));
}


public function program(){

    $adminfichas = Ficha::select('*')->orderBy('programa_id', 'asc')->get();

    return view('adminficha.program',compact('adminfichas'));

}

public function activado(){

   $adminfichas = Ficha::select('*')->orderBy('estado_id', 'asc')->get();

   return view('adminficha.activado',compact('adminfichas'));


}



}
