<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table =  "articulos";
    protected $fillable = ['nombre', 'marca_id', 'talle_id', 'minimo_vendible', 'umedida_id', /*'rubro_id',*/ 'subrubro_id', 'color_id', 'imagen', 'material_id', 'descripcion'];
    
    public function marca()
    {
    	return $this->belongsTo('App\Marca');
    }
    public function subrubro()
    {
        return $this->belongsTo('App\Subrubro');
    }
    public function talle()
    {
        return $this->belongsTo('App\Talle');
    }
public function umedida(){
    return $this->belongsTo('App\Unidad_Medida');
}


    public function rubro()
    {
        return $this->belongsTo('App\Marca');
    }

    public function config() 
    {
        return $this->hasOne('App\Config');
    }

}
