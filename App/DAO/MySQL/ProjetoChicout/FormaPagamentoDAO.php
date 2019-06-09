<?php

namespace App\DAO\MySQL\ProjetoChicout;
use App\Models\MySQL\ProjetoChicout\FormaPagamentoModel;

class FormaPagamentoDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }
    //=======================================================================
    public function getAllFormaPagamento(): array
    {
        $formapagamento = $this->pdo
            ->query('SELECT
                        id_formaPagamento,
                        descricao_fp,
                        tipo_fp
                    FROM formapagamento;')
            ->fetchAll(\PDO::FETCH_ASSOC);

        return $formapagamento;
    }
    //=======================================================================
    public function insertFormaPagamento(FormaPagamentoModel $formapagamento): void
    {
        $statement = $this->pdo
            ->prepare('INSERT INTO formapagamento
                       VALUES(NULL,
                              :descricao_fp,
                              :tipo_fp);');
        $statement->execute([
                'descricao_fp' => $formapagamento->getDescricaoFp(),
                'tipo_fp' => $formapagamento->getTipoFp()
                ]);
    }
    //=======================================================================
    public function updateFormaPagamento(FormaPagamentoModel $formapagamento): void
    {
        $statement = $this->pdo
            ->prepare('UPDATE formapagamento SET
                        descricao_fp = :descricao_fp,
                        tipo_fp = :tipo_fp
                      WHERE id_formaPagamento = :id_formaPagamento;');
        $statement->execute([
            'id_formaPagamento' => $formapagamento->getIdFormaPagamento(),
            'descricao_fp' => $formapagamento->getDescricaoFp(),
            'tipo_fp' => $formapagamento->getTipoFp()
            ]);
    }
    //=======================================================================
    public function deleteFormaPagamento(int $id_formaPagamento): void
    {
        $statement = $this->pdo
            ->prepare('DELETE FROM formapagamento 
                       WHERE id_formaPagamento = :id_formaPagamento;');
        $statement->execute([
            'id_formaPagamento' => $id_formaPagamento
            ]);
    }
}