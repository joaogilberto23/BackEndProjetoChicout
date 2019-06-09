<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\MySQL\ProjetoChicout\ProdutoDAO;
use App\Models\MySQL\ProjetoChicout\ProdutoModel;

final class ProdutoController
{
    public function getProduto(Request $request, Response $response, array $args): Response
    {
        $produtoDAO = new ProdutoDAO();

        $produto = $produtoDAO->getAllProduto();

        $response = $response->withJson($produto);
                
        return $response;
    }
    //=======================================================================
    public function insertProduto(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        
        $produtoDAO = new ProdutoDAO();
        $produto = new ProdutoModel();

        $produto->setIdCategoria((int)$data['id_categoria'])
                ->setNome($data['nome'])
                ->setValorProduto((float)$data['valor_produto'])
                ->setEstoque((int)$data['estoque'])
                ->setTamanho($data['tamanho']);

        $produtoDAO->insertProduto($produto);

        $response = $response->withJson([
            'message' => 'Produto inseridos com sucesso!'
        ]);

        return $response;
    }
    //=======================================================================
    public function updateProduto(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        
        $produtoDAO = new ProdutoDAO();
        $produto = new ProdutoModel();

        $produto->setIdProduto((int)$data['id_produto'])
                ->setIdCategoria((int)$data['id_categoria'])
                ->setNome($data['nome'])
                ->setValorProduto((float)$data['valor_produto'])
                ->setEstoque((int)$data['estoque'])
                ->setTamanho($data['tamanho']);

        $produtoDAO ->updateProduto($produto);

        $response = $response->withJson([
            'message' => 'Produto alterados com sucesso!'
        ]);
                     
        return $response;
    }
    //=======================================================================
    public function deleteProduto(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

        $produtoDAO = new ProdutoDAO();
        
        $id_produto = (int)$data['id_produto'];
        
        $produtoDAO->deleteProduto($id_produto);

        $response = $response->withJson([
            'message' => 'Produto excluídos com sucesso!'
        ]);
        return $response;
    }
    
}