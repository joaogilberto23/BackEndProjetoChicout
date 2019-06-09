<?php

namespace App\DAO\MySQL\ProjetoChicout;
use App\Models\MySQL\ProjetoChicout\UsuarioModel;

class UsuarioDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }
    //=======================================================================
    public function getAllUsuario(): array
    {
        $usuario = $this->pdo
            ->query('SELECT
                        id_usuario,
                        tipo_usuario,
                        nome,
                        login,
                        senha,
                        cpf,
                        email,
                        data_nascimento,
                        tel_celular,
                        tel_fixo
                    FROM usuario;')
            ->fetchAll(\PDO::FETCH_ASSOC);

        return $usuario;
    }
    //=======================================================================
    public function insertUsuario(UsuarioModel $usuario): void
    {
        $statement = $this->pdo
            ->prepare('INSERT INTO usuario
                       VALUES(NULL,
                              :tipo_usuario,
                              :nome,
                              :login,
                              :senha,
                              :cpf,
                              :email,
                              :data_nascimento,
                              :tel_celular,
                              :tel_fixo);');
        $statement->execute([
            'tipo_usuario' => $usuario->getTipoUsuario(),
            'nome' => $usuario->getNome(),
            'login' => $usuario->getLogin(),
            'senha' => $usuario->getSenha(),
            'cpf' => $usuario->getCpf(),
            'email' => $usuario->getEmail(),
            'data_nascimento' => $usuario->getDataNascimento(),
            'tel_celular' => $usuario->getTelCelular(),
            'tel_fixo' => $usuario->getTelFixo()
            ]);
    }
    //=======================================================================
    public function updateUsuario(UsuarioModel $usuario): void
    {
        $statement = $this->pdo
            ->prepare('UPDATE usuario SET   
                       tipo_usuario = :tipo_usuario,
                       nome = :nome,
                       login = :login,
                       senha = :senha,
                       cpf = :cpf,
                       email = :email,
                       data_nascimento = :data_nascimento,
                       tel_celular = :tel_celular,
                       tel_fixo = :tel_fixo
                      WHERE id_usuario = :id_usuario;');
        $statement->execute([
            'id_usuario' => $usuario->getIdUsuario(),
            'tipo_usuario' => $usuario->getTipoUsuario(),
            'nome' => $usuario->getNome(),
            'login' => $usuario->getLogin(),
            'senha' => $usuario->getSenha(),
            'cpf' => $usuario->getCpf(),
            'email' => $usuario->getEmail(),
            'data_nascimento' => $usuario->getDataNascimento(),
            'tel_celular' => $usuario->getTelCelular(),
            'tel_fixo' => $usuario->getTelFixo()
            ]);
    }
    //=======================================================================
    public function deleteUsuario(int $id_usuario): void
    {
        $statement = $this->pdo
            ->prepare('DELETE FROM usuario 
                       WHERE id_usuario = :id_usuario;');
        $statement->execute([
            'id_usuario' => $id_usuario
            ]);
    }
}