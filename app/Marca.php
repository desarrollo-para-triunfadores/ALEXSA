<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table =  "marcas";

    protected $fillable = ['nombre', 'rubro_id', 'logo'];


    public function articulos()
    {
        return $this->hasMany('App\Articulo');
    }

}
