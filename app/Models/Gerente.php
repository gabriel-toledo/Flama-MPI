<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Estoque;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Gerente extends Model implements Transformable
{
    use TransformableTrait;

    public $timestamps = false;
    
    protected $table = "tables.Gerente";

    protected $primaryKey = "idGerente";

    public $incrementing = true;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idGerente',
        'idEstoque',
        'idUsuario',
    ];

    public function usuario()
    {
        return $this->hasOne(Usuario::class, 'idUsuario', 'idUsuario');
    }

    public function estoque()
    {
        return $this->hasOne(Estoque::class, 'idEstoque', 'idEstoque');
    }
}
