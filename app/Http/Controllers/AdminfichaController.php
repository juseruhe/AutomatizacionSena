<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adminficha;

class AdminfichaController extends Controller
{
    //
    public function index(){

        $adminfichas=Adminficha::all();
        return view('admindficha.index');
    }

    public function create(){
        return view ( 'adminficha.create');
    }

    public function deactivate(Request $request){
        $adminfichas=Adminficha::request($request->all());
    }

    public function




}
