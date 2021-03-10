<?php

namespace App\Interfaces;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface IFuncionarioRepository
 * @package namespace App\Interfaces;
 */
interface ICarrinhoRepository extends RepositoryInterface
{
    function createCarrinho();
    function consultarCarrinho();
    function deletarCarrinho();
    function calculaPreco();
}
