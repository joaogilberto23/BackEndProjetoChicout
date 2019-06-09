<?php

namespace App\DAO\MySQL\ProjetoChicout;
use App\Models\MySQL\ProjetoChicout\ProdutoModel;

class ProdutoDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }
   //=======================================================================
   public function getAllProduto(): array
   {
       $produto = $this->pdo
           ->query('SELECT
                        id_produto,
                        id_categoria,
                        nome,
                        valor_produto,
                        estoque,
                        tamanho                   
                   FROM produto;')
           ->fetchAll(\PDO::FETCH_ASSOC);

       return $produto;
   }
    //=======================================================================
    public function insertProduto(ProdutoModel $produto): void
    {
        $statement = $this->pdo
            ->prepare('INSERT INTO produto
                       VALUES(NULL,
                       id_categoria = :id_categoria,
                       nome = :nome,
                       valor_produto = :valor_produto,
                       estoque = :estoque,
                       tamanho = :tamanho);');
        $statement->execute([
            'id_categoria' => $produto->getIdCategoria(),
            'nome' => $produto->getNome(),
            'valor_produto' => $produto->getValorProduto(),
            'estoque' => $produto->getEstoque(),
            'tamanho' => $produto->getTamanho()
            ]);
    }
    //=======================================================================
    public function updateProduto(ProdutoModel $produto): void
    {
        $statement = $this->pdo
            ->prepare('UPDATE produto SET   
                       id_categoria = :id_categoria,
                       nome = :nome,
                       valor_produto = :valor_produto,
                       estoque = :estoque,
                       tamanho = :tamanho
                      WHERE id_produto = :id_produto;');
        $statement->execute([
            'id_produto' => $produto->getIdProduto(),
            'id_categoria' => $produto->getIdUsuario(),
            'nome' => $produto->getNome(),
            'valor_produto' => $produto->getValorProduto(),
            'estoque' => $produto->getEstoque(),
            'tamanho' => $produto->getTamanho()
            ]);
    }
    //=======================================================================
    public function deleteProduto(int $id_produto): void
    {
        $statement = $this->pdo
            ->prepare('DELETE FROM produto 
                       WHERE id_produto = :id_produto;');
        $statement->execute([
            'id_produto' => $id_produto
            ]);
    }
}