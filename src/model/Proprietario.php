<?php
    class Proprietario {
        private $cpf;
        private $nome;
        private $email;
        private $nascimento;
        private $senha;

        function __construct($cpf, $nome, $email, $nascimento, $senha) {
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->email = $email;
            $this->nascimento = $nascimento;
            $this->senha = $senha;
        }

        function getCpf() {
            return $this->cpf;
        }

        function getNome() {
            return $this->nome;
        }

        function getEmail() {
            return $this->email;
        }

        function getNascimento() {
            return $this->nascimento;
        }

        function getSenha() {
            return $this->senha;
        }
    }
 ?>
