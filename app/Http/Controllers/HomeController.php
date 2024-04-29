<?php

namespace App\Http\Controllers;

use App\Models\tbartistas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function __invoke(){
        $datos = tbartistas::all();

        $datos_album = DB::table('tbalbum')
        ->select('nombrealbum','nombre','genero_musical','popularidad')
        ->join('tbartistas','tbalbum.idartista','=','tbartistas.id')
        ->orderBy('popularidad', 'desc')
        ->get();

        return view('home',compact('datos','datos_album'));

    } //Este es el controlador que nos redirecciona a la Carpeta de inicio
}
