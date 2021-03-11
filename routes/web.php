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

Route::get('/produto/comprarAgora/{idProduto}/{quantidade}', 'ProdutoController@comprarAgora')->name('produto.comprarAgora');

Route::get('/produto/adicionarAoCarrinho/{idProduto}/{quantidade}', 'ProdutoController@adicionarProduto')->name('produto.adicionarAoCarrinho');

Route::get('/perfil', 'UsuarioController@getUsuario')->name('usuario.show');

Route::post('/perfil/salvar', 'UsuarioController@salvar')->name('usuario.salvar');

Route::get('/carrinho/{idCarrinho}', 'CarrinhoController@getCarrinho')->name('carrinho.show');

Route::get('/estoque/adicionarProduto', 'EstoqueController@adicionarProdutoEstoque')->name('estoque.adicionarProduto');

Route::get('/estoque/{idEstoque}', 'EstoqueController@getEstoque')->name('estoque.show');

Route::get('/estoque/editarProduto/{idProduto}', 'EstoqueController@editarProduto')->name('estoque.editarProduto');

Route::post('/estoque/salvar', 'EstoqueController@salvar')->name('estoque.salvar');

Route::post('/estoque/excluir/{idProduto}', 'EstoqueController@excluir')->name('estoque.excluir');

