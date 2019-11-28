<?php
    class Funcionario {
        private $cpf;
        private $nome;
        private $nascimento;
        private $email;
        private $senha;

        function __construct($cpf, $nome, $nascimento, $email, $senha) {
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->nascimento = $nascimento;
            $this->email = $email;
            $this->senha = $senha;
        }

        function getCpf() {
            return $this->cpf;
        }

        function getNome() {
            return $this->nome;
        }

        function getNascimento() {
            return $this->nascimento;
        }

        function getEmail() {
            return $this->email;
        }

        function getSenha() {
            return $this->senha;
        }
    }
?>
