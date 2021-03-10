<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use App\Models\Produto;

class Carrinho extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = "tables.Carrinho";

    protected $primaryKey = "idCarrinho";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idCarrinho',
        'precoTotal'
    ];

    function produtos() {
        return $this->hasMany(Produto::class, 'idCarrinho', 'idCarrinho');
    }
}