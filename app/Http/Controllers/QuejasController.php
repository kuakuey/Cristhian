<?php

namespace App\Http\Controllers;
use App\Notifications\QuejaNotification;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\tbquejas;
use \DB;

class QuejasController extends Controller
{
    public function MostrarQuejas(){
        // return tbquejas::all();

        // $tb = tbquejas::all();
        // return view('paginas.tbquejas',compact($tb));

        $datos = tbquejas::all();
        return view('paginas.tbquejas',compact('datos'));




        // return tbquejas::where('nombre','Cristhian')->get();
    }

    public function store(Request $request){
        $queja = new tbquejas;
        $queja->nombre=$request->input('nombre');
        $queja->correo=$request->input('email');
        $queja->queja=$request->input('queja'); 
        $queja->save();


        // return redirect()->back()->with('success', 'Swal.fire("Gracias!");');
        return redirect()->route('quejas')->with(['success' => 'Su sugerencia fue enviada con exito']);

    }
}
