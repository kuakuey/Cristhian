<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbalbum extends Model
{
    use HasFactory;
    
    //por defecto siempre va a buscar en plura, para evitar error el protected o crearla en plural
    protected $table='tbalbum';
}
