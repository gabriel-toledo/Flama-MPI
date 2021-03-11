<div class="modal fade" id="modalTemplate" role="dialog" aria-labelledby="modalLabelTemplate" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalTitleTemplate">Produto Adicionado com sucesso</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="bodyModalTemplate">
                    <div class="container-fluid">
                        <div class="col-sm-12">O item foi adicionado ao seu carrinho</div>
                        <div class="modal-footer col-sm-12">
                            <button id="Fechar" class="btn btn-primary" data-dismiss="modal">Continuar Comprando</button>
                            <a id="Carrinho" class="btn btn-danger" href="{{ route('carrinho.show', ['idCarrinho' => $carrinho->idCarrinho]) }}">Ir Ao Carrinho</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
