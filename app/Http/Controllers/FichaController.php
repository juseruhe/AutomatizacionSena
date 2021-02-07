<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ficha;

use App\Models\Programa;

use App\Models\Jornada;

use App\Models\Estado;

class FichaController extends Controller
{
    
    public function jornada(Request $request){

    $jornada = $request->get('jornada_id');

$adminfichas = Ficha::select('*')->where('jornada_id', '=', $jornada)->get();



   return view('ficha.jornada',compact('adminfichas'));
    }


    public function programs(Request $request){

        $programa = $request->get('programa_id');
    
    $adminfichas = Ficha::select('*')->where('programa_id', '=', $programa)->get();
    
    
    
       return view('ficha.programs',compact('adminfichas'));
        }


        public function activados(Request $request){

            
        $estado = $request->get('estado_id');
    
        $adminfichas = Ficha::select('*')->where('estado_id', '=', $estado)->get();
        
        
        
           return view('ficha.activados',compact('adminfichas'));


        }
    
}
