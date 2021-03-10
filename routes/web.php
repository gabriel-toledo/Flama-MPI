<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/produto/{idProduto}', 'ProdutoController@getProduto')->name('produto.show');

Route::post('/produto/{idProduto}', 'ProdutoController@adicionarProduto')->name('produto.adicionarProduto');

Route::get('/perfil', 'UsuarioController@getUsuario')->name('usuario.show');

Route::get('/carrinho/{idCarrinho}', 'CarrinhoController@getCarrinho')->name('carrinho.show');

Route::get('/estoque/{idEstoque}', 'EstoqueController@getEstoque')->name('estoque.show');

