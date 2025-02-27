<?php
    require_once '../Configuration/database.php';
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
    }
?>