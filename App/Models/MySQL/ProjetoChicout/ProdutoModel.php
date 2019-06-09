<?php

namespace App\Models\MySQL\ProjetoChicout;

final class ProdutoModel
{

    /**
     * @var int
     */    
    private $id_produto;
    
    /**
     * @var int
     */    
    private $id_categoria;
    
    /**
     * @var string
     */    
    private $nome;
    
    /**
     * @var float
     */    
    private $valor_produto;
    
    /**
     * @var int
     */    
    private $estoque;
    
    /**
     * @var string
     */    
    private $tamanho;

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
     * @return ProdutoModel
     */
    public function setIdProduto(int $id_produto): ProdutoModel
    {
        $this->id_produto = $id_produto;
        return $this;
    }
    //=======================================================================
    /**
     * @return int
     */
    public function getIdCategoria(): int
    {
        return $this->id_categoria;
    }
    
    /**
     * @param int id_categoria
     * @return ProdutoModel
     */
    public function setIdCategoria(int $id_categoria): ProdutoModel
    {
        $this->id_categoria = $id_categoria;
        return $this;
    }
    //=======================================================================
    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }
    
    /**
     * @param string nome
     * @return ProdutoModel
     */
    public function setNome(string $nome): ProdutoModel
    {
        $this->nome = $nome;
        return $this;
    }
    //=======================================================================
    /**
     * @return float
     */
    public function getValorProduto(): float
    {
        return $this->valor_produto;
    }
    
    /**
     * @param float valor_produto
     * @return ProdutoModel
     */
    public function setValorProduto(float $valor_produto): ProdutoModel
    {
        $this->valor_produto = $valor_produto;
        return $this;
    }    
    //=======================================================================
    /**
     * @return int
     */
    public function getEstoque(): int
    {
        return $this->estoque;
    }
    
    /**
     * @param int estoque
     * @return ProdutoModel
     */
    public function setEstoque(int $estoque): ProdutoModel
    {
        $this->estoque = $estoque;
        return $this;
    }
    //=======================================================================
    /**
     * @return string
     */
    public function getTamanho(): string
    {
        return $this->tamanho;
    }
    
    /**
     * @param string tamanho
     * @return ProdutoModel
     */
    public function setTamanho(string $tamanho): ProdutoModel
    {
        $this->tamanho = $tamanho;
        return $this;
    }

}