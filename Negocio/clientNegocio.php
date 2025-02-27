<?php
    require_once '../Data/clientDados.php';

    // regra de negocio

    class ClientNegocio {
        private $clientDados;

        public function __construct() {
            $this->clientDados = new ClientDados();
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