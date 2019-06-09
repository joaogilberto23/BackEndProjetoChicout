<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\MySQL\ProjetoChicout\CategoriaDAO;
use App\Models\MySQL\ProjetoChicout\CategoriaModel;

final class CategoriaController
{
    public function getCategoria(Request $request, Response $response, array $args): Response
    {
        $categoriaDAO = new CategoriaDAO();

        $categoria = $categoriaDAO->getAllCategoria();

        $response = $response->withJson($categoria);
                
        return $response;
    }
    //=======================================================================
    public function insertCategoria(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        
        $categoriaDAO = new CategoriaDAO();
        $categoria = new CategoriaModel();

        $categoria->setTipoCategoria($data['tipo_categoria']);

        $categoriaDAO->insertCategoria($categoria);

        $response = $response->withJson([
            'message' => 'Categoria inserida com sucesso!'
        ]);
        
        return $response;
    }
    //=======================================================================
    public function updateCategoria(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        
        $categoriaDAO = new CategoriaDAO();
        $categoria = new CategoriaModel();

        $categoria->setIdCategoria((int)$data['id_categoria'])
                  ->setTipoCategoria($data['tipo_categoria']);

        $categoriaDAO ->updateCategoria($categoria);

        $response = $response->withJson([
            'message' => 'Categoria alterada com sucesso!'
        ]);

        return $response;
    }
    //=======================================================================
    public function deleteCategoria(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

        $categoriaDAO = new CategoriaDAO();

        $id_categoria = (int)$data['id_categoria'];
        
        $categoriaDAO->deleteCategoria($id_categoria);

        $response = $response->withJson([
            'message' => 'Categoria excluída com sucesso!'
        ]);
        return $response;
    }
}