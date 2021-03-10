<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Estoque extends Model implements Transformable
{
    use TransformableTrait;
    
    protected $table = "tables.Estoque";

    protected $primaryKey = "idEstoque";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idEstoque',
        'idGerente'
    ];

    function Gerente() {
        return $this->hasOne(Usuario::class, 'idUsuario', 'idGerente');
    }
}
