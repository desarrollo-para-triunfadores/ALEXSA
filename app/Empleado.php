<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table =  "empleados";
    
    protected $fillable = [
      'nombre',
	  'apellido',
	  'dni' ,
	  'fecha_ingreso'	
    ];

    public function presupuestos()
    {
        return $this->hasMany('App\Presupuesto');
    }
}
