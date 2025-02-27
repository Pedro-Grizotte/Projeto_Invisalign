<!-- Conexão com o Banco de Dados -->

<?php
    define('HOST','localhost:3306');
    define('DATABASENAME','Projeto_Invisalign');
    define('USER','root');
    define('PASSWORD','boreal11');
    
    class Database {
        protected $connection;
        private static $instance = null;

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
        public static function getInstance() {
            if (!self::$instance) {
                self::$instance = new Database();
            }
            return self::$instance;
        }
    
        public function getConnection() {
            return $this->connection;
        }
    }
    /*
    class Database {
        private static $instance = null;
        private $conn;
        private $host = 'localhost';
        private $user = 'root';
        private $pass = 'boreal11';
        private $dbname = 'Projeto_Invisalign';
    
        private function __construct() {
            try {
                $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }
            
        }
    
        public static function getInstance() {
            if (!self::$instance) {
                self::$instance = new Database();
            }
            return self::$instance;
        }
    
        public function getConnection() {
            return $this->conn;
        }
    }
    */
?>