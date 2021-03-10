<?php

namespace App\Repository;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Interfaces\IGerenteRepository;
use App\Models\Gerente;

class GerenteRepository extends BaseRepository implements IGerenteRepository
{
    function model()
    {
        return Gerente::class;
    }

    public function cadastrarGerente()
    {
                
    }
    public function consultarGerente()
    {
        
    }
    public function atualizarDadosGerente()
    {
        
    }
    public function deletarGerente()
    {
        
    }
    
}

