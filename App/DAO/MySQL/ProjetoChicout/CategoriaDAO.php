<?php

namespace App\DAO\MySQL\ProjetoChicout;

use App\Models\MySQL\ProjetoChicout\CategoriaModel;

class CategoriaDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    //=======================================================================

    public function getAllCategoria(): array
    {
        $categoria = $this->pdo
            ->query('SELECT
                        id_categoria,
                        tipo_categoria
                    FROM categoria;')
            ->fetchAll(\PDO::FETCH_ASSOC);

        return $categoria;
    }

    //=======================================================================

    public function insertCategoria(CategoriaModel $categoria): void
    {
        $statement = $this->pdo
            ->prepare('INSERT INTO categoria
                       VALUES(NULL,
                              :tipo_categoria);');
        $statement->execute([
                'tipo_categoria' => $categoria->getTipoCategoria()
        ]);
    }

    //=======================================================================

    public function updateCategoria(CategoriaModel $categoria): void
    {
        $statement = $this->pdo
            ->prepare('UPDATE categoria SET
                tipo_categoria = :tipo_categoria
                WHERE id_categoria = :id_categoria;');
        $statement->execute([
            'tipo_categoria' => $categoria->getTipoCategoria(),
            'id_categoria' => $categoria->getIdCategoria()
        ]);
    }

    //=======================================================================

    public function deleteCategoria(int $id_categoria): void
    {
        $statement = $this->pdo
            ->prepare('DELETE FROM categoria 
                WHERE id_categoria = :id_categoria;');
        $statement->execute([
            'id_categoria' => $id_categoria
        ]);
    }

}