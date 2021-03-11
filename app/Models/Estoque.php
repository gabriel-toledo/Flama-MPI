<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Estoque extends Model implements Transformable
{
    use TransformableTrait;

    public $timestamps = false;
    
    protected $table = "tables.Estoque";

    protected $primaryKey = "idEstoque";

    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idEstoque',
        'idGerente'
    ];

    function gerente() {
        return $this->hasOne(Usuario::class, 'idUsuario', 'idGerente');
    }
}
