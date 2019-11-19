<?php
    class Imovel {
        private $logradouro;
        private $numero;
        private $bairro;
        private $aluguel;
        private $idImovel;

        function __construct($logradouro, $numero, $bairro, $aluguel, $idImovel) {
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->bairro = $bairro;
            $this->aluguel = $aluguel;
            $this->idImovel = $idImovel;
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

        function getIdImovel() {
            return $this->idImovel;
        }
    }
?>
