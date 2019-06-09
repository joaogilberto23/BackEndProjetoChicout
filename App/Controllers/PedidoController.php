<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\MySQL\ProjetoChicout\PedidoDAO;
use App\Models\MySQL\ProjetoChicout\PedidoModel;

final class PedidoController
{
    public function getPedido(Request $request, Response $response, array $args): Response
    {
        $pedidoDAO = new PedidoDAO();

        $pedido = $pedidoDAO->getAllPedido();

        $response = $response->withJson($pedido);
                
        return $response;
    }
    //=======================================================================
    public function insertPedido(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        
        $pedidoDAO = new PedidoDAO();
        $pedido = new PedidoModel();

        $pedido->setIdUsuario((int)$data['id_usuario'])
               ->setIdFormaPagamento((int)$data['id_formaPagamento'])
               ->setDataPedido($data['data_pedido'])
               ->setDataEntrega($data['data_entrega'])
               ->setValorPedido((float)$data['valor_pedido']);

        $pedidoDAO->insertPedido($pedido);

        $response = $response->withJson([
            'message' => 'Pedido inserido com sucesso!'
        ]);
        
        return $response;
    }
    //=======================================================================
    public function updatePedido(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        
        $pedidoDAO = new PedidoDAO();
        $pedido = new PedidoModel();

        $pedido->setIdUsuario((int)$data['id_usuario'])
               ->setIdFormaPagamento((int)$data['id_formaPagamento'])
               ->setDataPedido($data['data_pedido'])
               ->setDataEntrega($data['data_entrega'])
               ->setValorPedido((float)$data['valor_pedido']);

        $pedidoDAO->updatePedido($pedido);

        $response = $response->withJson([
            'message' => 'Pedido editado com sucesso!'
        ]);
        
        return $response;  
    }
    //=======================================================================
    public function deletePedido(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

        $pedidoDAO = new PedidoDAO();

        $id_pedido = (int)$data['id_pedido'];
        
        $pedidoDAO->deletePedido($id_pedido);

        $response = $response->withJson([
            'message' => 'Pedido excluído com sucesso!'
        ]);
        
        return $response;  
    }
}