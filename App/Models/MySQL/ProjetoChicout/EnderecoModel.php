<?php

namespace App\Models\MySQL\ProjetoChicout;

final class EnderecoModel
{
    /**
     * @var int
     */    
    private $id_endereco;

    /**
     * @var int
     */ 
    private $id_usuario;

    /**
     * @var string
     */
    private $logradouro;

    /**
     * @var int
     */ 
    private $numero;
    
    /**
     * @var string
     */
    private $cidade;

    /**
     * @var string
     */
    private $bairro;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var string
     */
    private $cep;

    /**
     * @var string
     */
    private $complemento;

    /**
     * @var string
     */
    private $referencia;

    //===============================================================
   /**
     * @return int
     */
    public function getIdEndereco(): int
    {
        return $this->id_endereco;
    }    
    /**
     * @param int id_endereco
     * @return EnderecoModel
     */
    public function setIdEndereco(int $id_endereco): EnderecoModel
    {
        $this->id_endereco = $id_endereco;
        return $this;
    }
    //===============================================================
    /**
     * @return int
     */
    public function getIdUsuario(): int
    {
        return $this->id_usuario;
    }
    /**
     * @param int id_usuario
     * @return EnderecoModel
     */
    public function setIdUsuario(int $id_usuario): EnderecoModel
    {
        $this->id_usuario = $id_usuario;
        return $this;
    }
    //===============================================================
    /**
     * @return string
     */
    public function getLogradouro(): string
    {
        return $this->logradouro;
    }
    /**
     * @param string logradouro
     * @return EnderecoModel
     */
    public function setLogradouro(string $logradouro): EnderecoModel
    {
        $this->logradouro = $logradouro;
        return $this;
    }
    //===============================================================    
    /**
     * @return int
     */
    public function getNumero(): int
    {
        return $this->numero;
    }
    /**
     * @param int numero
     * @return EnderecoModel
     */
    public function setNumero(int $numero): EnderecoModel
    {
        $this->numero = $numero;
        return $this;
    }
    //===============================================================        
    /**
     * @return string
     */
    public function getCidade(): string
    {
        return $this->cidade;
    }
    /**
     * @param string cidade
     * @return EnderecoModel
     */
    public function setCidade(string $cidade): EnderecoModel
    {
        $this->cidade = $cidade;
        return $this;
    }
    //===============================================================
    /**
     * @return string
     */
    public function getBairro(): string
    {
        return $this->bairro;
    }
    /**
     * @param string bairro
     * @return EnderecoModel
     */
    public function setBairro(string $bairro): EnderecoModel
    {
        $this->bairro = $bairro;
        return $this;
    }
    //===============================================================    
    /**
     * @return string
     */
    public function getEstado(): string
    {
        return $this->estado;
    }
    /**
     * @param string estado
     * @return EnderecoModel
     */
    public function setEstado(string $estado): EnderecoModel
    {
        $this->estado = $estado;
        return $this;
    }
    //=============================================================== 
    /**
     * @return string
     */
    public function getCep(): string
    {
        return $this->cep;
    }
    /**
     * @param string cep
     * @return EnderecoModel
     */
    public function setCep(string $cep): EnderecoModel
    {
        $this->cep = $cep;
        return $this;
    }
    //===============================================================
    /**
     * @return string
     */
    public function getComplemento(): string
    {
        return $this->complemento;
    }
    /**
     * @param string complemento
     * @return EnderecoModel
     */
    public function setComplemento(string $complemento): EnderecoModel
    {
        $this->complemento = $complemento;
        return $this;
    }
    //===============================================================
    /**
     * @return string
     */
    public function getReferencia(): string
    {
        return $this->referencia;
    }
    /**
     * @param string referencia
     * @return EnderecoModel
     */
    public function setReferencia(string $referencia): EnderecoModel
    {
        $this->referencia = $referencia;
        return $this;
    }    

}