<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
</head>

<div id="result-message"></div>
<div id="erros-validacao-form"></div>

<div class="form-horizontal">
    <div class="form-group row">
        <div class="col-md-12" style="padding-left: 5px; padding-right: 5px;"> 
            <div id="tabstrip">
                <div id="editar-produto">  
                    <form class="form-horizontal" id="form-produto" action="{{ route('estoque.salvar') }}" method="POST" enctype="multipart/form-data" style="margin: 5em">
                        <input type="hidden" name="acao" id="acao" value="EDIT">
                        @include('estoque.partials.formBaseProduto', ['acao' => 'EDIT', 'produto' => $produto, 'idEstoque' => $idEstoque])
                        <div class="col-md-11">
                            <button type="submit" id="Salvar" class="btn btn-primary">Salvar</button>
                            <a style="color:black" id="Voltar" class="btn btn-default" href="{{ route('estoque.show', ['idEstoque' => 1]) }}">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>              
    </div>              
</div>

<script>
    $("#form-produto").submit(function(e){
        e.preventDefault();
        $.ajax({
            url: $('#form-produto').attr('action'),
            type: 'post',
            data: $('#form-produto').serialize(),
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
                $("#erros-validacao-form").html('');
                if (data.redirectUrl != null && data.redirectUrl != '') 
                    window.location.replace(data.redirectUrl);
            },
            error: function(data) {
                errors = data.responseJSON.errors;
                if (data.responseJSON.exception) {
                    alert(errors);
                } else {
                    alert(errors);
                }
            }
        });
    }); 
</script>