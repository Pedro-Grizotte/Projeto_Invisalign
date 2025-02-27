<?php
    require_once '../Models/clientModel.php';
    require_once '../Configuration/database.php';
    class clientDados {
        private $database;

        public function __construct() {
            $this->database = Database::getInstance()->getConnection();
        }
        public function insert(ClientModel $usuario) {
            var_dump($usuario->getUsername(), $usuario->getEmail(), $usuario->getCheckbox());
            try {
                echo $usuario->getCheckbox();
                $stmt = $this->database->prepare("INSERT INTO clients (Username, Email, Password, Checkbox) VALUES(?,?,?,?)");
                $stmt->bindValue(1, $usuario->getUsername());
                $stmt->bindValue(2, $usuario->getEmail());
                $stmt->bindValue(3, $usuario->getPassword());
                $stmt->bindValue(4, $usuario->getCheckbox());
                $stmt->execute();
            } catch (PDOException $e) {
                die("Error : " . $e->getMessage());
            }
        }
    }
?>
