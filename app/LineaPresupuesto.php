<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineaPresupuesto extends Model
{
    protected $table =  "lineas_presupuesto";
    
        protected $fillable = ['cantidad', 'presupuesto_id', 'articulo_id']; 
    
        public function presupuesto()   
        {
            return $this->belongsTo('App\Presupuesto');
        }
    public function articulo()
    {
        return $this->belongsTo('App\Articulo');
    }
}
