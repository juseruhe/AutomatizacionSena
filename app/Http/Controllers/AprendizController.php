<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aprendiz;

use App\Models\Estado;

class AprendizController extends Controller
{
    
    public function index(){

      $aprendices =  Aprendiz::all();


      return view('aprendiz.index',compact('aprendices'));
    }


    public function create(){

      $tipo_documentos = ['Cédula Ciudadanía', 'Registro Cívil', 'Cédula Extranjería','Tarjeta de Identidad','Pasaporte Permanencia'];

      $generos = ['Masculino','Femenino'];

     $estados=  Estado::all();

      return view('aprendiz.create', compact('tipo_documentos','generos'))->with(compact('estados'));
    }

    public function store(Request $request){

      Aprendiz::create($request->all());

      return redirect()->route('aprendiz.index');

    }

    public function edit($id){

      $aprendices = Aprendiz::find($id)->where('id', '=', $id)->get();

      $tipo_documentos = ['Cédula Ciudadanía', 'Registro Cívil', 'Cédula Extranjería','Tarjeta de Identidad','Pasaporte Permanencia'];

      $generos = ['Masculino','Femenino'];

      $estados = Estado::all();


      return view('aprendiz.edit', compact('aprendices','tipo_documentos'))->with(compact('generos','estados'));


    }


    public function update(Request $request, $id){

    Aprendiz::find($id)->update($request->all());


    return redirect()->route('aprendiz.index');



    }

    public function destroy($id){

      Aprendiz::find($id)->delete();

      return redirect()->route('aprendiz.index');
    }



}
