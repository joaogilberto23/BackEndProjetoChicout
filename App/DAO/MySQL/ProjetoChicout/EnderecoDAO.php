<?php

namespace App\DAO\MySQL\ProjetoChicout;
use App\Models\MySQL\ProjetoChicout\EnderecoModel;

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
    public function insertEndereco(EnderecoModel $endereco): void
    {
        $statement = $this->pdo
            ->prepare('INSERT INTO endereco
                       VALUES(NULL,
                             :id_usuario,
                             :logradouro,
                             :numero,
                             :cidade,
                             :bairro,
                             :estado,
                             :cep,
                             :complemento,
                             :referencia);');
        $statement->execute([
                'id_usuario' => $endereco->getIdUsuario(),
                'logradouro' => $endereco->getLogradouro(),
                'numero' => $endereco->getNumero(),
                'cidade' => $endereco->getCidade(),
                'bairro' => $endereco->getBairro(),
                'estado'=> $endereco->getEstado(),
                'cep' => $endereco->getCep(),
                'complemento' => $endereco->getComplemento(),
                'referencia' => $endereco->getReferencia()
                ]);
    }
    //=======================================================================
    public function updateEndereco(EnderecoModel $endereco): void
    {
            $statement = $this->pdo
                ->prepare('UPDATE endereco SET   
                                  id_usuario = :id_usuario,
                                  logradouro = :logradouro,
                                  numero = :numero,
                                  cidade = :cidade,
                                  bairro = :bairro,
                                  estado = :estado,
                                  cep = :cep,
                                  complemento = :complemento,
                                  referencia = :referencia
                          WHERE id_endereco = :id_endereco;');

            $statement->execute([
                'id_endereco' => $endereco->getIdEndereco(),
                'id_usuario' => $endereco->getIdUsuario(),
                'logradouro' => $endereco->getLogradouro(),
                'numero' => $endereco->getNumero(),
                'cidade' => $endereco->getCidade(),
                'bairro' => $endereco->getBairro(),
                'estado' => $endereco->getEstado(),
                'cep' => $endereco->getCep(),
                'complemento' => $endereco->getComplemento(),
                'referencia' => $endereco->getReferencia()
                ]);                
    }
    //=======================================================================
    public function deleteEndereco(int $id_endereco): void
    {
        $statement = $this->pdo
            ->prepare('DELETE FROM endereco 
                       WHERE id_endereco = :id_endereco;');
        $statement->execute([
            'id_endereco' => $id_endereco
            ]);
    } 
           
}