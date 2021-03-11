<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Usuario extends Model implements Transformable
{
    use TransformableTrait;

    public $timestamps = false;

    protected $table = "tables.Usuario";

    protected $primaryKey = "idUsuario";

    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idUsuario',
        'nome',
        'cpf',
        'sexo',
        'telefone',
        'email',
    ];
}
