<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subrubro extends Model
{
    protected $table =  "subrubros";

    protected $fillable = ['nombre', 'rubro_id'];

    public function rubro()
    {
        return $this->belongsTo('App\Rubro');
    }

    public function articulos()
    {
        return $this->hasMany('App\Articulo');
    }

}
