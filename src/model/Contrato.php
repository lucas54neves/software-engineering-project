<?php
    class Contrato {
        private $idContrato;
        private $aluguelContrato;
        private $idImovel;
        private $cpfProprietario;
        private $cpfFuncionario;
        private $cpfCliente;

        function __construct($idContrato, $aluguelContrato, $idImovel, $cpfProprietario, $cpfFuncionario, $cpfCliente) {
            $this->idContrato = $idContrato;
            $this->aluguelContrato = $aluguelContrato;
            $this->idImovel = $idImovel;
            $this->cpfProprietario = $cpfProprietario;
            $this->cpfFuncionario = $cpfFuncionario;
            $this->cpfCliente = $cpfCliente;
        }

        function getIdContrato() {
            return $this->idContrato;
        }

        function getAluguelContrato() {
            return $this->aluguelContrato;
        }

        function getIdImovel() {
            return $this->idImovel;
        }

        function getCpfProprietario() {
            return $this->cpfProprietario;
        }

        function getCpfFuncionario() {
            return $this->cpfFuncionario;
        }

        function getCpfCliente() {
            return $this->cpfCliente;
        }
    }
 ?>
