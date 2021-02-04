<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ficha;

class AdminfichaController extends Controller
{
    //
    public function index(){

        $adminfichas=Ficha::all();
        return view('adminficha.index',compact('adminfichas'));
    }

    public function create(){
        return view ( 'adminficha.create');
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

        $adminfichas = ficha::find($id)
        ->where('id', '=', $id)
        ->get();
    
        return view('adminficha.edit', compact('adminfichas'));


    }

    //Actualizar una ficha
    public function update(Request $request, $id){
        $adminfichas=ficha::find($id)->update($request->all());
        return redirect()->route('adminficha.index')->with([
            'message'=>'Se ha actualizado correctamente la ficha',
            'type'=>'warning'
        ]);
    }




    public function deactivate($id){
        
        $adminfichas = ficha::find($id)
        ->where('id', '=', $id)
        ->get();
    
        return view('adminficha.deactivate', compact('adminfichas'));

    }

    public function deactivated(Request $request, $id){
        $adminfichas=ficha::find($id)->update($request->all());
        return redirect()->route('adminficha.index')->with([
            'message'=>'Se ha cambiado el estado de la ficha',
            'type'=>'warning'
        ]);
    }






}
