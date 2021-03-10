<?php

namespace App\Interfaces;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface IFuncionarioRepository
 * @package namespace App\Interfaces;
 */
interface IEstoqueRepository extends RepositoryInterface
{
    function createEstoque();
    function consultarEstoque();
    function deletarEstoque();
}
