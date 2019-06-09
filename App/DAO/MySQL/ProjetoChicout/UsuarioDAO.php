<?php

namespace App\DAO\MySQL\ProjetoChicout;

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

    //=======================================================================

    //=======================================================================
    

}