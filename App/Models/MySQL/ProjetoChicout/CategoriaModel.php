<?php

namespace App\Models\MySQL\ProjetoChicout;

final class CategoriaModel
{
    /**
     * @var int
     */
    private $id_categoria;

    /**
     * @var string
     */
    private $tipo_categoria;

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
     * @return CategoriaModel
     */
    public function setIdCategoria(int $id_categoria): CategoriaModel
    {
        $this->id_categoria = $id_categoria;
        return $this;
    }
    //=======================================================================
    /**
     * @return string
     */
    public function getTipoCategoria(): string
    {
        return $this->tipo_categoria;
    }

    /**
     * @param string tipo_categoria
     * @return CategoriaModel
     */
    public function setTipoCategoria(string $tipo_categoria): CategoriaModel
    {
        $this->tipo_categoria = $tipo_categoria;
        return $this;
    }

}