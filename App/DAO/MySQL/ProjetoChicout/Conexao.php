<?php

namespace App\DAO\MySQL\ProjetoChicout;

abstract class Conexao
{
    /**
     * @var \PDO
     */
    protected $pdo;

    public function __construct()
    {
        $host = getenv('PROJETOCHICOUT_MYSQL_HOST');
        $port = getenv('PROJETOCHICOUT_MYSQL_PORT'); 
        $dbname = getenv('PROJETOCHICOUT_MYSQL_DBNAME');
        $user= getenv('PROJETOCHICOUT_MYSQL_USER');
        $pass = getenv('PROJETOCHICOUT_MYSQL_PASSWORD'); 
                
        $dsn = "mysql:host={$host};port={$port};dbname={$dbname}";
        
        $this->pdo = new \PDO($dsn, $user, $pass);
        $this->pdo->setAttribute(
            \PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION
        );
    }

}