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
                    <h1>Home</h1>
                </div>
                <div class="navbar-nav float-right">
                    <a class="nav-link mr-sm-2" href="{{ route('usuario.show') }}"><img src="\img\perfil.png" alt="" style="width: 10px; min-width: 40px;"></a>
                </div>
            </div>
        </nav>
        <div class="d-flex justify-content-center">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> 
            </form>
            <a class="nav-link mr-sm-2" href="{{ route('carrinho.show', ['idCarrinho' => 1]) }}"><img src="\img\carrinho.png" alt="" style="width: 10px; min-width: 40px;"></a>
        </div>
    </header><br><br><br>
    <main>
        <div class="card text-center">
            <div class="row">
                <div class="col-md-4"><a href="/produto/1"><img src="\img\Extintor.png" alt="" style="width: 10px; min-width: 100px;"><p>Extintor</p></a></div>
                <div class="col-md-4"><a href="/produto/2"><img src="\img\Alarme.png" alt="" style="width: 200px; min-width: 100px;"><p>Alarme</p></a></div>
                <div class="col-md-4"><a href="/produto/3"><img src="\img\Sprinkler.png" alt="" style="width: 10px; min-width: 100px;"><p>Sprinkler</p></a></div>
            </div>
            <div class="row">
                <div class="col-md-4"><a href="/produto/4"><img src="\img\Tubo.png" alt="" style="width: 10px; min-width: 100px;"><p>Tubo</p></a></div>
                <div class="col-md-4"><a href="/produto/5"><img src="\img\Porta Anti-Fogo.png" alt="" style="width: 10px; min-width: 100px;"><p>Porta Anti-Fogo</p></a></div>
                <div class="col-md-4"><a href="/produto/6"><img src="\img\Hidrante.png" alt="" style="width: 200px; min-width: 100px;"><p>Hidrante</p></a></div>
            </div>
            <div class="row">
                <div class="col-md-4"><a href="/produto/7"><img src="\img\Iluminacao de Emergência.png" alt="" style="width: 10px; min-width: 100px;"><p>Iluminação de Emergência</p></a></div>
                <div class="col-md-4"><a href="/produto/8"><img src="\img\Mangueira.png" alt="" style="width: 10px; min-width: 100px;"><p>Mangueira</p></a></div>
                <div class="col-md-4"><a href="/produto/9"><img src="\img\Materiais Hidráulicos.png" alt="" style="width: 10px; min-width: 100px;"><p>Materiais Hidráulicos</p></a></div>
            </div>
    </main>
    <footer style="height: 20px; position: absolute; bottom: 0; left: 0; right: 0; background: #eee;">Flama Materiais de Prevenção de Incêndio</footer>
</body>
</html>