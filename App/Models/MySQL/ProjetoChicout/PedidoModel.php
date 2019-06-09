<?php

namespace App\Models\MySQL\ProjetoChicout;

final class PedidoModel
{
    /**
     * @var int
     */  
    private $id_pedido;
    
    /**
     * @var int
     */  
    private $id_usuario;
    
    /**
     * @var int
     */      
    private $id_formaPagamento;
    
    /**
     * @var string
     */   
    private $data_pedido;
    
    /**
     * @var string
     */ 
    private $data_entrega;
    
    /**
     * @var float
     */
    private $valor_pedido;

    //======================================================================= 
    /**
     * @return int
     */
    public function getIdPedido(): int
    {
        return $this->id_pedido;
    }

    /**
     * @param int id_pedido
     * @return PedidoModel
     */
    public function setIdPedido(int $id_pedido): PedidoModel
    {
        $this->id_pedido = $id_pedido;
        return $this;
    }
    //=======================================================================
    /**
     * @return int
     */
    public function getIdUsuario(): int
    {
        return $this->id_usuario;
    }

    /**
     * @param int id_usuario
     * @return PedidoModel
     */
    public function setIdUsuario(int $id_usuario): PedidoModel
    {
        $this->id_usuario = $id_usuario;
        return $this;
    }
    //=======================================================================
    /**
     * @return int
     */
    public function getIdFormaPagamento(): int
    {
        return $this->id_formaPagamento;
    }

    /**
     * @param int id_formaPagamento
     * @return PedidoModel
     */
    public function setIdFormaPagamento(int $id_formaPagamento): PedidoModel
    {
        $this->id_formaPagamento = $id_formaPagamento;
        return $this;
    }     
    //=======================================================================
    /**
     * @return string
     */
    public function getDataPedido(): string
    {
        return $this->data_pedido;
    }

    /**
     * @param string data_pedido
     * @return PedidoModel
     */
    public function setDataPedido(string $data_pedido): PedidoModel
    {
        $this->data_pedido = $data_pedido;
        return $this;
    }   
    //=======================================================================
    /**
     * @return string
     */
    public function getDataEntrega(): string
    {
        return $this->data_entrega;
    }

    /**
     * @param string data_entrega
     * @return PedidoModel
     */
    public function setDataEntrega(string $data_entrega): PedidoModel
    {
        $this->data_entrega = $data_entrega;
        return $this;
    } 
    
    //=======================================================================
    /**
     * @return float
     */
    public function getValorPedido(): float
    {
        return $this->valor_pedido;
    }

    /**
     * @param float valor_pedido
     * @return PedidoModel
     */
    public function setValorPedido(float $valor_pedido): PedidoModel
    {
        $this->valor_pedido = $valor_pedido;
        return $this;
    }    
    
}