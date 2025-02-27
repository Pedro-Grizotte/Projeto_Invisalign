<?php
    require_once '../Configuration/connect.php';
    class ClientModel {
        private $username;
        private $password;
        private $email;
        private $checkbox;
        
        public function getUsername(){
            return $this->username;
        }
        function setUsername($username){
            $this->username = $username;
        }
        public function getEmail(){
            return $this->email;
        }
        function setEmail($email){
            $this->email = $email;
        }
        public function getPassword(){
            return $this->password;
        }
        function setPassword($password){
            $this->password = $password;
        }
        public function getCheckbox(){
            return $this->checkbox;
        }
        function setCheckbox($checkbox){
            $this->checkbox = $checkbox;
        }

        // Login de cliente abaixo

        private $login_email;
        private $login_pwd;
        private $login_remeberme;

        function getLogin_email(){
            return $this->login_email;
        }
        function setLogin_email($login_email){
            $this->login_email = $login_email;
        }
        function getLogin_pwd(){
            return $this->login_pwd;
        }
        function setLogin_pwd($login_pwd){
            $this->login_pwd = $login_pwd;
        }
        function getLogin_remeberme(){
            return $this->login_remeberme;
        }
        function setLogin_remeberme($login_remeberme){
            $this->login_remeberme = $login_remeberme;
        }
    }
?>