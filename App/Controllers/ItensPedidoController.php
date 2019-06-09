<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\MySQL\ProjetoChicout\ItensPedidoDAO;
use App\Models\MySQL\ProjetoChicout\ItensPedidoModel;

final class ItensPedidoController
{
    public function getItensPedido(Request $request, Response $response, array $args): Response
    {
        $itensPedidoDAO = new ItensPedidoDAO();

        $itenspedido = $itensPedidoDAO->getAllItensPedido();

        $response = $response->withJson($itenspedido);
                
        return $response;
    }
    //=======================================================================
    public function insertItensPedido(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        
        $itensPedidoDAO = new ItensPedidoDAO();
        $itenspedido = new ItensPedidoModel();

        $itenspedido->setIdPedido((int)$data['id_pedido'])
                    ->setIdProduto((int)$data['id_produto'])
                    ->setQuantidade((int)$data['quantidade'])
                    ->setValorItens((float)$data['valor_itens']);

        $itensPedidoDAO->insertItensPedido($itenspedido);

        $response = $response->withJson([
            'message' => 'Itens e Pedidos inseridos com sucesso!'
        ]);
        
        return $response;
    }
    //=======================================================================
    public function updateItensPedido(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        
        $itensPedidoDAO = new ItensPedidoDAO();
        $itenspedido = new ItensPedidoModel();

        $itenspedido->setIdPedido((int)$data['id_pedido'])
                    ->setIdProduto((int)$data['id_produto'])
                    ->setQuantidade((int)$data['quantidade'])
                    ->setValorItens((float)$data['valor_itens']);

        $itensPedidoDAO ->updateItensPedido($itenspedido);

        $response = $response->withJson([
            'message' => 'Itens e Pedisos alterados com sucesso!'
        ]);

        return $response;
    }
    //=======================================================================
    public function deleteItensPedido(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

        $itensPedidoDAO = new ItensPedidoDAO();

        $id_pedido = (int)$data['id_pedido'];
        $id_produto = (int)$data['id_produto'];
        
        $itensPedidoDAO->deleteItensPedido($id_pedido,$id_produto);

        $response = $response->withJson([
            'message' => 'Itens e Pedidos excluídos com sucesso!'
        ]);
        return $response;
    }
}