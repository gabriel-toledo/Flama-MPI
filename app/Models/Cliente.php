<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Carrinho;
use App\Models\CarrinhoProduto;
use App\Models\Usuario;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cliente extends Model implements Transformable
{
    use TransformableTrait;

    public $timestamps = false;

    protected $table = "tables.Cliente";

    protected $primaryKey = "idCliente";

    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idCliente',
        'idUsuario',
        'rua',
        'bairro',
        'numeroCasa',
        'idCarrinho',
    ];

    public function usuario()
    {
        return $this->hasOne(Usuario::class, 'idUsuario', 'idUsuario');
    }

    public function carrinho()
    {
        return $this->hasOne(Carrinho::class, 'idCarrinho', 'idCarrinho');
    }

    public function produtos() {
        return $this->hasManyThrough(CarrinhoProduto::class, Carrinho::class, 'idCarrinho', 'idCarrinho', 'idCarrinho');
    }
}
