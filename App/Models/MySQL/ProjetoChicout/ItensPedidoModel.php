<?php

namespace App\Models\MySQL\ProjetoChicout;

final class ItensPedidoModel
{
    /**
     * @var int
     */ 
    private $id_pedido;

    /**
     * @var int
     */ 
    private $id_produto;

    /**
     * @var int
     */ 
    private $quantidade;

    /**
     * @var float
     */
    private $valor_itens;

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
     * @return ItensPedidoModel
     */
    public function setIdPedido(int $id_pedido): ItensPedidoModel
    {
        $this->id_pedido = $id_pedido;
        return $this;
    }
    //=======================================================================
    /**
     * @return int
     */
    public function getIdProduto(): int
    {
        return $this->id_produto;
    }
    /**
     * @param int id_produto
     * @return ItensPedidoModel
     */
    public function setIdProduto(int $id_produto): ItensPedidoModel
    {
        $this->id_produto = $id_produto;
        return $this;
    }
    //=======================================================================
    /**
     * @return int
     */
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }
    /**
     * @param int quantidade
     * @return ItensPedidoModel
     */
    public function setQuantidade(int $quantidade): ItensPedidoModel
    {
        $this->quantidade = $quantidade;
        return $this;
    }
    //=======================================================================
    /**
     * @return float
     */
    public function getValorItens(): float
    {
        return $this->valor_itens;
    }
    /**
     * @param float valor_itens
     * @return ItensPedidoModel
     */
    public function setValorItens(float $valor_itens): ItensPedidoModel
    {
        $this->valor_itens = $valor_itens;
        return $this;
    }

}