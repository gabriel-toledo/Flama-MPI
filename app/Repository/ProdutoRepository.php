<?php

namespace App\Repository;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Interfaces\IProdutoRepository;
use App\Models\Produto;

class ProdutoRepository extends BaseRepository implements IProdutoRepository
{
    function model()
    {
        return Produto::class;
    }

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function setNomeProduto($nomeProduto)
    {
                
    }
    public function getNomeProduto()
    {
        
    }
    public function setQuantProduto($quantProduto)
    {
        
    }
    public function getQuantProduto()
    {
        
    }
    public function setPreco($preco)
    {
        
    }
    public function getPreco()
    {
        
    }
    public function setDescricao($descricao)
    {
        
    }
    public function getDescricao()
    {
        
    }
    public function adicionaProduto()
    {
        
    }
    public function atualizaProduto()
    {
        
    }
    public function removerProduto()
    {
        
    }
}


