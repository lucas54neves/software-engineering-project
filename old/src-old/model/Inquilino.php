<?php
    class Inquilino {
        private $cpf;
        private $nome;
        private $nascimento;
        private $renda;
        private $imovelAlugado;
        private $aluguel;

        function __construct($cpf, $nome, $nascimento, $renda, $imovelAlugado, $aluguel) {
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->nascimento = $nascimento;
            $this->renda = $renda;
            $this->imovelAlugado = $imovelAlugado;
            $this->aluguel = $aluguel;
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

        function getRenda() {
            return $this->renda;
        }

        function getImovelAlugado() {
            return $this->imovelAlugado;
        }

        function getAluguel() {
            return $this->aluguel;
        }
    }
?>
