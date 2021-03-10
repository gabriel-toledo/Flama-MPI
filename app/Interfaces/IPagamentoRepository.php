<?php

namespace App\Interfaces;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface IFuncionarioRepository
 * @package namespace App\Interfaces;
 */
interface IPagamentoRepository extends RepositoryInterface
{
    function setFormaPagamento();
    function criarPagamento();
    function efetuarPagamento();
    function emitirNotaFiscal();
}
