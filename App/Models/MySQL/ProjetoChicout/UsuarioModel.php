<?php

namespace App\Models\MySQL\ProjetoChicout;

final class UsuarioModel
{
    /**
     * @var int
     */ 
    private $id_usuario;

    /**
     * @var string
     */ 
    private $tipo_usuario;

    /**
     * @var string
     */ 
    private $nome;

    /**
     * @var string
     */ 
    private $login;

    /**
     * @var string
     */ 
    private $senha;

    /**
     * @var string
     */ 
    private $cpf;

    /**
     * @var string
     */ 
    private $email;

    /**
     * @var string
     */ 
    private $data_nascimento;

    /**
     * @var string
     */ 
    private $tel_celular;

    /**
     * @var string
     */ 
    private $tel_fixo;

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
     * @return UsuarioModel
     */
    public function setIdUsuario(int $id_usuario): UsuarioModel
    {
        $this->id_usuario = $id_usuario;
        return $this;
    }
    //=======================================================================
    /**
     * @return string
     */
    public function getTipoUsuario(): string
    {
        return $this->tipo_usuario;
    }

    /**
     * @param string tipo_usuario
     * @return UsuarioModel
     */
    public function setTipoUsuario(string $tipo_usuario): UsuarioModel
    {
        $this->tipo_usuario = $tipo_usuario;
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
     * @return UsuarioModel
     */
    public function setNome(string $nome): UsuarioModel
    {
        $this->nome = $nome;
        return $this;
    }
    //=======================================================================
    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string login
     * @return UsuarioModel
     */
    public function setLogin(string $login): UsuarioModel
    {
        $this->login = $login;
        return $this;
    }
    //=======================================================================
    /**
     * @return string
     */
    public function getSenha(): string
    {
        return $this->senha;
    }

    /**
     * @param string senha
     * @return UsuarioModel
     */
    public function setSenha(string $senha): UsuarioModel
    {
        $this->senha = $senha;
        return $this;
    }
    //=======================================================================
    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param string cpf
     * @return UsuarioModel
     */
    public function setCpf(string $cpf): UsuarioModel
    {
        $this->cpf = $cpf;
        return $this;
    }
    //=======================================================================
    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string email
     * @return UsuarioModel
     */
    public function setEmail(string $email): UsuarioModel
    {
        $this->email = $email;
        return $this;
    }   
    //=======================================================================
    /**
     * @return string
     */
    public function getDataNascimento(): string
    {
        return $this->data_nascimento;
    }

    /**
     * @param string data_nascimento 
     * @return UsuarioModel
     */
    public function setDataNascimento(string $data_nascimento): UsuarioModel
    {
        $this->data_nascimento = $data_nascimento ;
        return $this;
    }         
    //=======================================================================
    /**
     * @return string
     */
    public function getTelCelular(): string
    {
        return $this->tel_celular;
    }

    /**
     * @param string tel_celular
     * @return UsuarioModel
     */
    public function setTelCelular(string $tel_celular): UsuarioModel
    {
        $this->tel_celular = $tel_celular;
        return $this;
    }    
    //=======================================================================
    /**
     * @return string
     */
    public function getTelFixo(): string
    {
        return $this->tel_fixo;
    }

    /**
     * @param string tel_fixo
     * @return UsuarioModel
     */
    public function setTelFixo(string $tel_fixo): UsuarioModel
    {
        $this->tel_fixo = $tel_fixo;
        return $this;
    } 

}