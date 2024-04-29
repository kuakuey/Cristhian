<?php

namespace App\Http\Controllers;

use App\Models\tbalbum;
use App\Models\tbartistas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class PracticaController extends Controller
{
    public function index(){
        return view('paginas.practica');
    }
    public function evento(){
        return view('paginas.eventos');
    }
    public function artista($artista=null){

        $datos = DB::table('tbalbum')
            ->select('id_album','nombrealbum','nombre','genero_musical','popularidad','reproducciones','duracion')
            ->join('tbartistas','tbalbum.idartista','=','tbartistas.id')
            ->where('nombre',$artista)
            ->get();



        // return tbalbum::where('idartista','1')->get();
        // $datosartistas= tbartistas::where('nombre', $artista)->get('id');        
        // $datos = tbalbum::where('idartista', $datosartistas)->get();

        return view('paginas.artista', compact('artista','datos'));


    }
    public function mouse(){
        return view('paginas.mouseseguir');
    }

    public function boda(){
        return view('paginas.boda');
    }

    public function quejas(){
        return view('paginas.quejas');
    }
}
