<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{

      protected $fillable = [
        'nombre', 'correo', 'telefono',
    ];

   
     
}
