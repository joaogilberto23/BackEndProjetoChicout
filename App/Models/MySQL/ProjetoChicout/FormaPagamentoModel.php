<?php

namespace App\Models\MySQL\ProjetoChicout;

final class FormaPagamentoModel
{

    /**
     * @var int
     */    
    private $id_formaPagamento;

    /**
     * @var string
     */
    private $descricao_fp;

    /**
     * @var string
     */
    private $tipo_fp;

    //=======================================================================

    /**
     * @return int
     */
    public function getIdFormaPagamento(): int
    {
        return $this->id_formaPagamento;
    }

    /**
     * @param int id_formaPagamento
     * @return FormaPagamentoModel
     */
    public function setIdFormaPagamento(int $id_formaPagamento): FormaPagamentoModel
    {
        $this->id_formaPagamento = $id_formaPagamento;
        return $this;
    }

    //=======================================================================

    /**
     * @return int
     */
    public function getDescricaoFp(): string
    {
        return $this->descricao_fp;
    }

    /**
     * @param int descricao_fp
     * @return FormaPagamentoModel
     */
    public function setDescricaoFp(string $descricao_fp): FormaPagamentoModel
    {
        $this->descricao_fp = $descricao_fp;
        return $this;
    }

    //=======================================================================

    /**
     * @return int
     */
    public function getTipoFp(): string
    {
        return $this->tipo_fp;
    }

    /**
     * @param int tipo_fp
     * @return FormaPagamentoModel
     */
    public function setTipoFp(string $tipo_fp): FormaPagamentoModel
    {
        $this->tipo_fp = $tipo_fp;
        return $this;
    }

}