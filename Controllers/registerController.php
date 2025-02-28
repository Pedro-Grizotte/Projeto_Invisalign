<?php
    require_once '../Negocio/registerNegocio.php';
    // Recebe os parametros da view
    class RegisterController {
        private $clientNegocio;

        public function __construct() {
            $this->clientNegocio = new RegisterNegocio();
        }
        public function register(){
            try {
                // Recebe os dados do formulario
                // Envia esses dados para register() na camada de Negocio
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $checkbox = isset($_POST['checkbox']) ? 1 : 0; 
                    $this->clientNegocio->register($username, $email, $password, $checkbox);
                } 
            } catch (Exception $e) {    
                echo "Erro: " . $e->getMessage();
            }          
        }
    }
?>