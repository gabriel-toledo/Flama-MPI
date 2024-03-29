<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Pagamento extends Model implements Transformable
{
    use TransformableTrait;

    public $timestamps = false;

    protected $table = "tables.Pagamento";

    protected $primaryKey = "idPagamento";

    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idPagamento',
        'idCarrinho',
        'valor',
        'formaPagamento',
    ];

    public function carrinho()
    {
        return $this->hasOne(Carrinho::class, 'idCarrinho', 'idCarrinho');
    }
}
