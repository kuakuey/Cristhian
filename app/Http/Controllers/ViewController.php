<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function index($npagina){
if ($npagina == 'pagina1') {
    return view('paginas.pagina1', compact('npagina'));
} 
elseif ($npagina == 'pagina2') {
    return view('paginas.pagina2', compact('npagina'));
}
else {
    return 'Pagina no encontrada';
}

}}
