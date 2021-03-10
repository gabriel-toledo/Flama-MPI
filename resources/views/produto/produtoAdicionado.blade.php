<div class="modal fade" id="modalTemplate" role="dialog" aria-labelledby="modalLabelTemplate" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalTitleTemplate"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bodyModalTemplate">
                <div class="container-fluid">
                    <div class="col-sm-12">O item foi adicionado ao seu carrinho</div>
                    <div class="col-sm-12">
                        <button id="Fechar" class="btn btn-primary" data-dismiss="modal">Continuar Comprando</button>
                        <button id="Carrinho" class="btn btn-danger" onclick="{{ route('carrinho.show') }}">Ir Ao Carrinho</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>