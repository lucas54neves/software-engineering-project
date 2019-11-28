<?php
    class Imovel {
        private $idImovel;
        private $cpfProprietario;
        private $logradouro;
        private $numero;
        private $bairro;
        private $aluguel;

        function __construct($idImovel, $cpfProprietario, $logradouro, $numero, $bairro, $aluguel) {
            $this->idImovel = $idImovel;
            $this->cpfProprietario = $cpfProprietario;
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->bairro = $bairro;
            $this->aluguel = $aluguel;
        }

        function getIdImovel() {
            return $this->idImovel;
        }

        function getCpfProprietario() {
            return $this->cpfProprietario;
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
