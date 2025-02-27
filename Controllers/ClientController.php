<?php
    require_once '../Negocio/clientNegocio.php';
    // Recebe os parametros da view
    class ClientController {
        private $clientNegocio;

        public function __construct() {
            $this->clientNegocio = new ClientNegocio();
        }
        public function register(){
            try {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $checkbox = isset($_POST['checkbox']) ? 1 : 0; 
                    $this->clientNegocio->register($username, $email, $password, $checkbox);
                    echo "Cliente cadastrado com sucesso!";
                } 
            } catch (Exception $e) {    
                echo "Usuario não cadastrado!";
            }          
        }
    }
?>