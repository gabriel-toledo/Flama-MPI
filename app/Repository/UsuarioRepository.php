<?php

namespace App\Repository;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Interfaces\IUsuarioRepository;
use App\Models\Usuario;
use PhpParser\Builder\Function_;

class UsuarioRepository extends BaseRepository implements IUsuarioRepository
{
    function model()
    {
        return Usuario::class;
    }

    public function setNome($nome) {

    }
    public function getNome()
    {
        
    }
    public function setCPF($cpf)
    {
        
    }
    public function getCPF()
    {
        
    }
    public function setSexo($sexo)
    {
        
    }
    public function getSexo()
    {

    }
    public function setTelefone($telefone)
    {
        
    }
    public function getTelefone()
    {
        
    }
    public function setEmail($email)
    {
        
    }
    public function getEmail()
    {
        
    }
}


