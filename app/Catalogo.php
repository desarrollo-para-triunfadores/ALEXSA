<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    protected $table =  "catalogos";
    
    protected $fillable = [
      'nombre',
	  'tipo',
	  'vigente',
	  'descripcion'
    ];


}
