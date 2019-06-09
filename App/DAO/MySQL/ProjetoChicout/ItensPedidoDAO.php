<?php

namespace App\DAO\MySQL\ProjetoChicout;
use App\Models\MySQL\ProjetoChicout\ItensPedidoModel;

class ItensPedidoDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }
   //=======================================================================
   public function getAllItensPedido(): array
   {
       $itenspedido = $this->pdo
           ->query('SELECT
                   id_pedido,
                   id_produto,
                   quantidade,
                   valor_itens
                   FROM itenspedido;')
           ->fetchAll(\PDO::FETCH_ASSOC);

       return $itenspedido;
   }
    //=======================================================================
    public function insertItensPedido(ItensPedidoModel $itenspedido): void
    {
        $statement = $this->pdo
            ->prepare('INSERT INTO itenspedido
                       VALUES(id_pedido = :id_pedido,
                              id_produto = :id_produto,
                              quantidade = :quantidade,
                              valor_itens = :valor_itens);');
        $statement->execute([
            'id_pedido' => $itenspedido->getIdPedido(),
            'id_produto' => $itenspedido->getIdProduto(),
            'quantidade' => $itenspedido->getQuantidade(),
            'valor_itens' => $itenspedido->getValorItens()
            ]);
    }
    //=======================================================================
    public function updateItensPedido(ItensPedidoModel $itenspedido): void
    {
        $statement = $this->pdo
            ->prepare('UPDATE itenspedido SET   
                              id_produto = :id_produto,
                              quantidade = :quantidade,
                              valor_itens = :valor_itens
                      WHERE id_pedido = :id_pedido 
                        AND id_produto = :id_produto;');
        $statement->execute([
            'id_pedido' => $itenspedido->getIdPedido(),
            'id_produto' => $itenspedido->getIdProduto(),
            'quantidade' => $itenspedido->getQuantidade(),
            'valor_itens' => $itenspedido->getValorItens()
            ]);
    }
    //=======================================================================
    public function deleteItensPedido(int $id_pedido, $id_produto): void
    {
        $statement = $this->pdo
            ->prepare('DELETE FROM itenspedido 
                       WHERE id_pedido = :id_pedido 
                         AND id_produto = :id_produto;');
        $statement->execute([
            'id_pedido' => $id_pedido,
            'id_produto' => $id_produto
            ]);
    }    
}