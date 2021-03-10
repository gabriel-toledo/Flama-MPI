<?php

namespace App\Repository;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Interfaces\ICarrinhoRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Models\Carrinho;

class CarrinhoRepository extends BaseRepository implements ICarrinhoRepository
{
    function model()
    {
        return Carrinho::class;
    }

    public function createCarrinho()
    {
        
    }
    public function consultarCarrinho()
    {
        
    }
    public function deletarCarrinho()
    {
        
    }
    public function calculaPreco()
    {
        
    }

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}

