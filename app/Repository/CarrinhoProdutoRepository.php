<?php

namespace App\Repository;

use App\Interfaces\ICarrinhoProdutoRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Models\CarrinhoProduto;

class CarrinhoProdutoRepository extends BaseRepository implements ICarrinhoProdutoRepository
{
    function model()
    {
        return CarrinhoProduto::class;
    }
}

