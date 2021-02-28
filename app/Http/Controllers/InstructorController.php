<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Instructor;

use App\Models\Estado;

use Illuminate\Support\Facades\Storage;

class InstructorController extends Controller
{
    public  function index(){

        $instructores = Instructor::all();

        return view('instructor.index', compact('instructores'));

    }

    public function create(){

        $tipo_documentos = ['Cédula Ciudadanía', 'Registro Cívil', 'Cédula Extranjería','Tarjeta de Identidad','Pasaporte Permanencia'];

      $generos = ['Masculino','Femenino'];

     $estados=  Estado::all();


        return view('instructor.create', compact('tipo_documentos','generos'))->with(compact('estados'));
    }


    public function store(Request $request){

        $dates =  $request->except('_token');

        if($request->hasFile('foto')){
  
        $dates['foto'] = $request->file('foto')->store('img','public');
  
        }  
  
          
         
          Instructor::insert($dates);
  
          return redirect()->route('instructor.index');


    }


    public function edit($id){

        $instructores = Instructor::find($id)->where('id', '=', $id)->get();

        $tipo_documentos = ['Cédula Ciudadanía', 'Registro Cívil', 'Cédula Extranjería','Tarjeta de Identidad','Pasaporte Permanencia'];
  
        $generos = ['Masculino','Femenino'];
  
        $estados = Estado::all();
  
  
        return view('instructor.edit', compact('instructores','tipo_documentos'))->with(compact('generos','estados'));
  


    }


    public function update(Request $request,$id){

        $dates = $request->except(['_token','_method']);

        if($request->hasFile('foto')){

            $instructores= Instructor::findOrFail($id);

            Storage::delete('public/'.$instructores->foto);

            $dates['foto'] = $request->file('foto')->store('img','public');
      
            }  


        Instructor::find($id)->where('id','=', $id)->update($dates);

        $instructor = Instructor::findOrFail($id);
       

        return redirect()->route('instructor.index');




    }
}
