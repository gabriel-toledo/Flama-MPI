<?php

namespace App\Repository;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Interfaces\IPagamentoRepository;
use App\Models\Pagamento;

class PagamentoRepository extends BaseRepository implements IPagamentoRepository
{
    function model()
    {
        return Pagamento::class;
    }

    public function setFormaPagamento()
    {
        
    }
    public function criarPagamento()
    {
        
    }
    public function efetuarPagamento()
    {
        
    }
    public function emitirNotaFiscal()
    {
        
    }
}

