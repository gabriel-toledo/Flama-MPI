<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use App\Models\Produto;

class CarrinhoProduto extends Model implements Transformable
{
    use TransformableTrait;

    public $timestamps = false;

    protected $table = "tables.CarrinhoProduto";

    protected $primaryKey = "idCarrinhoProduto";

    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idCarrinhoProduto',
        'idCarrinho',
        'idProduto',
        'nomeProduto',
        'preco'
    ];

    function carrinho() {
        return $this->hasOne(Carrinho::class, 'idCarrinho', 'idCarrinho');
    }

    function produto() {
        return $this->hasOne(Produto::class, 'idProduto', 'idProduto');
    }
}