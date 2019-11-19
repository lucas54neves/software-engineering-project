<?php
    class Inquilino {
        private $nome;
        private $cpf;
        private $nascimento;
        private $renda;
        private $imovelAlugado;
        private $aluguel;

        function __construct($nome, $cpf, $nascimento, $renda, $imovelAlugado, $aluguel) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->nascimento = $nascimento;
            $this->renda = $renda;
            $this->imovelAlugado = $imovelAlugado;
            $this->aluguel = $aluguel;
        }

        function getNome() {
            return $this->nome;
        }

        function getCpf() {
            return $this->cpf;
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
