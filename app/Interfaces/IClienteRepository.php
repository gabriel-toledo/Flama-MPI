<?php

namespace App\Interfaces;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface IFuncionarioRepository
 * @package namespace App\Interfaces;
 */
interface IClienteRepository extends RepositoryInterface
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
