<?php
require_once '../Data/loginDados.php';

class LoginNegocio {
    private $loginDados;

    public function __construct() {
        $this->loginDados = new LoginDados();
    }

    public function authenticate($email, $password) {
        $login = $this->loginDados->verifyCredentials($email);
        if ($login && $password == $login['Password']) {
            return true;
        }
        return false;
    }
}
?>