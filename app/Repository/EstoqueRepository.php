<?php

namespace App\Repository;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Interfaces\IEstoqueRepository;
use App\Models\Estoque;

class EstoqueRepository extends BaseRepository implements IEstoqueRepository
{
    function model()
    {
        return Estoque::class;
    }

    public function createEstoque()
    {
        
    }
    public function consultarEstoque()
    {
        
    }
    public function deletarEstoque()
    {
        
    }
    
}

