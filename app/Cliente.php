<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table =  "clientes";
    
    protected $fillable = [
      'nombre',
	  'apellido',
	  'empresa',
	  'descripcion' ,
	  'cuit',
	  'dni' ,
	  'telefono',
	  'email',
	  'direccion',
	  'localidad_id'
    ];

    public function user()   
    {
        return $this->belongsTo('App\User');
    }
}
