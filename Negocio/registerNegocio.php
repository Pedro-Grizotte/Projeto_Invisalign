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
            // Criando o objeto usário da Classe ClientModel
            // Retorna esse usuario, para função insert(), que 
            // cadastra o user ao Banco de Dados.

            // Criando o hash da senha
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $usuario = new ClientModel();
            $usuario->setUsername($username);
            $usuario->setEmail($email);
            $usuario->setPassword($passwordHash);
            $usuario->setCheckbox($checkbox);
            return $this->registerDados->insert($usuario);       
        }
    }

?>