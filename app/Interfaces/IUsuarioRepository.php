<?php

namespace app\Interfaces;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface IFuncionarioRepository
 * @package namespace Modules\RecursosHumanos\Interfaces;
 */
interface IUsuarioRepository
{
    function setNome($nome);
    function getNome();
    function setCPF($cpf);
    function getCPF();
    function setSexo($sexo);
    function getSexo();
    function setTelefone($telefone);
    function getTelefone();
    function setEmail($email);
    function getEmail();
}
