<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use App\Models\CarrinhoProduto;

class Carrinho extends Model implements Transformable
{
    use TransformableTrait;

    public $timestamps = false;

    protected $table = "tables.Carrinho";

    protected $primaryKey = "idCarrinho";

    public $incrementing = true;

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
        return $this->hasMany(CarrinhoProduto::class, 'idCarrinho', 'idCarrinho');
    }
}