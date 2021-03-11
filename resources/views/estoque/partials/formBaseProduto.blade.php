@csrf
<div id="erros-validacao-modal"></div>

<input id="idProduto" name="idProduto" type="hidden" value="{{$produto->idProduto == null ? 0 : $produto->idProduto}}" />
<input id="idEstoque" name="idEstoque" type="hidden" value="{{$idEstoque == null ? 1 : $idEstoque}}" />

<div class="form-group row">
    <label for="nomeProduto" class="col-sm-2 col-form-label">Nome do Produto:</label>
    <div class="col-md-8">
        <input class="form-control" type="text" id="nomeProduto" name="nomeProduto" style="width: 100%;" onkeyup="toUpperCase(this)"  value="{{$produto->nomeProduto}}" />
    </div>
</div>

<div class="form-group row">
    <label for="quantProduto" class="col-sm-2 col-form-label">Quantidade do Produto:</label>
    <div class="col-md-8">
        <input class="form-control" type="number" id="quantProduto" name="quantProduto" style="width: 100%;" onkeyup="toUpperCase(this)" value="{{$produto->quantProduto}}" />
    </div>
</div>

<div class="form-group row">
    <label for="preco" class="col-sm-2 col-form-label">Preço do Produto:</label>
    <div class="col-md-8">
        <input class="form-control" type="number" id="preco" name="preco" style="width: 100%;" value="{{$produto->preco}}" />
    </div>
</div>

<div class="form-group row">
    <label for="descricao" class="col-sm-2 col-form-label">Descrição:</label>
    <div class="col-md-8">
        <input class="form-control" type="text" id="descricao" name="descricao" style="width: 100%;" value="{{$produto->descricao}}" />
    </div>
</div>