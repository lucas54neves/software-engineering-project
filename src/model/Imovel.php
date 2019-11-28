<?php
    class Imovel {
        private $id;
        private $logradouro;
        private $numero;
        private $bairro;
        private $aluguel;
        private $cpfProprietario;

        function __construct($id, $logradouro, $numero, $bairro, $aluguel, $cpfProprietario) {
            $this->id = $id;
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->bairro = $bairro;
            $this->aluguel = $aluguel;
            $this->cpfProprietario = $cpfProprietario;
        }

        function getId() {
            return $this->id;
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

        function getCpfProprietario() {
            return $this->cpfProprietario;
        }
    }
 ?>
