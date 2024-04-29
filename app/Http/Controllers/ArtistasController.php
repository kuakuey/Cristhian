<?php

namespace App\Http\Controllers;

use App\Models\tbalbum;
use App\Models\tbartistas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistasController extends Controller
{
    public function MostrarArtistas(){
        $datos = tbartistas::all();
        return view('paginas.tbartistas',compact('datos'));
    }

    public function MostrarAlbum(){
        $datos = DB::table('tbalbum')
        ->select('id_album', 'nombrealbum', 'nombre', 'genero_musical', 'popularidad','reproducciones')
        ->join('tbartistas', 'tbalbum.idartista', '=', 'tbartistas.id')
        ->orderBy('id_album', 'asc')
        ->get();
    

        return view('paginas.tbalbum',compact('datos'));
    }
}
