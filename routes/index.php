<?php

use function src\slimConfiguration;
use App\Controllers\CategoriaController;
use App\Controllers\EnderecoController;
use App\Controllers\FormaPagamentoController;
use App\Controllers\ItensPedidoController;
use App\Controllers\PedidoController;
use App\Controllers\ProdutoController;
use App\Controllers\UsuarioController;

$app = new \Slim\App(slimConfiguration());

// ===============================================================

$app->get('/Categoria', CategoriaController::class . ':getCategoria');
$app->post('/Categoria', CategoriaController::class . ':insertCategoria');
$app->put('/Categoria', CategoriaController::class . ':updateCategoria');
$app->delete('/Categoria', CategoriaController::class . ':deleteCategoria');

// ===============================================================

$app->get('/Endereco', EnderecoController::class . ':getEndereco');
$app->post('/Endereco', EnderecoController::class . ':insertEndereco');
$app->put('/Endereco', EnderecoController::class . ':updateEndereco');
$app->delete('/Endereco', EnderecoController::class . ':deleteEndereco');

// ===============================================================

$app->get('/FormaPagamento', FormaPagamentoController::class . ':getFormaPagamento');
$app->post('/FormaPagamento', FormaPagamentoController::class . ':insertFormaPagamento');
$app->put('/FormaPagamento', FormaPagamentoController::class . ':updateFormaPagamento');
$app->delete('/FormaPagamento', FormaPagamentoController::class . ':deleteFormaPagamento');

// ===============================================================

$app->get('/ItensPedido', ItensPedidoController::class . ':getItensPedido');
$app->post('/ItensPedido', ItensPedidoController::class . ':insertItensPedido');
$app->put('/ItensPedido', ItensPedidoController::class . ':updateItensPedido');
$app->delete('/ItensPedido', ItensPedidoController::class . ':deleteItensPedido');

// ===============================================================

$app->get('/Pedido', PedidoController::class . ':getPedido');
$app->post('/Pedido', PedidoController::class . ':insertPedido');
$app->put('/Pedido', PedidoController::class . ':updatePedido');
$app->delete('/Pedido', PedidoController::class . ':deletePedido');

// ===============================================================

$app->get('/Produto', ProdutoController::class . ':getProduto');
$app->post('/Produto', ProdutoController::class . ':insertProduto');
$app->put('/Produto', ProdutoController::class . ':updateProduto');
$app->delete('/Produto', ProdutoController::class . ':deleteProduto');

// ===============================================================

$app->get('/Usuario', UsuarioController::class . ':getUsuario');
$app->post('/Usuario', UsuarioController::class . ':insertUsuario');
$app->put('/Usuario', UsuarioController::class . ':updateUsuario');
$app->delete('/Usuario', UsuarioController::class . ':deleteUsuario');

// ===============================================================

$app->run();