<?php

namespace App\Providers;

use App\Interfaces\ICarrinhoRepository;
use App\Repository\CarrinhoRepository;
use App\Interfaces\IClienteRepository;
use App\Repository\ClienteRepository;
use App\Interfaces\IEstoqueRepository;
use App\Repository\EstoqueRepository;
use App\Interfaces\IGerenteRepository;
use App\Repository\GerenteRepository;
use App\Interfaces\IPagamentoRepository;
use App\Repository\PagamentoRepository;
use App\Interfaces\IProdutoRepository;
use App\Repository\ProdutoRepository;
use App\Interfaces\IUsuarioRepository;
use App\Repository\UsuarioRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->registerRepositories();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    protected function registerRepositories()
    {
        $this->app->bind(ICarrinhoRepository::class, CarrinhoRepository::class);
        $this->app->bind(IClienteRepository::class, ClienteRepository::class);
        $this->app->bind(IEstoqueRepository::class, EstoqueRepository::class);
        $this->app->bind(IGerenteRepository::class, GerenteRepository::class);
        $this->app->bind(IPagamentoRepository::class, PagamentoRepository::class);
        $this->app->bind(IProdutoRepository::class, ProdutoRepository::class);
        $this->app->bind(IUsuarioRepository::class, UsuarioRepository::class);
    }
}
