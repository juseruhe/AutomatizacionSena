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
        return view('adminficha.index');
    }

    public function create(){
        return view ( 'adminficha.create');
    }
// registrar nueva ficha
    public function store(Request $request){
        $adminfichas=Adminficha::create($request->all());
        return redirect()->route('adminficha.index')->with([
            'message'=>'Se ha creado correctamente la ficha',
            'type'=>'success'
        ]);
    }

    //Actualizar una ficha
    public function update(Request $request, $id){
        $adminfichas=Adminficha::find($id)->update($request->all());
        return redirect()->route('adminficha.index')->with([
            'message'=>'Se ha actualizado correctamente la ficha',
            'type'=>'warning'
        ]);
    }

    public function deactivate(Request $request){
        $adminfichas=Adminficha::request($request->all());
    }





}
