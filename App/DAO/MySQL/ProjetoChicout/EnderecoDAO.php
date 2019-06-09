<?php

namespace App\DAO\MySQL\ProjetoChicout;

class EnderecoDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }
    //=======================================================================
        public function getAllEndereco(): array
        {
            $endereco = $this->pdo
                ->query('SELECT
                        id_endereco,
                        id_usuario,
                        logradouro,
                        numero,
                        cidade,
                        bairro,
                        estado,
                        cep,
                        complemento,
                        referencia
                        FROM endereco;')
                ->fetchAll(\PDO::FETCH_ASSOC);
    
            return $endereco;
        }
    //=======================================================================
        
}