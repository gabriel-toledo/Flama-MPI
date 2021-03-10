<?php

namespace App\Repository;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Interfaces\IClienteRepository;
use App\Models\Cliente;

class ClienteRepository extends BaseRepository implements IClienteRepository
{
    function model()
    {
        return Cliente::class;
    }

    public function cadastrarCliente()
    {
                
    }
    public function consultarCliente()
    {
        
    }
    public function atualizarDadosCliente()
    {
        
    }
    public function deletarCliente()
    {
        
    }
    public function setRua($Rua)
    {
        
    }
    public function getRua()
    {
        
    }
    public function setBairro($Bairro)
    {
        
    }
    public function getBairro()
    {
        
    }
    public function setNumeroCasa($NumeroCasa)
    {
        
    }
    public function getNumeroCasa()
    {
        
    }
}

