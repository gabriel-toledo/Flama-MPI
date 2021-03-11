<!DOCTYPE html>
<head>
    @csrf
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
                    <a class="nav-link" href="{{ route('home') }}" ><img src="\img\home.png" alt="" style="width: 10px; min-width: 40px;"></span></a>
                </div>
                <div class="navbar-nav mr-auto">
                    <h1>Estoque</h1>
                </div>
                <div class="navbar-nav float-right">
                    <a class="nav-link mr-sm-2" href="{{ route('usuario.show') }}"><img src="\img\perfil.png" alt="" style="width: 10px; min-width: 40px;"></a>
                </div>
            </div>
        </nav>
    </header><br><br><br>
    <main>
    <div id="result-message"></div>
    <table class="table" style="margin: 1em; width: 98%">
        @csrf
        <div style="margin-left:1em">
            <a id="add" class="btn btn-primary add" href="{{route('estoque.adicionarProduto')}}" title="Adicionar"><i class="fa fa-plus"></i> Adicionar</a>
         </div>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome do Produto</th>
                <th scope="col">Quantidade do Produto</th>
                <th scope="col">Preço do Produto</th>
                <th scope="col">Descrição do Produto</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produtos as $produto)
            <tr>
                <th scope="row">{{$produto->idProduto}}</th>
                <td>{{$produto->nomeProduto}}</td>
                <td>{{$produto->quantProduto}}</td>
                <td>{{$produto->preco}}</td>
                <td>{{$produto->descricao}}</td>
                <td>
                    <div class="btn-group d-flex justify-content-center" role="group" aria-hidden="true">
                        <a id="edit-{{$produto->idProduto}}" class="btn btn-secondary edit" href="{{route('estoque.editarProduto', ['idProduto' => $produto->idProduto])}}" title="Editar"><i class="fa fa-edit"></i></a>
                        <button id="delete-{{$produto->idProduto}}" class="btn btn-danger delete" onclick="excluirProduto(event, '{{$produto->idProduto}}')" title="Excluir"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </main>
    <footer style="padding-top:10px; padding-bottom:0px; background-attachment: scroll; position:fixed!; width:100%; bottom: 0; left: 0; right: 0; background: #eee;">Flama Materiais de Prevenção de Incêndio</footer>
</body>
</html>

<script>
    function excluirProduto(event, id)
    {
        event.preventDefault();
        var url = "{{route('estoque.excluir', ['idProduto' => 'v_id' ])}}";
        url = url.replace('v_id', id);
        if(confirm('Deseja excluir esse produto? ')) {
            $.ajax({
                url: url,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'post',
                success: function(data) {
                    var msg = data.sucess;
                    var html = '<div class="alert alert-success page-alert" style="text-align: center;">';
                    html = html.concat('<button type="button" class="close">×</button>');
                    if (msg == null || msg.trim() == '') {
                        msg = 'Ação realizada com sucesso.';
                    }
                    html = html.concat(msg);
                    html = html.concat('</div>');
                    $('#result-message').html(html);
                    setTimeout(function() {
                        $('#result-message').html('');
                    }, 7000);
                },
                error: function(data) {
                    errors = data.responseJSON.message;
                    alert(errors);
                }
            });
        }
    }
</script>