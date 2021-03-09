<?php

namespace app\Interfaces;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface IFuncionarioRepository
 * @package namespace Modules\RecursosHumanos\Interfaces;
 */
interface IGerenteRepository
{
    function cadastrarGerente();
    function consultarGerente();
    function atualizarDadosGerente();
    function deletarGerente();
}
