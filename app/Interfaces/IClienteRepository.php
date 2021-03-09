<?php

namespace app\Interfaces;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface IFuncionarioRepository
 * @package namespace Modules\RecursosHumanos\Interfaces;
 */
interface IClienteRepository
{
    function cadastrarCliente();
    function consultarCliente();
    function atualizarDadosCliente();
    function deletarCliente();
    function setRua($Rua);
    function getRua();
    function setBairro($Bairro);
    function getBairro();
    function setNumeroCasa($NumeroCasa);
    function getNumeroCasa();
}
