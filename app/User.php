<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','rol_id','imagen', 'cliente_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function rol()
    {
        return $this->belongsTo('App\Rol');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function scopeSearchRoles($query, $rol_id)
    {
        if ($rol_id == "-1")
        {
            return $query;
        } else {
            return $query->where('rol_id', 'LIKE', $rol_id);
        }
    }
}
