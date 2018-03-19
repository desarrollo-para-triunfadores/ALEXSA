<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{

    protected $table =  "presupuestos";

    protected $fillable = ['user_id', 'estado', 'empleado_id']; 

    public function user()   
    {
        return $this->belongsTo('App\User');
    }

    public function empleado()   
    {
        return $this->belongsTo('App\Empleado');
    }
}
