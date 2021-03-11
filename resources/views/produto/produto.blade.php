<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav mr-auto">
                    <a class="nav-link" href="{{ route('home') }}" ><img src="/img/home.png" alt="" style="width: 10px; min-width: 40px;"></span></a>
                </div>
                <div class="navbar-nav mr-auto">
                    <h1>Produto</h1>
                </div>
                <div class="navbar-nav float-right">
                    <a class="nav-link mr-sm-2" href="{{ route('usuario.show') }}"><img src="/img/perfil.png" alt="" style="width: 10px; min-width: 40px;"></a>
                </div>
            </div>
        </nav>
        <div class="d-flex justify-content-center">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> 
            </form>
            <a href="{{ route('carrinho.show', ['idCarrinho' => 1]) }}" class="nav-link mr-sm-2"><img src="/img/carrinho.png" alt="" style="width: 10px; min-width: 40px;"></a>
        </div>
    </header><br><br>
    <div class="row">
        <div class="col-md-4" style="margin-left: 2em">
            <img src="/img/{{ $produto->nomeProduto }}.png" alt="" style="width: 10px; min-width: 350px;"><img src="" alt="">
        </div>
        <div class="col-md-4">
            <br><br>
            <p>{{ $produto->nomeProduto }}</p>
            <br><br>
            <p>R$ {{ $produto->preco }}</p>
            <br><br><br>
            <p>Quantidade= <input id="quantidade" value="1" type="number"/></p>
            <br><br>
            <button class="btn btn-outline-success my-2 my-sm-0" onclick="comprarAgora()" style="margin-right: 1em">Comprar agora</a>
            <button id="modalTrigger" class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#modalTemplate" onclick="adicionarAoCarrinho()">Adicionar ao carrinho</button>

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
                                    <a id="Carrinho" class="btn btn-danger" href="{{ route('carrinho.show', ['idCarrinho' => $cliente->idCarrinho]) }}">Ir Ao Carrinho</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11">
            <p>Descrição: <br> {{ $produto->descricao }}<p>
        </div>
    </div>
    </body>
    <footer style="padding-top:10px; padding-bottom:0px; background-attachment: scroll; position:fixed!; width:100%; bottom: 0; left: 0; right: 0; background: #eee;">Flama Materiais de Prevenção de Incêndio</footer>
</html>

<script>
    function adicionarAoCarrinho() {
        var url = "{{ route('produto.adicionarAoCarrinho', ['idProduto' => $produto->idProduto, 'quantidade' => ':id']) }}";
        url = url.replace(':id', $('#quantidade').val());
        $.ajax({method:"get", url: url});
    }

    function comprarAgora() {
        var url = "{{ route('produto.comprarAgora', ['idProduto' => $produto->idProduto, 'quantidade' => ':id']) }}";
        url = url.replace(':id', $('#quantidade').val());
        $.ajax({method:"get", url: url, success: function(data) {
            var url = "{{ route('carrinho.show', ['idCarrinho' => ':id']) }}";
            url = url.replace(':id', data);
            window.location = url;
        }});
    }
</script>