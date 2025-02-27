<?php
    require_once '../Data/registerDados.php';

    // regra de negocio

    class RegisterNegocio {
        private $registerDados;

        public function __construct() {
            $this->registerDados = new RegisterDados();
        }
        public function register($username, $email, $password, $checkbox){
            $usuario = new ClientModel();
            $usuario->setUsername($username);
            $usuario->setEmail($email);
            $usuario->setPassword($password);
            $usuario->setCheckbox($checkbox);
            return $this->registerDados->insert($usuario);       
        }
    }

?>