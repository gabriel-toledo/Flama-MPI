<?php

namespace App\Interfaces;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface IFuncionarioRepository
 * @package namespace App\Interfaces;
 */
interface IGerenteRepository extends RepositoryInterface
{
    function cadastrarGerente();
    function consultarGerente();
    function atualizarDadosGerente();
    function deletarGerente();
}
