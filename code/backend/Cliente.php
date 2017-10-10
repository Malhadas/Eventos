<?php

    class Cliente {

        private $email;
        private $password;
        private $nome_completo;
        private $telemovel;

        function aMemberFunc() {
            print 'Inside `aMemberFunc()`';
        }



        /*********Construtores****************/

        function __construct($email,
                             $password,
                             $nome_completo,
                             $telemovel = null) {

            $this->nome_completo = $nome_completo;
            $this->password      = $password;
            $this->email         = $email;
            if ($telemovel) $this->telemovel = $telemovel;
        }


        /***************Getter****************/

        public function getEmail() {
            return $this->email;
        }

        public function getTelemovel() {
            return $this->telemovel;
        }

        public function getPassword() {
            return $this->password;
        }

        public function getNome_completo() {
            return $this->nome_completo;
        }

        /***************Setters****************/

        public function setEmail($value) {
            $this->email = $value;
        }

        public function setTelemovel($value) {
            $this->telemovel = $value;
        }

        public function setPassword($value) {
            $this->password = $value;
        }

    }

/*****Testes*****/

//Cliente com telemovel
$cliente1 = new Cliente('ola1@gmail.com', 'ola1', 'nome1', 91);
//Cliente sem telemovel
$cliente2 = new Cliente('ola2@gmail.com', 'ola2', 'nome2');

print("Cliente 1\n");
print("---------\n");
print('mail:      ' . $cliente1->getEmail()         . "\n");
print('password:  ' . $cliente1->getPassword()      . "\n");
print('nome:      ' . $cliente1->getNome_completo() . "\n");
print('telemovel: ' . $cliente1->getTelemovel()     . "\n");

print("____________________________\n");

print("Cliente 2\n");
print("---------\n");
print('mail:      ' . $cliente2->getEmail()         . "\n");
print('password:  ' . $cliente2->getPassword()      . "\n");
print('nome:      ' . $cliente2->getNome_completo() . "\n");
print('telemovel: ' . $cliente2->getTelemovel()     . "\n");

?>
