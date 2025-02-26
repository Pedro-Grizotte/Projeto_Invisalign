<!-- Conexão com o Banco de Dados -->

<?php
    define('HOST','localhost:3306');
    define('DATABASENAME','Projeto_Invisalign');
    define('USER','root');
    define('PASSWORD','boreal11');

    class Connect {
        protected $connection;

        function __construct() {
            $this->connectDatabase();
        }
        function connectDatabase() {
            try {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
            } catch (PDOException $e) {
                echo "Error!".$e->getMessage();
                die();
            }
        }
    }

    $testConnection = new Connect();
?>