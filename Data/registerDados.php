<?php
    require_once '../Models/clientModel.php';
    require_once '../Configuration/connect.php';
    class RegisterDados {
        private $database;

        public function __construct() {
            $this->database = Connect::getInstance()->getConnection();
        }
        public function insert(ClientModel $usuario) {
            //var_dump($usuario->getUsername(), $usuario->getEmail(), $usuario->getCheckbox());
            try {
                $stmt = $this->database->prepare("INSERT INTO clients (Username, Email, Password, Checkbox) VALUES(?,?,?,?)");
                $stmt->bindValue(1, $usuario->getUsername());
                $stmt->bindValue(2, $usuario->getEmail());
                $stmt->bindValue(3, $usuario->getPassword());
                $stmt->bindValue(4, $usuario->getCheckbox());
                $stmt->execute();
            } catch (PDOException $e) {
                echo "Error : " . $e->getMessage();
            }
        }
        public function verify($username, $email) {
            try {
                $stmt = $this->database->query("SELECT COUNT(*) FROM clients WHERE Username = '".$username. "' OR Email  = '".$email. "'");
                return $stmt->fetchColumn();
            } catch (PDOException $e) {
                echo "Error : " . $e->getMessage();
            }
        }
    }
?>
