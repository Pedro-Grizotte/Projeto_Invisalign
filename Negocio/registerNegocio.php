<?php
    require_once '../Data/registerDados.php';

    // regra de negocio

    class RegisterNegocio {
        private $clientDados;

        public function __construct() {
            $this->clientDados = new RegisterDados();
        }
        public function register($username, $email, $password, $checkbox){
            $usuario = new ClientModel();
            $usuario->setUsername($username);
            $usuario->setEmail($email);
            $usuario->setPassword($password);
            $usuario->setCheckbox($checkbox);
            return $this->clientDados->insert($usuario);       
        }
    }

?>