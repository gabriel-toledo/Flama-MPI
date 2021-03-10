<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
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
                    <h1>Produto</h1>
                </div>
                <div class="navbar-nav float-right">
                    <a class="nav-link mr-sm-2" href="#"><img src="\img\perfil.png" alt="" style="width: 10px; min-width: 40px;"></a>
                </div>
            </div>
        </nav>
        <div class="d-flex justify-content-center">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> 
            </form>
            <a href="" class="nav-link mr-sm-2"><img src="\img\carrinho.png" alt="" style="width: 10px; min-width: 40px;"></a>
        </div>
    </header><br><br><br><br>
    <div class="row">
        <div class="col-md-4">
            <img src="\img\{{ $produto->nomeProduto }}.png" alt="" style="width: 10px; min-width: 350px;"><img src="" alt="">
        </div>
        <div class="col-md-4">
            <p>{{ $produto->nomeProduto }}</p>
            <br><br>
            <p>R$ {{ $produto->preco }}</p>
            <br><br><br>
            <p>Quantidade= <input type="number"/></p>
            <br><br>
            <p><button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="{{ route('produto.adicionarProduto', ['idProduto' => $produto->idProduto]) }}">Comprar agora</button></p>
            <p></p><button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="{{ route('produto.adicionarProduto', ['idProduto' => $produto->idProduto]) }}">Adicionar ao carrinho</button><p></p>
        </div>
        <div class="col-md-4"></div>
    </div>
    <br>  
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <p>Descrição: {{ $produto->descricao }}<p>
        </div>
        <div class="col-md-4"></div>
    </div>
    </body>
</html>