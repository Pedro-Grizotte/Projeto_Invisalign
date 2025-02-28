<?php
require_once '../Negocio/loginNegocio.php';

class LoginController {
    private $loginNegocio;

    public function __construct() {
        $this->loginNegocio = new LoginNegocio();
    }

    public function login() {
        try {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = $_POST['email'];
                $password = $_POST['password'];
                if ($this->loginNegocio->authenticate($email, $password)) {
                    header("Location: ../Views/Home/client.php");
                } else {
                    echo "Credenciais inválidas";
                }
            }
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}
?>