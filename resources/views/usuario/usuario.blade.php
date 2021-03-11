<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
                    <h1>Meu Perfil</h1>
                </div>
                <div class="navbar-nav float-right">
                    <a class="nav-link mr-sm-2" href="{{ route('usuario.show') }}"><img src="\img\perfil.png" alt="" style="width: 10px; min-width: 40px;"></a>
                </div>
            </div>
        </nav>
    </header><br><br><br>
    
    <main>
        <div class="card text-center">
        <div class="row">
            <div class="col-md-2" style="margin-bottom: 1em; margin-top: 1em; margin-left: 2em; border-width: medium; border-style: solid;border-color: blue; border-radius: 10px;">
                <br>
                <a class="btn btn-outline-success row" type="submit" href="{{route('usuario.show')}}">Atualizar dados</a>
                <br><br><br>
                <a class="btn btn-outline-success row" type="submit" href="{{route('estoque.show', ['idEstoque' => 1])}}" >Estoque</a>
            </div>
            <form id="form-usuario" method="POST" enctype="multipart/form-data" class="form-horizontal col-md-9" action="{{ route('usuario.salvar') }}" style="margin-top: 1em; margin-bottom: 1em">
                @csrf
                <div id="erros-validacao-modal"></div>
                <div id="result-message"></div>                
                <input id="idUsuario" name="idUsuario" type="hidden" value="{{$usuario->idUsuario}}" />
                <div class="form-group row">
                <label for="nome" class="col-md-2 col-form-label">Nome:</label>
                    <div class="col-md-7">
                        <input type="text" id="nome" class="form-control" name="nome" style="width: 100%;" value="{{$usuario->nome}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cpf" class="col-md-2 col-form-label">CPF:</label>
                    <div class="col-md-7">
                        <input type="text" id="cpf" class="form-control" name="cpf" style="width: 100%;" value="{{$usuario->cpf}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sexo" class="col-md-2 col-form-label">Sexo:</label>
                    <div class="col-md-7">
                        <select name="sexo" class="form-control" id="sexo">
                            <option value="m">Masculino</option>
                            <option value="f">Feminino</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telefone" class="col-md-2 col-form-label">Telefone:</label>
                    <div class="col-md-7">
                        <input type="tel" id="telefone" class="form-control" name="telefone" style="width: 100%;" value="{{$usuario->telefone}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label">Email:</label>
                    <div class="col-md-7">
                        <input type="email" id="email" class="form-control" name="email" style="width: 100%;" value="{{$usuario->email}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rua" class="col-md-2 col-form-label">Rua:</label>
                    <div class="col-md-7">
                        <input type="text" id="rua" class="form-control" name="rua" style="width: 100%;" value="" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bairro" class="col-md-2 col-form-label">Bairro:</label>
                    <div class="col-md-7">
                        <input type="text" id="bairro" class="form-control" name="bairro" style="width: 100%;" value="" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="numeroCasa" class="col-md-2 col-form-label">Numero da Casa:</label>
                    <div class="col-md-7">
                        <input type="text" id="numeroCasa" class="form-control" name="numeroCasa" style="width: 100%;" value="" />
                    </div>
                </div>
                <br><br>
                <div class="col-md-9">
                    <button type="submit" id="Salvar" class="btn btn-primary">Salvar</button>
                    <a style="color:black" id="Voltar" class="btn btn-default" href="{{route('home')}}">Voltar</a>
                </div>
            </div>
        </div>
    </main>
    <footer style="padding-top:10px; padding-bottom:0px; background-attachment: scroll; position:fixed!; width:100%; bottom: 0; left: 0; right: 0; background: #eee;">Flama Materiais de Prevenção de Incêndio</footer>
</body>
</html>

<script>
    $(document).on('click', '#Salvar', function(event){
        event.preventDefault();
        $.ajax({
            url: $('#form-usuario').attr('action'),
            type: 'post',
            data: $('#form-usuario').serialize(),
            success: function(data) {
                var html = '<div class="alert alert-success page-alert" style="text-align: center;">';
                html = html.concat('<button type="button" class="close">×</button>');
                if (data.sucess == null || data.sucess.trim() == '') {
                    data.sucess = 'Ação realizada com sucesso.';    
                }
                    html = html.concat(data.sucess);
                    html = html.concat('</div>');
                    $('#result-message').html(html);
                    setTimeout(function() {
                        $('#result-message').html('');
                    }, 7000);
                    $("#erros-validacao-form").html('');
                if (data.redirectUrl != null && data.redirectUrl != '') 
                    window.location.replace(data.redirectUrl);
            },
            error: function(data) {
                errors = data.responseJSON.errors;
                if (data.responseJSON.exception) {
                    exibirMensagemErro(errors, 'erros-validacao-form');
                } else {
                    exibirMensagemErroValidateLaravel(errors, 'erros-validacao-form');
                }
            }
        });
    });

    function exibirMensagemErro(erros, idDiv, timer) {
        var errosHtml = '';

        if (Array.isArray(erros)) {
            jQuery.each(erros, function(index, value) {
                errosHtml += '<li>' + value + '</li>';
            });
        } else {
            errosHtml += '<li>' + erros + '</li>';
        }

        var html = '<div class="alert alert-danger alert-dismissable">';
        html = html.concat(
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
        );
        html = html.concat(
            '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true" style="padding-right: 5px;"></span>'
        );
        html = html.concat('<span class="sr-only">Erro:</span>');
        html = html.concat('Os seguintes erros foram encontrados:');
        html = html.concat('<ul style="margin-left: 10px">' + errosHtml + '</ul>');
        html = html.concat('</div>');

        $('#' + idDiv).html(html);
        if (timer != null && timer > 0) {
            setTimeout(function() {
                $('#' + idDiv).html('');
            }, timer);
        }
    }

    function exibirMensagemErroValidateLaravel(validateErrors, idDiv, timer) {
        var errosHtml = '';

        for (var property in validateErrors) {
            if (Array.isArray(validateErrors[property])) {
                jQuery.each(validateErrors[property], function(index, value) {
                    errosHtml += '<li>' + value + '</li>';
                });
            } else {
                errosHtml += '<li>' + validateErrors[property] + '</li>';
            }
        }

        var html = '<div class="alert alert-danger alert-dismissable">';
        html = html.concat(
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
        );
        html = html.concat(
            '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true" style="padding-right: 5px;"></span>'
        );
        html = html.concat('<span class="sr-only">Erro:</span>');
        html = html.concat('Os seguintes erros foram encontrados:');
        html = html.concat('<ul style="margin-left: 10px">' + errosHtml + '</ul>');
        html = html.concat('</div>');

        $('#' + idDiv).html(html);
        if (timer != null && timer > 0) {
            setTimeout(function() {
                $('#' + idDiv).html('');
            }, timer);
        }
    }
</script>