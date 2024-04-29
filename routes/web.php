<?php

use App\Http\Controllers\ArtistasController;
use App\Http\Controllers\home;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PracticaController;
use App\Http\Controllers\QuejasController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

//Nos lleva a la ruta raiz y ejecuta el controlador home
Route::get('/', HomeController::class)->name("home");

Route::get('login', LoginController::class)->name("login");

Route::get('artista/{artista}', [PracticaController::class,'artista']);

Route::get('gsap', [PracticaController::class,'index']);

Route::get('eventos', [PracticaController::class, 'evento']);

Route::get('mouse', [PracticaController::class, 'mouse']);

Route::get('boda', [PracticaController::class, 'boda']);

Route::get('quejas', [PracticaController::class, 'quejas'])->name("quejas");

Route::get('ver_db_quejas', [QuejasController::class, 'MostrarQuejas'])->name("MostrarQuejas");

Route::post('submit_queja', [QuejasController::class, 'store'])->name("storequejas");//enviar info en post

Route::get('ver_db_artistas', [ArtistasController::class, 'MostrarArtistas'])->name("MostrarArtistas");

Route::get('ver_db_album', [ArtistasController::class, 'MostrarAlbum'])->name("MostrarAlbum");

