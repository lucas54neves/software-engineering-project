<?php
    class Imovel {
        private $logradouro;
        private $numero;
        private $bairro;
        private $aluguel;

        function __construct($logradouro, $numero, $bairro, $aluguel) {
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->bairro = $bairro;
            $this->aluguel = $aluguel;
        }

        function getLogradouro() {
            return $this->logradouro;
        }

        function getNumero() {
            return $this->numero;
        }

        function getBairro() {
            return $this->bairro;
        }

        function getAluguel() {
            return $this->aluguel;
        }
    }
?>
