<?php
    require_once '../Data/registerDados.php';

    // regra de negocio

    class RegisterNegocio {
        private $registerDados;

        public function __construct() {
            $this->registerDados = new RegisterDados();
        }
        public function register($username, $email, $password, $checkbox){
            // Verificando se o usuário já existe
            if($this->registerDados->verify($username, $email)){
                throw new Exception("Usuário já cadastrado ao sistema!");
            }
            $usuario = new ClientModel();
            $usuario->setUsername($username);
            $usuario->setEmail($email);
            $usuario->setPassword($password);
            $usuario->setCheckbox($checkbox);
            return $this->registerDados->insert($usuario);       
        }
    }

?>