<?php

namespace app\Interfaces;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface IFuncionarioRepository
 * @package namespace Modules\RecursosHumanos\Interfaces;
 */
interface IPagamentoRepository
{
    function setFormaPagamento();
    function criarPagamento();
    function efetuarPagamento();
    function emitirNotaFiscal();
}
