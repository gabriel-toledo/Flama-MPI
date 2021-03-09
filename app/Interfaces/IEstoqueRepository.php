<?php

namespace app\Interfaces;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface IFuncionarioRepository
 * @package namespace Modules\RecursosHumanos\Interfaces;
 */
interface IEstoqueRepository
{
    function createEstoque();
    function consultarEstoque();
    function deletarEstoque();
}
