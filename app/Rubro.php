<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    protected $table =  "rubros";

    protected $fillable = ['nombre', 'descripcion'];


    public function subrubros()
    {
        return $this->hasMany('App\Subrubro');
    }

}
