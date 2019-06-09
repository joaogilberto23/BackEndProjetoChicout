<?php

namespace App\DAO\MySQL\ProjetoChicout;
use App\Models\MySQL\ProjetoChicout\PedidoModel;

class PedidoDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }
   //=======================================================================
   public function getAllPedido(): array
   {
       $pedido = $this->pdo
           ->query('SELECT
                        id_pedido,
                        id_usuario,
                        id_formaPagamento,
                        data_pedido,
                        data_entrega,
                        valor_pedido                   
                   FROM pedido;')
           ->fetchAll(\PDO::FETCH_ASSOC);

       return $pedido;
   }
    //=======================================================================
    public function insertPedido(PedidoModel $pedido): void
    {
        $statement = $this->pdo
            ->prepare('INSERT INTO pedido
                       VALUES(NULL,
                              id_usuario = :id_usuario,
                              id_formaPagamento = :id_formaPagamento,
                              data_pedido = :data_pedido,
                              data_entrega = :data_entrega,
                              valor_pedido = :valor_pedido);');
        $statement->execute([
            'id_usuario' => $pedido->getIdUsuario(),
            'id_formaPagamento' => $pedido->getIdFormaPagamento(),
            'data_pedido' => $pedido->getDataPedido(),
            'data_entrega' => $pedido->getDataEntrega(),
            'valor_pedido' => $pedido->getValorPedido()
            ]);
    }
    //=======================================================================
    public function updatePedido(PedidoModel $pedido): void
    {
        $statement = $this->pdo
            ->prepare('UPDATE pedido SET   
                              id_usuario = :id_usuario,
                              id_formaPagamento = :id_formaPagamento,
                              data_pedido = :data_pedido,
                              data_entrega = :data_entrega,
                              valor_pedido = :valor_pedido
                      WHERE id_pedido = :id_pedido;');
        $statement->execute([
            'id_pedido' => $pedido->getIdPedido(),
            'id_usuario' => $pedido->getIdUsuario(),
            'id_formaPagamento' => $pedido->getIdFormaPagamento(),
            'data_pedido' => $pedido->getDataPedido(),
            'data_entrega' => $pedido->getDataEntrega(),
            'valor_pedido' => $pedido->getValorPedido()
            ]);
    }
    //=======================================================================
    public function deletePedido(int $id_pedido): void
    {
        $statement = $this->pdo
            ->prepare('DELETE FROM pedido 
                       WHERE id_pedido = :id_pedido;');
        $statement->execute([
            'id_pedido' => $id_pedido
            ]);
    }

}