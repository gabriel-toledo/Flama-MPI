<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use App\Models\Estoque;
use App\Models\Carrinho;

class Produto extends Model implements Transformable
{
    use TransformableTrait;

    public $timestamps = false;

    protected $table = "tables.Produto";

    protected $primaryKey = "idProduto";

    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idProduto',
        'nomeProduto',
        'quantProduto',
        'preco',
        'descricao',
        'idEstoque',
    ];

    function estoque(){
        return $this->hasOne(Estoque::class, 'idEstoque', 'idEstoque');
    }
}
