<?php

namespace app\Interfaces;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface IFuncionarioRepository
 * @package namespace Modules\RecursosHumanos\Interfaces;
 */
interface IProdutoRepository
{
    function setNomeProduto($nomeProduto);
    function getNomeProduto();
    function setQuantProduto($quantProduto);
    function getQuantProduto();
    function setPreco($preco);
    function getPreco();
    function setDescricao($descricao);
    function getDescricao();
    function adicionaProduto();
    function atualizaProduto();
    function removerProduto();
}
