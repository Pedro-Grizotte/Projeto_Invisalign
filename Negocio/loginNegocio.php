<?php
require_once '../Data/loginDados.php';

class LoginNegocio {
    private $loginDados;

    public function __construct() {
        $this->loginDados = new LoginDados();
    }

    public function authenticate($email, $password) {
        // Recebe os dados da controller, e faz a verificação se
        // o usuário existe e se a senha está correta
        $login = $this->loginDados->verifyCredentials($email);
        if ($login && password_verify($password, $login['Password'])) {
            return true;
        }
        return false;
    }
}
?>