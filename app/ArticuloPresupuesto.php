<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticuloPresupuesto extends Model
{

    protected $table =  "presupuestos";

    protected $fillable = ['articulo_id', 'presupuesto_id', 'cantidad'];

    public function articulo()
    {
        return $this->belongsTo('App\Articulo');
    }

    public function presupuesto()
    {
        return $this->belongsTo('App\Presupuesto');
    }
}
