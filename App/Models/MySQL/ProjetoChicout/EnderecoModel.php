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
     * @var int
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
    public function getIdEnderco(): int
    {
        return $this->id_endereco;
    }

    /**
     * @param int id_endereco
     * @return EnderecoModel
     */
    public function setIdEnderco(int $id_endereco): EnderecoModel
    {
        $this->id_endereco = $id_endereco;
        return $this;
    }










}