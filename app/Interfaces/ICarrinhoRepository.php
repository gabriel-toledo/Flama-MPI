<?php

namespace app\Interfaces;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface IFuncionarioRepository
 * @package namespace Modules\RecursosHumanos\Interfaces;
 */
interface ICarrinhoRepository
{
    function createCarrinho();
    function consultarCarrinho();
    function deletarCarrinho();
    function calculaPreco();
}
